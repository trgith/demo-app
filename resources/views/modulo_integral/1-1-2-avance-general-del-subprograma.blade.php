
        <form>
            <h4>1.1.2  Avance General del Subprograma</h4>
            <br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>a) ¿A partir de qué año la entidad federativa cuenta con Unidad de Investigación dentro de su Secretaría de Seguridad Estatal o equivalente?</label>
                    <br>
                    <select class="form-control">
                        @for ($i = 1999; $i < 2022; $i++)
                            <option>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>b) ¿Cuántos elementos conforman esta Unidad de Investigación?</label>
                    <br>
                    <input type="number" class="form-control" id="Cap112">
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>c)  Señale si se ha brindado capacitación especializada a los integrantes de la Unidad de Investigación en alguno de los siguientes cursos:</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Técnicas de investigación del delito
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC1Positivo" name="Cap112incisoC1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC1Negativo" name="Cap112incisoC1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Criminalística
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC2Positivo" name="Cap112incisoC2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC2Negativo" name="Cap112incisoC2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Criminología
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC3Positivo" name="Cap112incisoC3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC3Negativo" name="Cap112incisoC3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Talleres en campo de actos de investigación
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC4Positivo" name="Cap112incisoC4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC4Negativo" name="Cap112incisoC4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Técnicas de entrevista
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC5Positivo" name="Cap112incisoC5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC5Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC5Negativo" name="Cap112incisoC5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC5Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Perfilación criminal
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC6Positivo" name="Cap112incisoC6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC6Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC6Negativo" name="Cap112incisoC6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC6Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Teoría del caso
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC7Positivo" name="Cap112incisoC7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC7Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC7Negativo" name="Cap112incisoC7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC7Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Prueba legal y lícita
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC8Positivo" name="Cap112incisoC8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC8Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoC8Negativo" name="Cap112incisoC8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoC8Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-6 col-md-12">
                                Otro (Descr&iacute;balo)
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>d)  Indique si el personal que integra la Unidad de Investigación realiza investigaciones de principio a fin en coordinación con el Ministerio Público (es decir, no solamente realiza actos de investigación específicos).</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoDPositivo" name="Cap112incisoD" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoDPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoDNegativo" name="Cap112incisoD" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoDNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>e) Señale si la corporación cuenta con policías con capacidades para procesar</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoEPositivo" name="Cap112incisoE" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoEPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoENegativo" name="Cap112incisoE" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoENegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>f)  Indique si la corporación cuenta con Unidad de Inteligencia/Análisis.</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoFPositivo" name="Cap112incisoF" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoFPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoFNegativo" name="Cap112incisoF" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoFNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>g)  Se ha brindado capacitación especializada a los integrantes de la Unidad de Inteligencia/Análisis en alguno de los siguientes cursos:</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Introducción a los métodos de policiamiento y análisis delictivo
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG1Positivo" name="Cap112incisoG1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG1Negativo" name="Cap112incisoG1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Análisis cualitativo aplicado a la seguridad pública
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG2Positivo" name="Cap112incisoG2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG2Negativo" name="Cap112incisoG2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Bases de datos
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG3Positivo" name="Cap112incisoG3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG3Negativo" name="Cap112incisoG3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Gestión de la Información
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG4Positivo" name="Cap112incisoG4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG4Negativo" name="Cap112incisoG4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Técnicas básicas para integrar información
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG5Positivo" name="Cap112incisoG5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG5Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG5Negativo" name="Cap112incisoG5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG5Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Análisis geográfico
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG6Positivo" name="Cap112incisoG6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG6Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG6Negativo" name="Cap112incisoG6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG6Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Técnicas de análisis
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG7Positivo" name="Cap112incisoG7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG7Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG7Negativo" name="Cap112incisoG7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG7Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Redes de vínculos
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG8Positivo" name="Cap112incisoG8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG8Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG8Negativo" name="Cap112incisoG8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG8Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Patrones delictivos
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG9Positivo" name="Cap112incisoG9" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG9Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoG9Negativo" name="Cap112incisoG9" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG9Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-6 col-md-6">
                                Otro (Descr&iacute;balo)
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>h)  Indique si el personal que integra la Unidad de Inteligencia/Análisis tiene acceso a las siguientes fuentes de información.					</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Plataforma México (Acceso Amplio)
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH1Positivo" name="Cap112incisoH1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH1Negativo" name="Cap112incisoH1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Plataforma México (Acceso Básico)
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH2Positivo" name="Cap112incisoH2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH2Negativo" name="Cap112incisoH2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Licencias del Estado/Municipio
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH3Positivo" name="Cap112incisoH3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoG3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH3Negativo" name="Cap112incisoH3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Información de los juzgados cívicos (detenciones por faltas administrativas)
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH4Positivo" name="Cap112incisoH4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH4Negativo" name="Cap112incisoH4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Registro Nacional de Detenciones (detenciones por delitos)
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH5Positivo" name="Cap112incisoH5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH5Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH5Negativo" name="Cap112incisoH5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH5Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Acceso espejo a las cámaras del C4 o C5 del Estado/Municipio
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH6Positivo" name="Cap112incisoH6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH6Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoH6Negativo" name="Cap112incisoH6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoH6Negativo">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>i) Indique qué productos genera la Unidad de Inteligencia/Análisis:</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Mapas de calor
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI1Positivo" name="Cap112incisoI1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI1Negativo" name="Cap112incisoI1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Patrones delictivos y modus operandi
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI2Positivo" name="Cap112incisoI2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI2Negativo" name="Cap112incisoI2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Perfiles criminales
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI3Positivo" name="Cap112incisoI3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI3Negativo" name="Cap112incisoI3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Fichas de objetivos
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI4Positivo" name="Cap112incisoI4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI4Negativo" name="Cap112incisoI4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Redes de vínculos
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI5Positivo" name="Cap112incisoI5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI5Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoI5Negativo" name="Cap112incisoI5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoI5Negativo">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>j) Indique  si la corporación cuenta con Unidad de Asuntos Internos</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoJPositivo" name="Cap112incisoJ" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoJPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoJNegativo" name="Cap112incisoJ" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoJNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>k) Señale si se ha brindado capacitación especializada a los integrantes de la Unidad de Asuntos Internos en alguno de los siguientes cursos:</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Introducción a órganos de control interno
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK1Positivo" name="Cap112incisoK1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK1Negativo" name="Cap112incisoK1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Mecanismos de alerta temprana
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK2Positivo" name="Cap112incisoK2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK2Negativo" name="Cap112incisoK2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Equilibrio en el proceso disciplinario
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK3Positivo" name="Cap112incisoK3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK3Negativo" name="Cap112incisoK3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Discrecionalidad en la función policial
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK4Positivo" name="Cap112incisoK4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoK4Negativo" name="Cap112incisoK4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoK4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-6 col-md-12">
                                Otra (Descr&iacute;bala)
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>l) Señale si la Unidad cuenta con un catálogo de faltas y sanciones.</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoLPositivo" name="Cap112incisoL" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoLPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoLNegativo" name="Cap112incisoL" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoLNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>m) Indique qué áreas componen la Unidad de Asuntos Internos</label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoM1">
                        <label class="form-check-label" for="Cap112incisoM1">
                            Supervisión
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoM2">
                        <label class="form-check-label" for="Cap112incisoM2">
                            Investigación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoM3">
                        <label class="form-check-label" for="Cap112incisoM3">
                            Determinación de expedientes
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>n)  Indique si la Unidad de Asuntos Internos cuenta con un mecanismo de recepción de quejas ciudadanas y de miembros de la corporación.</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Ciudadanas
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoN1Positivo" name="Cap112incisoN1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoN1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoN1Negativo" name="Cap112incisoN1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoN1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                De miembros de la corporación
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoN2Positivo" name="Cap112incisoN2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoN2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoN2Negativo" name="Cap112incisoN2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoN2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente Inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>o) Indique el promedio mensual de quejas o denuncias que atiende.</label>
                    <br>
                    <input type="number" class="form-control" id="Cap112incisoO">
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>p)  Indique  si la corporación cuenta con una Comisión de Honor y Justicia.</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoPPositivo" name="Cap112incisoP" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoPPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoPNegativo" name="Cap112incisoP" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoPNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>q) Indique con cuál de los siguientes componentes cuenta la Comisión de Honor y Justicia</label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoQ1">
                        <label class="form-check-label" for="Cap112incisoQ1">
                            Instrumento Normativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoQ2">
                        <label class="form-check-label" for="Cap112incisoQ2">
                            Celebración de al menos una sesión cada 6 meses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoQ3">
                        <label class="form-check-label" for="Cap112incisoQ3">
                            Programa de Reconocimiento al Mérito Piolicial
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>r) Señale si la policía recibe denuncias sobre hechos posiblemente constitutivos de delito dando inicio a investigaciones sin que se solicite al denunciante ratificarla ante la Fiscalía/Procuraduría.</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoRPositivo" name="Cap112incisoR" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoRPositivo">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Cap112incisoRNegativo" name="Cap112incisoR" class="custom-control-input">
                        <label class="custom-control-label" for="Cap112incisoRNegativo">No</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>s) Indique si se ha brindado capacitación especializada en alguno de los siguientes cursos en materia de Proximidad</label>
                    <br>
                    <div class="container">
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Mediación
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS1Positivo" name="Cap112incisoS1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS1Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS1Negativo" name="Cap112incisoS1" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS1Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Justicia procedimental
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS2Positivo" name="Cap112incisoS2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS2Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS2Negativo" name="Cap112incisoS2" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS2Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Solución de problemas Metodología SARA <br>(Identificación del problema, análisis del problema, respuesta y evaluación)
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS3Positivo" name="Cap112incisoS3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS3Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS3Negativo" name="Cap112incisoS3" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS3Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Técnicas de entrevista
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS4Positivo" name="Cap112incisoS4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS4Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS4Negativo" name="Cap112incisoS4" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS4Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Metodología para el trabajo con la comunidad
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS5Positivo" name="Cap112incisoS5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS5Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS5Negativo" name="Cap112incisoS5" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS5Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                IPH para faltas administrativas
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS6Positivo" name="Cap112incisoS6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS6Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS6Negativo" name="Cap112incisoS6" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS6Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Derechos Humanos y Uso Legítimo de la Fuerza
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS7Positivo" name="Cap112incisoS7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS7Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS7Negativo" name="Cap112incisoS7" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS7Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-10 col-md-12">
                                Comunicación asertiva
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS8Positivo" name="Cap112incisoS8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS8Positivo">Si</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Cap112incisoS8Negativo" name="Cap112incisoS8" class="custom-control-input">
                                    <label class="custom-control-label" for="Cap112incisoS8Negativo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-6 col-md-12">
                                Otro (Descr&iacute;balo)
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>t) Indique el tipo de atención disponible para las víctimas del delito</label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoT1">
                        <label class="form-check-label" for="Cap112incisoT1">
                            Atención médica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoT2">
                        <label class="form-check-label" for="Cap112incisoT2">
                            Atención psicológica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Cap112incisoT3">
                        <label class="form-check-label" for="Cap112incisoT3">
                            Asesoría jurídica
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>u) Indique el tiempo promedio de respuesta a las llamadas de emergencia, desde su recepción, hasta la llegada del policía al lugar de los hechos:</label>
                    <br>
                    <input type="text" class="form-control" id="Cap112incisoO">
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>v)  Indique la frecuencia con las que se llevan a cabo reuniones vecinales.</label>
                    <br>
                    <input type="text" class="form-control" id="Cap112incisoV">
                </div>
            </div>
            <br>
            <!-- Siguiente inciso -->
        </form>


        <!-- Botones para enviar -->
        <div class="d-flex justify-content-around" id="contenedorCambiarSeccion">
            <button type="button" class="btn btn-primary botonCambiarSeccion" onclick="CambiarSeccion('1-1','1-2','1-1-2','1-2-1')">
                Siguiente Sección <i class='bx bx-skip-next'></i>
            </button>
            <button class="btn btn-warning botonCambiandoSeccion" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Validando...
            </button>
        </div>
        <br>
        <!-- Botones para enviar -->