@extends('layouts.app')

@section('sesion')
    <main class="carrito-pagina">
        <section class="carrito-contenedor">
            @if (session('cart_success'))
                <div class="carrito-alerta carrito-alerta-exito">
                    {{ session('cart_success') }}
                </div>
            @endif

            @if ($errors->has('cart'))
                <div class="carrito-alerta carrito-alerta-error">
                    {{ $errors->first('cart') }}
                </div>
            @endif

            <div class="carrito-panel">
                @forelse ($items as $item)
                    <article class="carrito-item">
                        <div class="carrito-item-imagen">
                            <img src="{{ $item->imagen }}" alt="{{ $item->titulo }}">
                        </div>

                        <div class="carrito-item-info">
                            <h2>{{ $item->titulo }}</h2>
                            <p>Precio unitario: ${{ number_format((float) $item->precio_unitario, 2, '.', ',') }}</p>
                            <span>Cantidad: {{ $item->cantidad }} unidad{{ $item->cantidad === 1 ? '' : 'es' }} ({{ $item->available_stock }} disponibles)</span>
                        </div>

                        <div class="carrito-item-controles">
                            <form action="{{ route('carrito.update', $item) }}" method="POST" class="carrito-cantidad">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="quantity" value="{{ max(0, $item->cantidad - 1) }}">
                                <button type="submit" aria-label="Disminuir cantidad">-</button>
                            </form>

                            <span class="carrito-cantidad-numero">{{ $item->cantidad }}</span>

                            <form action="{{ route('carrito.update', $item) }}" method="POST" class="carrito-cantidad">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="quantity" value="{{ $item->cantidad + 1 }}">
                                <button type="submit" aria-label="Aumentar cantidad" @if ($item->available_stock <= 0) disabled @endif>+</button>
                            </form>
                        </div>

                        <strong class="carrito-item-total">
                            ${{ number_format($item->subtotal_cents / 100, 2, '.', ',') }}
                        </strong>

                        <form action="{{ route('carrito.destroy', $item) }}" method="POST" class="carrito-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" aria-label="Eliminar producto">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </article>
                @empty
                    <div class="carrito-vacio">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <h1>Tu carrito esta vacio</h1>
                        <p>Agrega impresoras, consumibles o productos de oficina para verlos aqui.</p>
                        <a href="{{ route('impresoras') }}">Ver productos</a>
                    </div>
                @endforelse

                @if ($items->count())
                    <div class="carrito-resumen">
                        <div class="carrito-total">
                            <span>Total Productos</span>
                            <strong>${{ number_format($totalCents / 100, 2, '.', ',') }}</strong>
                        </div>

                        <a href="https://wa.me/527581036078?text={{ rawurlencode('Hola, quiero realizar un pedido por un total de $' . number_format($totalCents / 100, 2, '.', ',') . ' MXN.') }}"
                            target="_blank" rel="noopener" class="carrito-pedido">
                            Realizar pedido
                        </a>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
