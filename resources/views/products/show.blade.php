@extends('layouts.app')

@section('sesion')
    @php
        $imagenPrincipal = $imagenes->first() ?: $producto->img;
        $caracteristicas = collect(explode('|', $descripcion))->map(function ($item) {
            return trim($item);
        })->filter()->values();
        $modelo = $producto->modelo ?? $producto->nombre ?? '';
        $sku = $producto->sku ?? strtoupper($tipo) . '-' . $producto->id;
        $mensajeCompra = rawurlencode('Hola, me interesa comprar el producto: ' . $titulo . ' con precio $' . number_format($producto->precio, 2, '.', ','));
    @endphp

    <main class="productoDetallePagina">
        <div class="productoDetalleContenedor">
            <div class="productoDetalleSugerencias">
                <span>Tambien puede interesarte:</span>
                <a href="{{ route('impresoras') }}">impresoras</a>
                <span>-</span>
                <a href="{{ route('consumibles') }}">consumibles</a>
                <span>-</span>
                <a href="{{ route('oficina') }}">productos de oficina</a>
            </div>

            <div class="productoDetalleNavegacion">
                <div class="productoDetalleBreadcrumb">
                    <a href="{{ $backUrl }}">Volver al listado</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>{{ ucfirst($tipo) }}</span>
                    <i class="fas fa-chevron-right"></i>
                    <span>{{ $titulo }}</span>
                </div>

                <div class="productoDetalleAccionesTop">
                    <a href="{{ $backUrl }}">Vender uno igual</a>
                    <span>|</span>
                    <button type="button">Compartir</button>
                </div>
            </div>

            <section class="productoDetalleTarjeta">
                <div class="productoDetalleGaleria" id="productGallery">
                    @foreach ($imagenes as $imagen)
                        <button type="button" class="productoDetalleMiniatura product-thumb" data-image="{{ $imagen }}">
                            <img src="{{ $imagen }}" alt="{{ $titulo }}">
                        </button>
                    @endforeach
                </div>

                <div class="productoDetalleImagenPrincipal">
                    <img id="productMainImage" src="{{ $imagenPrincipal }}" alt="{{ $titulo }}">
                </div>

                <article class="productoDetalleInformacion">
                    <div class="productoDetalleEstado">
                        <span>Nuevo</span>
                        <span>|</span>
                        <span>{{ $producto->stock }} disponibles</span>
                    </div>

                    <div class="productoDetalleTituloFila">
                        <h1>{{ $titulo }}</h1>
                        <button type="button" aria-label="Guardar producto">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <div class="productoDetalleRating">
                        <span>4.8</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(19)</span>
                    </div>

                    @if ($producto->stock <= 3)
                        <span class="productoDetalleEtiqueta">Ultimas unidades</span>
                    @endif

                    <p class="productoDetallePrecio">${{ number_format($producto->precio, 2, '.', ',') }}</p>
                    <p class="productoDetallePago">IVA incluido</p>
                    <p class="productoDetalleFinanciamiento">Pregunta por promociones y pagos flexibles con nuestros asesores.</p>

                    <div class="productoDetalleCaracteristicas">
                        <h2>Lo que tienes que saber de este producto</h2>

                        @if ($caracteristicas->count() > 1)
                            <ul>
                                @foreach ($caracteristicas->take(5) as $caracteristica)
                                    <li>{{ $caracteristica }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ $descripcion }}</p>
                        @endif

                        <button type="button">Ver caracteristicas</button>
                    </div>
                </article>

                <aside class="productoDetalleCompra">
                    <div class="productoDetalleEnvio">
                        <p><strong>Llega gratis</strong> consultando disponibilidad</p>
                        <span>Entrega local y atencion personalizada.</span>
                        <a href="https://wa.me/527581036078" target="_blank" rel="noopener">Consultar cobertura</a>
                    </div>

                    <div class="productoDetalleRetiro">
                        <p><strong>Retira gratis</strong> o solicita entrega</p>
                        <span>Te contactamos para confirmar compra y entrega.</span>
                    </div>

                    <div class="productoDetalleStock">
                        @if ($producto->stock > 0)
                            <strong>Stock disponible</strong>
                            <span>{{ $producto->stock }} piezas en inventario</span>
                        @else
                            <strong>Sin stock disponible</strong>
                            <span>Pregunta por disponibilidad con un asesor.</span>
                        @endif
                    </div>

                    <div class="productoDetalleMeta">
                        <div>
                            <span>Marca</span>
                            <strong>{{ $producto->marca }}</strong>
                        </div>
                        <div>
                            <span>Modelo</span>
                            <strong>{{ $modelo }}</strong>
                        </div>
                        <div>
                            <span>SKU</span>
                            <strong>{{ $sku }}</strong>
                        </div>
                    </div>

                    <a href="https://wa.me/527581036078?text={{ $mensajeCompra }}" target="_blank" rel="noopener" class="productoDetalleBotonCompra">
                        Comprar ahora
                    </a>

                    <button type="button" id="addProductToCart" class="productoDetalleBotonCarrito" data-id="{{ $producto->id }}" data-type="{{ $tipo }}" data-title="{{ $titulo }}" data-price="{{ $producto->precio }}" data-image="{{ $imagenPrincipal }}">
                        <i class="fas fa-cart-plus"></i>
                        Agregar al carrito
                    </button>

                    <div class="productoDetalleBeneficio">
                        <i class="fas fa-truck"></i>
                        <div>
                            <strong>Consigue envio gratis</strong>
                            <span>Arma un pedido con varios productos y consulta el beneficio.</span>
                        </div>
                    </div>

                    <p class="productoDetalleVendedor">Vendido por <strong>Soluciones En Impresion</strong></p>
                </aside>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mainImage = document.getElementById('productMainImage');
            var thumbnails = document.querySelectorAll('.product-thumb');
            var cartButton = document.getElementById('addProductToCart');

            thumbnails.forEach(function (thumbnail) {
                thumbnail.addEventListener('click', function () {
                    mainImage.src = this.dataset.image;
                    thumbnails.forEach(function (item) {
                        item.classList.remove('productoDetalleMiniaturaActiva');
                    });
                    this.classList.add('productoDetalleMiniaturaActiva');
                });
            });

            if (thumbnails.length) {
                thumbnails[0].classList.add('productoDetalleMiniaturaActiva');
            }

            if (cartButton) {
                cartButton.addEventListener('click', function () {
                    var product = {
                        id: this.dataset.id,
                        type: this.dataset.type,
                        title: this.dataset.title,
                        price: Number(this.dataset.price),
                        image: this.dataset.image,
                        quantity: 1
                    };
                    var cart = JSON.parse(localStorage.getItem('productCart') || '[]');
                    var existing = cart.find(function (item) {
                        return item.id === product.id && item.type === product.type;
                    });

                    if (existing) {
                        existing.quantity += 1;
                    } else {
                        cart.push(product);
                    }

                    localStorage.setItem('productCart', JSON.stringify(cart));
                    this.innerHTML = '<i class="fas fa-check"></i> Agregado';
                });
            }
        });
    </script>
@endsection
