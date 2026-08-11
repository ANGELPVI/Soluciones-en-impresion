@extends('layouts.app')

@section('sesion')
    @php
        $imagenPrincipal = $imagenes->first() ?: $producto->img;
        $caracteristicas = collect($caracteristicas ?? []);
        $beneficiosCompra = collect($beneficiosCompra ?? []);
        $modelo = $producto->modelo ?? ($producto->nombre ?? '');
        $sku = $producto->sku ?? strtoupper($tipo) . '-' . $producto->id;
        $mensajeCompra = rawurlencode(
            'Hola, me interesa comprar el producto: ' .
                $titulo .
                ' con precio $' .
                number_format($producto->precio, 2, '.', ','),
        );
    @endphp

    <main class="producto-show-pagina">
        <section class="producto-show-contenedor">
            <div class="producto-show-grid">
                <div class="producto-show-media">
                    <div class="producto-show-imagen-principal">
                        <button type="button" class="producto-show-flecha producto-show-flecha-izquierda"
                            id="productoImagenAnterior" aria-label="Imagen anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>

                        <img id="productoImagenPrincipal" src="{{ $imagenPrincipal }}" alt="{{ $titulo }}">

                        <button type="button" class="producto-show-flecha producto-show-flecha-derecha"
                            id="productoImagenSiguiente" aria-label="Imagen siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <div class="producto-show-miniaturas" id="productoGaleriaMiniaturas">
                        @foreach ($imagenes as $imagen)
                            <button type="button" class="producto-show-miniatura" data-image="{{ $imagen }}"
                                data-index="{{ $loop->index }}">
                                <img src="{{ $imagen }}" alt="{{ $titulo }}">
                            </button>
                        @endforeach
                    </div>

                    <div class="producto-show-caracteristicas">
                        <h2><i class="far fa-star"></i> Caracteristicas Principales</h2>

                        @if ($caracteristicas->count())
                            <ul>
                                @foreach ($caracteristicas as $caracteristica)
                                    <li>{{ $caracteristica }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ $descripcion }}</p>
                        @endif
                    </div>

                </div>



                <div class="producto-show-lateral">
                    <div class="producto-show-card-compra">
                        <h1>{{ $titulo }}</h1>
                        <p class="producto-show-precio">${{ number_format($producto->precio, 2, '.', ',') }} MXN</p>

                        <div class="producto-show-opciones">
                            <div>
                                <span>Cantidad</span>
                                <div class="producto-show-grupo-botones">
                                    <button type="button" class="producto-show-opcion producto-show-opcion-activa"
                                        data-cantidad="1">1</button>
                                    <button type="button" class="producto-show-opcion" data-cantidad="2">2</button>
                                    <button type="button" class="producto-show-opcion" data-cantidad="3">3+</button>
                                </div>
                            </div>

                            {{-- <div>
                                <span>Variante</span>
                                <div class="producto-show-grupo-botones">
                                    <button type="button" class="producto-show-variante producto-show-variante-activa">White</button>
                                    <button type="button" class="producto-show-variante producto-show-variante-oscura">Black</button>
                                </div>
                            </div> --}}
                        </div>

                        <button type="button" id="addProductToCart" class="producto-show-btn-carrito"
                            data-id="{{ $producto->id }}" data-type="{{ $tipo }}"
                            data-title="{{ $titulo }}" data-price="{{ $producto->precio }}"
                            data-image="{{ $imagenPrincipal }}">
                            Anadir al Carrito
                        </button>

                        <a href="https://wa.me/527581036078?text={{ $mensajeCompra }}" target="_blank" rel="noopener"
                            class="producto-show-btn-comprar">
                            Comprar Ahora
                        </a>
                    </div>

                    <div class="producto-show-descripcion">
                        <div class="producto-show-detalles">
                            <span>Marca: {{ $producto->marca }}</span>
                            <span>Modelo: {{ $modelo }}</span>
                            <span>SKU: {{ $sku }}</span>
                            <span>Stock: {{ $producto->stock }} piezas</span>
                        </div>
                    </div>

                    <div class="producto-show-beneficios">
                        <h2><i class="fas fa-shield-alt"></i> Beneficios de comprar con nosotros</h2>

                        <div class="producto-show-beneficios-lista">
                            @foreach ($beneficiosCompra as $beneficio)
                                <div class="producto-show-beneficio-card">
                                    <i class="{{ $beneficio['icono'] }}"></i>
                                    <div>
                                        <strong>{{ $beneficio['titulo'] }}</strong>
                                        <p>{{ $beneficio['texto'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="producto-show-relacionados">
                        <h2><i class="fas fa-store"></i> Productos relacionados:</h2>

                        <div class="producto-show-relacionados-grid">
                            @foreach ($productosRelacionados as $relacionado)
                                <a href="{{ $relacionado['url'] }}" class="producto-show-relacionado-card">
                                    <img src="{{ $relacionado['img'] }}" alt="{{ $relacionado['titulo'] }}">
                                    <strong>{{ $relacionado['titulo'] }}</strong>
                                    <span>${{ number_format($relacionado['precio'], 2, '.', ',') }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var imagenPrincipal = document.getElementById('productoImagenPrincipal');
            var miniaturas = document.querySelectorAll('.producto-show-miniatura');
            var botonAnterior = document.getElementById('productoImagenAnterior');
            var botonSiguiente = document.getElementById('productoImagenSiguiente');
            var botonCarrito = document.getElementById('addProductToCart');
            var botonesCantidad = document.querySelectorAll('.producto-show-opcion');
            var indiceActual = 0;

            function mostrarImagen(indice) {
                if (!miniaturas.length) {
                    return;
                }

                if (indice < 0) {
                    indiceActual = miniaturas.length - 1;
                } else if (indice >= miniaturas.length) {
                    indiceActual = 0;
                } else {
                    indiceActual = indice;
                }

                imagenPrincipal.src = miniaturas[indiceActual].dataset.image;

                miniaturas.forEach(function (miniatura) {
                    miniatura.classList.remove('producto-show-miniatura-activa');
                });

                miniaturas[indiceActual].classList.add('producto-show-miniatura-activa');
            }

            miniaturas.forEach(function (miniatura) {
                miniatura.addEventListener('click', function () {
                    mostrarImagen(Number(this.dataset.index));
                });
            });

            if (botonAnterior) {
                botonAnterior.addEventListener('click', function () {
                    mostrarImagen(indiceActual - 1);
                });
            }

            if (botonSiguiente) {
                botonSiguiente.addEventListener('click', function () {
                    mostrarImagen(indiceActual + 1);
                });
            }

            botonesCantidad.forEach(function (boton) {
                boton.addEventListener('click', function () {
                    botonesCantidad.forEach(function (item) {
                        item.classList.remove('producto-show-opcion-activa');
                    });
                    this.classList.add('producto-show-opcion-activa');
                });
            });

            if (botonCarrito) {
                botonCarrito.addEventListener('click', function () {
                    var cantidadActiva = document.querySelector('.producto-show-opcion-activa');
                    var cantidad = cantidadActiva ? cantidadActiva.dataset.cantidad : '1';
                    var product = {
                        id: this.dataset.id,
                        type: this.dataset.type,
                        title: this.dataset.title,
                        price: Number(this.dataset.price),
                        image: imagenPrincipal.src,
                        quantity: cantidad === '3' ? 3 : Number(cantidad)
                    };
                    var cart = JSON.parse(localStorage.getItem('productCart') || '[]');
                    var existing = cart.find(function (item) {
                        return item.id === product.id && item.type === product.type;
                    });

                    if (existing) {
                        existing.quantity += product.quantity;
                        existing.image = product.image;
                    } else {
                        cart.push(product);
                    }

                    localStorage.setItem('productCart', JSON.stringify(cart));
                    this.textContent = 'Agregado al Carrito';
                });
            }

            mostrarImagen(0);
        });
    </script>

@endsection
