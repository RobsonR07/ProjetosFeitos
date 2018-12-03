<div class="col-12 row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <img class="card-img-top" src="./img/login-profimg.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">Entrar</h5>
                <form class="form-signin" action="index.php?page=autenticacao-prof" method="POST">
                <div class="form-label-group">
                    <input type="email" name="email_professor" id="inputEmail" class="form-control" placeholder="Senha" required autofocus>
                    <label for="inputEmail">Email</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" name="senha_professor" class="form-control" maxlength="10" placeholder="Senha" required>
                    <label for="inputPassword">Senha</label>
                </div>

                <?php 
                  if(isset($_SESSION['incorretoprof'])): 
                ?>
                  <div class="alert alert-danger" role="alert">
                    <strong>Erro</strong>: Email e/ou Senha Incorretos, Tente Novamente!
                  </div>
                <?php
                  endif;
                  unset($_SESSION['incorretoprof']);  
                ?>

                <div class="custom-control custom-checkbox mb-3">
                    <!-- Esqueci minha senha Lembrar de fazer mas tarde -->
                </div>
                <hr class="my-4">
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                </form>
                <hr class="my-4">
                <center>Não tem conta registrada? <a href="?page=token">Registre-se</a></center>
            </div>
        </div>
    </div>
</div>

<style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

.card-signin {
  border: 0;
  border-radius: 2rem;
  box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 0;
  border-top: 0;
  border-bottom: 1;
  border-left: 0;
  border-right: 0;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

#inputEmail:focus{
  transition: 1s;
  border-width: 3px;
  border-color: #00ff11;
  border-radius: 10px;
}

#inputPassword:focus{
  transition: 1s;
  border-width: 3px;
  border-color: #00ff11;
  border-radius: 10px;
}
</style>
