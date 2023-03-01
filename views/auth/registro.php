<main class="auth">
      <h2 class="auth__heading"><?php echo $titulo; ?></h2>
      <p class="auth__texto">Crea tu Cuenta en DevWebcamp</p>

      <?php
            require_once __DIR__ . '/../templates/alertas.php';
      ?>

      <form action="/registro"  method="POST" class="formulario">
            <div class="formulario__campo">
                  <label for="nombre" class="formulario__label">Nombre</label>
                  <input 
                        type="text"
                        class="formulario__input"
                        id="nombre"
                        name="nombre"
                        placeholder="Tu Nombre"
                        value="<?php echo $usuario->nombre; ?>"
                  >
            </div>
            <div class="formulario__campo">
                  <label for="apellido" class="formulario__label">Apellido</label>
                  <input 
                        type="text"
                        class="formulario__input"
                        id="apellido"
                        name="apellido"
                        placeholder="Tu Apellido"
                        value="<?php echo $usuario->apellido; ?>"
                  >
            </div>
            <div class="formulario__campo">
                  <label for="email" class="formulario__label">Email</label>
                  <input 
                        type="text"
                        class="formulario__input"
                        id="email"
                        name="email"
                        placeholder="Tu Email"
                        value="<?php echo $usuario->email; ?>"
                  >
            </div>
            <div class="formulario__campo">
                  <label for="password" class="formulario__label">Password</label>
                  <input 
                        type="password"
                        class="formulario__input"
                        id="password"
                        name="password"
                        placeholder="Tu Password"
                  >
            </div>
            <div class="formulario__campo">
                  <label for="password2" class="formulario__label">Repetir Password</label>
                  <input 
                        type="password"
                        class="formulario__input"
                        id="password2"
                        name="password2"
                        placeholder="Repetir Password"
                  >
            </div>
            <input type="submit" class="formulario__submit" value="Crear Cuenta">
      </form>
      <div class="acciones">
            <a href="/login" class="acciones__enlace">Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
      </div>
</main>
