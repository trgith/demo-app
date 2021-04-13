<!--Librerias -->
@include('includes.header')

<!--Contenido Principal -->
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <!-- Titulo -->
            <div class="row">
                <div class="col-12">
                    <div data-aos="fade-up">
                        <h3>Construcción de Informe Institucional</h3>

                        <ul class="list-group">
                            <li class="list-group-item" style="border: 0px !important;">
                                <strong>Simbología</strong>
                            </li>
                            <li class="list-group-item" style="border: 0px !important;">
                                <i class="fas fa-quote-right"></i>&nbsp; Agregar texto al documento
                            </li>
                            <li class="list-group-item" style="border: 0px !important;">
                                <i class="fas fa-image"></i>&nbsp; Agregar imagen al documento
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>

            <div class="container">
                <div class="row">
                    <!--Cuadro para construir documento -->
                    <div class="col-lg-8 col-xs-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <div class="row">
                                    <div class="col-9">
                                        Documento Informe Institucional
                                    </div>
                                    <div class="col-3 text-right">
                                        <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarTexto">
                                            <i class="fas fa-quote-right"></i>
                                        </button>
                                        <button class="btn btn-outline-success" title="Agregar Imagen" id="AgregarImagen">
                                            <i class="fas fa-image"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <button class="btn btn-outline-dark cuadro" type="button" data-toggle="collapse" data-target="#perfilPersonalOperativo" aria-expanded="false" aria-controls="perfilPersonalOperativo" name="perfilPersonalOperativo">
                                        1. Perfil de Personal Operativo
                                    </button>
                                    <button class="btn btn-outline-dark cuadro" type="button" data-toggle="collapse" data-target="#aspectosSocioeconomicos" aria-expanded="false" aria-controls="aspectosSocioeconomicos" name="aspectosSocioeconomicos">
                                        2. Aspectos Socioeconómicos
                                    </button>
                                </p>
                                <div class="collapse" id="perfilPersonalOperativo">
                                    <div class="card card-body" id="perfilPersonalOperativoCuerpo">
                                        <!-- -->
                                    </div>
                                </div>
                                <div class="collapse" id="aspectosSocioeconomicos">
                                    <div class="card card-body" id="aspectosSocioeconomicosCuerpo">
                                        <!-- -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-outline-success" id="GenerarPDF"> Generar PDF </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro para construir documento -->

                    <!--Cuadro para generar datos -->
                    <div class="col-lg-4 col-xs-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <div class="row">
                                    <div class="col-sm">
                                        Datos
                                    </div>
                                    <div class="col-sm text-right">
                                        <button class="btn btn-outline-success" onclick="DescargarBase()">Descargar Datos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fecha Inicio</label>
                                        <input class="form-control" type="datetime-local" value="2021-01-01T00:00:00" id="example-datetime-local-input1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fecha Fin</label>
                                        <input class="form-control" type="datetime-local" value="2021-01-01T00:00:00" id="example-datetime-local-input2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Entidad Federativa</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entidad Federativa">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Grupo</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Grupo">
                                    </div>
                                    <button type="button" class="btn btn-outline-dark" id="ActualizarGrafico">Generar Gráfico</button>
                                    <button type="button" class="btn btn-outline-dark" id="GenerarTabla">Generar Tabla</button>
                                </form>
                                <br>
                                <canvas id="myChart" width="200" height="200" style="display: none;"></canvas>
                                <div id="ContenedorImagenDatos">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cuadro para generar datos -->

                </div>
            </div>



            <br>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-outline-dark">
                        <a href="/monitoreo_seguimiento">
                            Regresar a Pantalla Principal
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Contenido Principal -->

<!-- Footer -->
@include('includes.footer')