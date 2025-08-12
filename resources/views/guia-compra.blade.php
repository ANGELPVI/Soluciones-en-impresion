@extends('welcome')
@section('sesion')
<div class="guia-container">
    <h2 class="guia-titulo">Guía de Compra</h2>
<div class="guia-pasos grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="guia-paso">
            <span class="guia-icono">
                <!-- Icono de tienda/negocio -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 9l1-5h16l1 5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4 9v7a2 2 0 002 2h2a2 2 0 002-2v-2h4v2a2 2 0 002 2h2a2 2 0 002-2V9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16 13a4 4 0 01-8 0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <div class="guia-contenido">
                <div class="guia-paso-titulo">1. Define tus necesidades</div>
                <div class="guia-paso-desc">¿Requieres impresión a color, blanco y negro, multifuncionalidad o alta velocidad? Piensa en el uso principal, el volumen de impresión y el tipo de consumibles que necesitarás (cartuchos, tóner, papel, etc.).</div>
            </div>
        </div>
        <div class="guia-paso">
            <span class="guia-icono">
                <!-- Icono de carrito de compras -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="9" cy="21" r="1.5" stroke-width="2"/>
                  <circle cx="19" cy="21" r="1.5" stroke-width="2"/>
                  <path d="M2 4h2l2.4 12.29a2 2 0 002 1.71h7.38a2 2 0 001.99-1.71L21 7H6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <div class="guia-contenido">
                <div class="guia-paso-titulo">2. Agrega a tu carrito</div>
                <div class="guia-paso-desc">Selecciona los productos que necesitas y agrégalos a tu carrito para poder realizar tu pedido de forma sencilla y rápida.</div>
            </div>
        </div>
    <div class="guia-paso">
        <span class="guia-icono">
            <!-- Icono de ojo -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 12s4-7 10.5-7 10.5 7 10.5 7-4 7-10.5 7S1.5 12 1.5 12z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="12" r="3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <div class="guia-contenido">
            <div class="guia-paso-titulo">3. Revisa tu carrito</div>
            <div class="guia-paso-desc">Antes de finalizar tu pedido, revisa la lista de productos y cantidades en tu carrito para asegurarte de que todo esté correcto.</div>
        </div>
    </div>
    <div class="guia-paso">
        <span class="guia-icono">
            <!-- Icono de avión de papel -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2L11 13" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <div class="guia-contenido">
            <div class="guia-paso-titulo">4. Finaliza tu pedido</div>
            <div class="guia-paso-desc">Haz clic en el botón "Enviar pedido" para completar tu compra. Recibirás la confirmación y pronto nos pondremos en contacto contigo.</div>
        </div>
    </div>
    <div class="guia-paso">
        <span class="guia-icono">
            <!-- Icono de teléfono/chat -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 16.92v3a2 2 0 01-2.18 2A19.72 19.72 0 013 5.18 2 2 0 015 3h3a2 2 0 012 1.72c.13 1.05.37 2.07.72 3.06a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.29 6.29l1.27-1.27a2 2 0 012.11-.45c.99.35 2.01.59 3.06.72A2 2 0 0122 16.92z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="18" cy="6" r="3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <div class="guia-contenido">
            <div class="guia-paso-titulo">5. Un asesor te contactará</div>
            <div class="guia-paso-desc">Uno de nuestros asesores se pondrá en contacto contigo por llamada o WhatsApp para confirmar los detalles de tu compra y coordinar la entrega.</div>
        </div>
    </div>
</div>
<p class="mt-8 text-center text-blue-700 font-semibold">Si tienes dudas, contáctanos y te ayudaremos a encontrar la mejor solución en impresión y oficina.</p>
</div>
@endsection
