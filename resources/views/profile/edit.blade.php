@extends('layouts.app')

@section('sesion')
<main class="perfil-pagina">
  <div class="perfil-contenedor">
    <section class="perfil-encabezado" aria-labelledby="perfil-titulo">
      <div class="perfil-avatar" aria-hidden="true">{{ strtoupper(mb_substr($user->nombre, 0, 1)) }}</div>
      <div><p class="perfil-eyebrow">Mi cuenta</p><h1 id="perfil-titulo">Hola, {{ $user->nombre }}</h1><p>Actualiza tu información cuando la necesites. Tus cambios se guardarán de forma segura.</p></div>
    </section>
    @if (session('success'))
      <div class="perfil-alerta perfil-alerta--exito" role="status"><i class="fas fa-circle-check" aria-hidden="true"></i><span>{{ session('success') }}</span></div>
    @endif
    @if ($errors->any())
      <div class="perfil-alerta perfil-alerta--error" role="alert"><i class="fas fa-circle-exclamation" aria-hidden="true"></i><div><strong>Revisa la información.</strong><p>Hay datos que requieren tu atención antes de guardar.</p></div></div>
    @endif
    <form method="POST" action="{{ route('profile.update') }}" class="perfil-formulario">
      @csrf
      @method('PUT')
      <section class="perfil-tarjeta" aria-labelledby="datos-personales">
        <div class="perfil-tarjeta-titulo"><span class="perfil-icono"><i class="fas fa-user" aria-hidden="true"></i></span><div><h2 id="datos-personales">Datos personales</h2><p>Así te identificaremos en tu cuenta.</p></div></div>
        <div class="perfil-cuadricula">
          <div class="perfil-campo"><label for="nombre">Nombre(s)</label><input id="nombre" name="nombre" type="text" minlength="3" maxlength="100" value="{{ old('nombre', $user->nombre) }}" autocomplete="given-name" required>@error('nombre') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="apellidos">Apellidos</label><input id="apellidos" name="apellidos" type="text" minlength="3" maxlength="100" value="{{ old('apellidos', $user->apellidos) }}" autocomplete="family-name" required>@error('apellidos') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="email">Correo electrónico</label><input id="email" name="email" type="email" maxlength="150" value="{{ old('email', $user->email) }}" autocomplete="email" required>@error('email') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="telefono">Teléfono</label><input id="telefono" name="telefono" type="tel" inputmode="numeric" pattern="[0-9]{10}" maxlength="10" value="{{ old('telefono', $user->telefono) }}" autocomplete="tel" required>@error('telefono') <span class="perfil-error">{{ $message }}</span> @enderror</div>
        </div>
      </section>
      <section class="perfil-tarjeta" aria-labelledby="direccion">
        <div class="perfil-tarjeta-titulo"><span class="perfil-icono"><i class="fas fa-location-dot" aria-hidden="true"></i></span><div><h2 id="direccion">Dirección</h2><p>Nos ayuda a ofrecerte una atención más precisa.</p></div></div>
        <div class="perfil-cuadricula">
          <div class="perfil-campo"><label for="estados">Estado</label><select id="estados" name="estado" data-selected="{{ old('estado', $user->estado) }}" autocomplete="address-level1" required><option value="">Cargando estados…</option></select>@error('estado') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="municipios">Ciudad o municipio</label><select id="municipios" name="ciudad" data-selected="{{ old('ciudad', $user->ciudad) }}" autocomplete="address-level2" required><option value="">Selecciona primero un estado</option></select>@error('ciudad') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="cp">Código postal</label><input id="cp" name="cp" type="text" inputmode="numeric" pattern="[0-9]{5}" maxlength="5" value="{{ old('cp', $user->cp) }}" autocomplete="postal-code" required>@error('cp') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="colonia">Colonia</label><input id="colonia" name="colonia" type="text" minlength="3" maxlength="100" value="{{ old('colonia', $user->colonia) }}" autocomplete="address-level3" required>@error('colonia') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo perfil-campo--ancho"><label for="calle">Calle y número</label><input id="calle" name="calle" type="text" minlength="3" maxlength="100" value="{{ old('calle', $user->calle) }}" autocomplete="street-address" required>@error('calle') <span class="perfil-error">{{ $message }}</span> @enderror</div>
        </div>
      </section>
      <section class="perfil-tarjeta" aria-labelledby="seguridad">
        <div class="perfil-tarjeta-titulo"><span class="perfil-icono"><i class="fas fa-lock" aria-hidden="true"></i></span><div><h2 id="seguridad">Contraseña</h2><p>Déjala vacía si no deseas cambiarla.</p></div></div>
        <div class="perfil-cuadricula">
          <div class="perfil-campo perfil-campo--ancho"><label for="password_actual">Contraseña actual</label><input id="password_actual" name="password_actual" type="password" autocomplete="current-password">@error('password_actual') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="password">Nueva contraseña</label><input id="password" name="password" type="password" minlength="8" autocomplete="new-password"><span class="perfil-ayuda">Al menos 8 caracteres.</span>@error('password') <span class="perfil-error">{{ $message }}</span> @enderror</div>
          <div class="perfil-campo"><label for="password_confirmation">Confirmar nueva contraseña</label><input id="password_confirmation" name="password_confirmation" type="password" minlength="8" autocomplete="new-password"></div>
        </div>
      </section>
      <div class="perfil-acciones"><p><i class="fas fa-shield-halved" aria-hidden="true"></i> Tus datos se usan únicamente para administrar tu cuenta y tus pedidos.</p><button type="submit" class="perfil-boton"><i class="fas fa-floppy-disk" aria-hidden="true"></i> Guardar cambios</button></div>
    </form>
  </div>
</main>
<script>
  // Evita letras y caracteres especiales en los campos numéricos, incluso al pegar texto.
  ['telefono', 'cp'].forEach(function (id) {
    var field = document.getElementById(id);

    if (field) {
      field.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
      });
    }
  });
</script>
@endsection
