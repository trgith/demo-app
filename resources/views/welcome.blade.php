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
                                    <h2 class="card-title text-center">Iniciar Sesión</h2>
                                </div>
                                <div class="card-text">
                                    <form id="UserForm">
                                        <div class="form-group">
                                            <select class="form-control" name="email" id="email">
                                                <option value="policia@gmail.com">policia@gmail.com</option>
                                                <option value="funcionario_estatal@gmail.com">funcionario_estatal@gmail.com</option>
                                                <option value="enlace_estatal@gmail.com">enlace_estatal@gmail.com</option>
                                                <option value="evaluador_externo@gmail.com">evaluador_externo@gmail.com</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Contraseña">
                                        </div><br>
                                        <button type="button" id="sendUser" class="btn btn-primary btn-block" style="background-color: #13322B !important;">Ingresar</button>
                                        <div class="sign-up">
                                            Puedes registrate <a href="/register">aquí</a>
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
