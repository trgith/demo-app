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
                            <h3>Monitoreo y Validación de la Aplicación Institucional</h3>

                            <ul class="list-group">
                                <li class="list-group-item" style="border: 0px !important;">
                                    <strong>Simbología</strong>
                                </li>
                                <li class="list-group-item" style="border: 0px !important;">
                                    <i class="far fa-eye"></i>&nbsp; Visualizar participantes dentro del cuestionario
                                </li>
                                <li class="list-group-item" style="border: 0px !important;">
                                    <i class="fas fa-database"></i>&nbsp; Descargar los datos generados de este cuestionario *
                                </li>
                                <li class="list-group-item" style="border: 0px !important;">
                                    <i class="fas fa-check"></i>&nbsp; Validar el proceso *
                                </li>
                                <li class="list-group-item" style="border: 0px !important;">
                                    * &nbsp; El proceso debe estar terminado para efectuar
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="grupos-scroll">
                        <div class="col-12">

                        <!-- Primer grupo -->
                        <div class="card text-white bg-dark mb-3 grupos" style="max-width: 18rem;">
                            <div class="card-header">Grupo #9827</div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Ver participantes de este grupo" onclick="VerParticipantes(9827, 25)">
                                                <i class="far fa-eye" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Descargar Datos de encuestas" disabled="disabled">
                                                <a href="#">
                                                    <i class="fas fa-database" style="color: white"></i>
                                                </a>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Aprobar este grupo" disabled="disabled">
                                                <i class="fas fa-check" style="color: white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Primer grupo -->
                        <!-- Segundo grupo -->
                        <div class="card text-white bg-dark mb-3 grupos" style="max-width: 18rem;">
                            <div class="card-header">Grupo #9828</div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Ver participantes de este grupo" onclick="VerParticipantes(9828, 40)">
                                                <i class="far fa-eye" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Descargar Datos de encuestas" disabled="disabled">
                                                <i class="fas fa-database" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Aprobar este grupo" disabled="disabled">
                                                <i class="fas fa-check" style="color: white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Segundo grupo -->
                        <!-- Tercer grupo -->
                        <div class="card text-white bg-dark mb-3 grupos" style="max-width: 18rem;">
                            <div class="card-header">Grupo #9829</div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Ver participantes de este grupo" onclick="VerParticipantes(9829, 100)">
                                                <i class="far fa-eye" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Descargar Datos de encuestas">
                                                <a href="/generate-pdf">
                                                    <i class="fas fa-database" style="color: white"></i>
                                                </a>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Aprobar este grupo" onclick="AprobarGrupo(9829)">
                                                <i class="fas fa-check" style="color: white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tercer grupo -->
                        <!-- Cuarto grupo -->
                        <div class="card text-white bg-dark mb-3 grupos" style="max-width: 18rem;">
                            <div class="card-header">Grupo #9830</div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Ver participantes de este grupo" onclick="VerParticipantes(9830, 50)">
                                                <i class="far fa-eye" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Descargar Datos de encuestas" disabled="disabled">
                                                <i class="fas fa-database" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Aprobar este grupo" disabled="disabled">
                                                <i class="fas fa-check" style="color: white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cuarto grupo -->
                        <!-- Quinto grupo -->
                        <div class="card text-white bg-dark mb-3 grupos" style="max-width: 18rem;">
                            <div class="card-header">Grupo #9831</div>
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Ver participantes de este grupo" onclick="VerParticipantes(9831, 80)">
                                                <i class="far fa-eye" style="color: white"></i>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Descargar Datos de encuestas">
                                                <a href="/generate-pdf">
                                                    <i class="fas fa-database" style="color: white"></i>
                                                </a>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success" title="Aprobar este grupo" onclick="AprobarGrupo(9831)">
                                                <i class="fas fa-check" style="color: white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quinto grupo -->

                        </div>
                    </div>
                </div>
                <br>

                <!--Modal 1 Grupo-->
                <div class="row" id="CardGrupo-9827">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white">Grupo 9827</h5>
                            <div class="card-body">

                                <!-- Porcentaje de Completado -->
                                <div class="card">
                                    <div class="card-header">
                                        Progreso Total Promedio: (25%)
                                    </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Porcentaje de Completado -->

                                <!--Tabla de participantes -->
                                <div class="card">
                                    <div class="card-header">
                                        Lista de Participantes:
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Reactivo Actual</th>
                                                <th scope="col">Seccion Actual</th>
                                                <th scope="col">Detalles</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">8746</th>
                                                <td>Raven User</td>
                                                <td>G</td>
                                                <td>1.1.2</td>
                                                <td>
                                                    <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Raven User')">
                                                        <i class="fas fa-file-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8462</th>
                                                <td>Citizen User</td>
                                                <td>B</td>
                                                <td>1.3.2</td>
                                                <td>
                                                    <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Citizen User')">
                                                        <i class="fas fa-file-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2371</th>
                                                <td>User Crafter</td>
                                                <td>D</td>
                                                <td>1.3.2</td>
                                                <td>
                                                    <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User Crafter')">
                                                        <i class="fas fa-file-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <!--Tabla de participantes -->



                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" onclick="CerrarVerParticipantes(9827)">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 1 Grupo-->
                <!--Modal 2 Grupo-->
                <div class="row" id="CardGrupo-9828">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white">Grupo 9828</h5>
                            <div class="card-body">

                                <!-- Porcentaje de Completado -->
                                <div class="card">
                                    <div class="card-header">
                                        Progreso Total Promedio: (40%)
                                    </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Porcentaje de Completado -->

                                <!--Tabla de participantes -->
                                <div class="card">
                                    <div class="card-header">
                                        Lista de Participantes:
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Reactivo Actual</th>
                                            <th scope="col">Seccion Actual</th>
                                            <th scope="col">Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">7364</th>
                                            <td>Recover User</td>
                                            <td>E</td>
                                            <td>1.2.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Recover User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3524</th>
                                            <td>User DB</td>
                                            <td>K</td>
                                            <td>1.1.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User DB')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <!--Tabla de participantes -->
                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" onclick="CerrarVerParticipantes(9828)">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 2 Grupo-->
                <!--Modal 3 Grupo-->
                <div class="row" id="CardGrupo-9829">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white">Grupo 9829</h5>
                            <div class="card-body">

                                <!-- Porcentaje de Completado -->
                                <div class="card">
                                    <div class="card-header">
                                        Progreso Total Promedio: (100%)
                                    </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Porcentaje de Completado -->

                                <!--Tabla de participantes -->
                                <div class="card">
                                    <div class="card-header">
                                        Lista de Participantes:
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Reactivo Actual</th>
                                            <th scope="col">Seccion Actual</th>
                                            <th scope="col">Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">2759</th>
                                            <td>User Mind</td>
                                            <td>O</td>
                                            <td>1.3.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User Mind')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3564</th>
                                            <td>Recognition User</td>
                                            <td>H</td>
                                            <td>1.3.3</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Recognition User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4432</th>
                                            <td>Look User</td>
                                            <td>J</td>
                                            <td>1.3.3</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Look User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1536</th>
                                            <td>User Absolute</td>
                                            <td>K</td>
                                            <td>1.1.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User Absolute')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <!--Tabla de participantes -->

                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" onclick="CerrarVerParticipantes(9829)">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 3 Grupo-->
                <!--Modal 4 Grupo-->
                <div class="row" id="CardGrupo-9830">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white">Grupo 9830</h5>
                            <div class="card-body">

                                <!-- Porcentaje de Completado -->
                                <div class="card">
                                    <div class="card-header">
                                        Progreso Total Promedio: (50%)
                                    </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Porcentaje de Completado -->



                                <!--Tabla de participantes -->
                                <div class="card">
                                    <div class="card-header">
                                        Lista de Participantes:
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Reactivo Actual</th>
                                            <th scope="col">Seccion Actual</th>
                                            <th scope="col">Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">3678</th>
                                            <td>Sugar User</td>
                                            <td>E</td>
                                            <td>1.1.1</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Sugar User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4567</th>
                                            <td>User Discounts</td>
                                            <td>V</td>
                                            <td>1.3.3</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User Discounts')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2755</th>
                                            <td>Magenta User</td>
                                            <td>C</td>
                                            <td>1.3.3</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Magenta User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <!--Tabla de participantes -->
                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" onclick="CerrarVerParticipantes(9830)">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 4 Grupo-->
                <!--Modal 5 Grupo-->
                <div class="row" id="CardGrupo-9831">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white">Grupo 9831</h5>
                            <div class="card-body">
                                <!-- Porcentaje de Completado -->
                                <div class="card">
                                    <div class="card-header">
                                        Progreso Total Promedio: (100%)
                                    </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Porcentaje de Completado -->



                                <!--Tabla de participantes -->
                                <div class="card">
                                    <div class="card-header">
                                        Lista de Participantes:
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Reactivo Actual</th>
                                            <th scope="col">Seccion Actual</th>
                                            <th scope="col">Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">2644</th>
                                            <td>Ultra User</td>
                                            <td>R</td>
                                            <td>1.3.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Ultra User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5536</th>
                                            <td>User Tone</td>
                                            <td>F</td>
                                            <td>1.1.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'User Tone')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4888</th>
                                            <td>Genial User</td>
                                            <td>D</td>
                                            <td>1.2.2</td>
                                            <td>
                                                <button class="btn btn-info" onclick="VerDetallesParticipante('G', '1.1.2', 'Genial User')">
                                                    <i class="fas fa-file-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <!--Tabla de participantes -->
                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" onclick="CerrarVerParticipantes(9831)">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 5 Grupo-->



                <!--Modal para detalles-->
                <div class="row" id="CardDetalles">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header bg-dark text-white" id="CabezeroCardDetalles1"></h5>
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm">
                                        <p id="CabezeroCardDetalles"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Progreso</h5>
                            </div>
                            <div class="card-footer">
                                <div class="col-sm text-right">
                                    <button class="btn btn-outline-success" id="CerrarDetalles">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal para detalles-->

                <!--Modal para Aprobar-->
                <div class="row" id="CardAprobar">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <div class="row">
                                    <div class="col-sm">
                                        <p id="CabezeroCardAprobar"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Proceso de Aprobación</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Token" aria-label="Nombre">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-outline-success">Aprobar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm text-right">
                                        <button class="btn btn-outline-success" onclick="CerrarAprobar()">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal para Aprobar-->


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