<!--Librerias -->
@include('includes.header')


<!-- Contenido Principal -->
<main id="main">
    <br>

    <!-- Modal -->
    <div id="respuestaVacia" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Es necesario responder esta pregunta
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="container" id="1-1">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                1. Programa de Impulso al Modelo Nacional de Policía y Justicia Cívica.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>






                    <div class="card-header text-dark">
                        1.1. Subprograma de Modelo Nacional de Policía
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                    <!-- Abre 1. Cumplimiento Metas Convenidas -->
                                    <div id="1-1-1">
                                        @include('modulo_integral.1-1-1-cumplimiento-metas-convenidas')
                                    </div>
                                    <!-- Cierra 1. Cumplimiento Metas Convenidas -->


                                    <!-- Abre 2. Avance General del Subprograma -->
                                    <div id="1-1-2">
                                        @include('modulo_integral.1-1-2-avance-general-del-subprograma')
                                    </div>
                                    <!-- Cierra 2. Avance General del Subprograma -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="1-2">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                1. Programa de Impulso al Modelo Nacional de Policía y Justicia Cívica.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        1.2. Subprograma de Dignificación Policial
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                    <!-- Abre 1. Avance General del Subprograma -->
                                    <div id="1-2-1">
                                        @include('modulo_integral.1-2-1-avance-general-del-subprograma')
                                    </div>
                                    <!-- Cierra 1. Avance General del Subprograma -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container" id="2-1">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                1. Programa de Impulso al Modelo Nacional de Policía y Justicia Cívica.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        2.1. Subprograma de Fortalecimiento de las Capacidades de Evaluación en Control de Confianza
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                <!-- Abre 1. Cumplimiento metas convenidas -->
                                <div id="2-1-1">
                                    @include('modulo_integral.2-1-1-cumplimiento-de-metas-convenidas')
                                </div>
                                <!-- Cierra 1. Cumplimiento metas convenidas -->


                                <!-- Abre 2. Avance General del Subprograma -->
                                <div id="2-1-2">
                                    @include('modulo_integral.2-1-2-avance-del-subprograma')
                                </div>
                                <!-- Cierra 2. Avance General del Subprograma -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container" id="2-2">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                2. Programa de Profesionalización, Certificación y Capacitación de los Elementos Policiales y las Instituciones de Seguridad Pública
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        2.2. Subprograma de Profesionalización y Capacitación de los Elementos Policiales de Seguridad Pública.
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">

                                <!-- Abre 1. Cumplimiento metas convenidas -->
                                <div id="2-2-1">
                                    @include('modulo_integral.2-2-1-cumplimiento-de-metas-convenidas')
                                </div>
                                <!-- Cierra 1. Cumplimiento metas convenidas -->

                                <!-- Abre 2. Avance general del subprograma -->
                                <div id="2-2-2">
                                    @include('modulo_integral.2-2-2-avance-general-del-subprograma')
                                </div>
                                <!-- Cierra 2. Avance general del subprograma -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="3-1">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                3. Programa de Equipamiento e Infraestructura de los elementos policiales y las Instituciones de Seguridad Pública.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        3.1. Subprograma de Equipamento de las Instituciones de Seguridad Pública
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                    <!-- Abre 1. Cumplimiento Metas Convenidas -->
                                    <div id="3-1-1">
                                        @include('modulo_integral.3-1-1-cumplimiento-de-metas-convenidas')
                                    </div>
                                    <!-- Cierra 1. Cumplimiento Metas Convenidas -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="3-2">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                3. Programa de Equipamiento e Infraestructura de los elementos policiales y las Instituciones de Seguridad Pública.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        3.1. Subprograma de Equipamento de las Instituciones de Seguridad Pública
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                    <!-- Abre 1. Avance general del Subprograma -->
                                    <div id="3-1-2">
                                        @include('modulo_integral.3-1-2-avance-general-del-subprograma')
                                    </div>
                                    <!-- Cierra 1. Avance general del Subprograma -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="3-3">
        <div class="row">
            <div class="col-12">
                <div class="card text-white">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-9">
                                3. Programa de Equipamiento e Infraestructura de los elementos policiales y las Instituciones de Seguridad Pública.
                            </div>
                            <div class="col-3 text-right">
                                <button class="btn btn-outline-success" title="Agregar Texto" id="AgregarArchivo" type="file">
                                    <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-dark">
                        3.2. Subprograma de Infraestructura de las Instituciones de Seguridad Pública.
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-dark">
                                <div class="container">


                                    <!-- Abre 1. Cumplimiento Metas Convenidas -->
                                    <div id="3-2-1">
                                        @include('modulo_integral.3-2-1-cumplimiento-de-metas-convenidas')
                                    </div>
                                    <!-- Cierra 1. Cumplimiento Metas Convenidas -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
<!-- Cierra Contenido Principal -->

<!-- Footer -->
@include('includes.footer')
