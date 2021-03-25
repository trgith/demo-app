<!--Librerias -->
@include('includes.header')

<!-- Navbar -->
@include('includes.nav')

<!-- Contenido Principal -->
<main id="main">
    <section id="about" class="about">
        <div class="container">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Coat_of_arms_of_Mexico_%28golden_linear%29.svg/1024px-Coat_of_arms_of_Mexico_%28golden_linear%29.svg.png" style="width: 25%; display: block; margin: auto !important;">
                    <div class="card login-form" style="border: none;">
                        <div class="card-body">
                            <div class="section-title" data-aos="fade-up">
                                <h2 class="card-title text-center">Registro</h2>
                            </div>

                            <div class="card-text">
                                <!--
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                <form>
                                    <!-- to error: add class "has-danger" -->
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-sm" id="exampleInputPassword2" placeholder="Confirmar Contraseña">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #13322B !important;">Entrar</button>
                                    <div class="sign-up">
                                        Puedes iniciar sesi&oacute;n <a href="/login">aquí</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

        </div>
    </section>
</main>
<!-- Cierra Contenido Principal -->

<!-- Footer -->
@include('includes.footer')
