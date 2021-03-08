<!--Librerias -->
@include('includes.header')


<!-- Contenido Principal -->
<main id="main">
    <section id="seccion1" class="about">
        <div class="container">
            <!--
            <div class="section-title" data-aos="fade-up">
                <h3>Capitulo 1. Programa de Impulso al Modelo Nacional de Policia y Justicia C&iacute;vica</h3>
            </div>-->
            <form>
                <h4>1.1.1 Cumplimiento de Metas Convenidas</h4>
                <br>
                <!-- Siguiente inciso -->
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>a) ¿Cuenta la entidad federativa con Unidad de Investigación dentro de su Secretaría de Seguridad Estatal o equivalente?</label>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Cap111incisoAPositivo" name="Cap111incisoA" class="custom-control-input">
                            <label class="custom-control-label" for="Cap111incisoAPositivo">Si</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Cap111incisoANegativo" name="Cap111incisoA" class="custom-control-input">
                            <label class="custom-control-label" for="Cap111incisoANegativo">No</label>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Siguiente inciso -->
                <div class="form-row" id="Cap111IncisoANegativa" class="section-title" data-aos="zoom-in">
                    <div class="form-group col-md-12">
                        <label>b) ¿La entidad federativa comenzó labores para crear su Unidad de Investigación? </label>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Cap111incisoBPositivo1" name="Cap111incisoB" class="custom-control-input">
                            <label class="custom-control-label" for="Cap111incisoBPositivo1">Si</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Cap111incisoBNegativo1" name="Cap111incisoB" class="custom-control-input">
                            <label class="custom-control-label" for="Cap111incisoBNegativo1">No</label>
                        </div>
                    </div>
                </div>
                <!-- Siguiente inciso -->
                <div class="form-row" id="Cap111IncisoAPositiva" data-aos="fade-up">
                    <div class="form-group col-md-12">
                        <label>b) ¿Cuáles fueron los principales bienes adquiridos para el fortalecimiento de la Unidad de Investigación? </label>
                        <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nombre del Bien</th>
                                <th scope="col">Cant. Programada en 2020</th>
                                <th scope="col">Cant. Adquirida en 2020</th>
                                <th scope="col">Porcentaje Alcanzado en 2020</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody id="Cap111TablaBienes">
                            <tr>
                                <td><input type="text" class="form-control" id="Cap1NombreBien"></td>
                                <td><input type="text" class="form-control" id="Cap1Programado2020"></td>
                                <td><input type="text" class="form-control" id="Cap1Adquirido2020"></td>
                                <td><input type="text" class="form-control" id="Cap1Alcanzado2020"></td>
                                <td>
                                    <button type="button" class="btn btn-primary" id="AgregarBienCap111">
                                        <i class='bx bx-plus-medical' ></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>

            <!-- Boton para enviar -->
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-primary" id="EnviarARevision">
                    Enviar a Revisión <i class='bx bx-send'></i>
                </button>
            </div>


        </div>
    </section>

    <!-- Segunda Seccion Cap 1 -->
    <section id="seccion2" class="about">
        <div class="container">
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Técnicas de investigación del delito</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC1Positivo" name="Cap112incisoC1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC1Negativo" name="Cap112incisoC1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Criminalística</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC2Positivo" name="Cap112incisoC2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC2Negativo" name="Cap112incisoC2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Criminología</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC3Positivo" name="Cap112incisoC3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC3Negativo" name="Cap112incisoC3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Talleres en campo de actos de investigación</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC4Positivo" name="Cap112incisoC4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC4Negativo" name="Cap112incisoC4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Técnicas de entrevista</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC5Positivo" name="Cap112incisoC5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC5Negativo" name="Cap112incisoC5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perfilación criminal</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC6Positivo" name="Cap112incisoC6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC6Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC6Negativo" name="Cap112incisoC6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC6Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Teoría del caso</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC7Positivo" name="Cap112incisoC7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC7Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC7Negativo" name="Cap112incisoC7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC7Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prueba legal y lícita</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC8Positivo" name="Cap112incisoC8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC8Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoC8Negativo" name="Cap112incisoC8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoC8Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otro (Descr&iacute;balo)</td>
                                    <td colspan="2"><input class="form-control" type="text"></td>
                                </tr>
                                </tbody>
                            </table>
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Introducción a los métodos de policiamiento y análisis delictivo</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG1Positivo" name="Cap112incisoG1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG1Negativo" name="Cap112incisoG1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Análisis cualitativo aplicado a la seguridad pública</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG2Positivo" name="Cap112incisoG2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG2Negativo" name="Cap112incisoG2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bases de datos</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG3Positivo" name="Cap112incisoG3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG3Negativo" name="Cap112incisoG3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gestión de la Información</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG4Positivo" name="Cap112incisoG4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG4Negativo" name="Cap112incisoG4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Técnicas básicas para integrar información</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG5Positivo" name="Cap112incisoG5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG5Negativo" name="Cap112incisoG5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Análisis geográfico</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG6Positivo" name="Cap112incisoG6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG6Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG6Negativo" name="Cap112incisoG6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG6Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Técnicas de análisis</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG7Positivo" name="Cap112incisoG7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG7Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG7Negativo" name="Cap112incisoG7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG7Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Redes de vínculos </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG8Positivo" name="Cap112incisoG8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG8Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG8Negativo" name="Cap112incisoG8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG8Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Patrones delictivos</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG9Positivo" name="Cap112incisoG9" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG9Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoG9Negativo" name="Cap112incisoG9" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG9Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otro (Descr&iacute;balo)</td>
                                    <td colspan="2"><input class="form-control" type="text"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Siguiente inciso -->
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>h)  Indique si el personal que integra la Unidad de Inteligencia/Análisis tiene acceso a las siguientes fuentes de información.					</label>
                        <br>
                        <div class="container">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Plataforma México (Acceso Amplio)</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH1Positivo" name="Cap112incisoH1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH1Negativo" name="Cap112incisoH1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Plataforma México (Acceso Básico)</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH2Positivo" name="Cap112incisoH2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH2Negativo" name="Cap112incisoH2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Licencias del Estado/Municipio</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH3Positivo" name="Cap112incisoH3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoG3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH3Negativo" name="Cap112incisoH3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Información de los juzgados cívicos (detenciones por faltas administrativas)</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH4Positivo" name="Cap112incisoH4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH4Negativo" name="Cap112incisoH4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Registro Nacional de Detenciones (detenciones por delitos)</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH5Positivo" name="Cap112incisoH5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH5Negativo" name="Cap112incisoH5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Acceso espejo a las cámaras del C4 o C5 del Estado/Municipio</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH6Positivo" name="Cap112incisoH6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH6Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoH6Negativo" name="Cap112incisoH6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoH6Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Mapas de calor</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI1Positivo" name="Cap112incisoI1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI1Negativo" name="Cap112incisoI1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Patrones delictivos y modus operandi</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI2Positivo" name="Cap112incisoI2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI2Negativo" name="Cap112incisoI2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perfiles criminales</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI3Positivo" name="Cap112incisoI3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI3Negativo" name="Cap112incisoI3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fichas de objetivos</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI4Positivo" name="Cap112incisoI4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI4Negativo" name="Cap112incisoI4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Redes de vínculos</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI5Positivo" name="Cap112incisoI5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoI5Negativo" name="Cap112incisoI5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoI5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Introducción a órganos de control interno</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK1Positivo" name="Cap112incisoK1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK1Negativo" name="Cap112incisoK1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mecanismos de alerta temprana</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK2Positivo" name="Cap112incisoK2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK2Negativo" name="Cap112incisoK2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Equilibrio en el proceso disciplinario</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK3Positivo" name="Cap112incisoK3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK3Negativo" name="Cap112incisoK3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Discrecionalidad en la función policial</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK4Positivo" name="Cap112incisoK4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoK4Negativo" name="Cap112incisoK4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoK4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otra (Descr&iacute;bala)</td>
                                    <td colspan="2"><input class="form-control" type="text"></td>
                                </tr>
                                </tbody>
                            </table>
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Ciudadanas</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoN1Positivo" name="Cap112incisoN1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoN1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoN1Negativo" name="Cap112incisoN1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoN1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>De miembros de la corporación</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoN2Positivo" name="Cap112incisoN2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoN2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoN2Negativo" name="Cap112incisoN2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoN2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Mediación</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS1Positivo" name="Cap112incisoS1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS1Negativo" name="Cap112incisoS1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Justicia procedimental</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS2Positivo" name="Cap112incisoS2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS2Negativo" name="Cap112incisoS2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Solución de problemas Metodología SARA <br>(Identificación del problema, análisis del problema, respuesta y evaluación)</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS3Positivo" name="Cap112incisoS3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS3Negativo" name="Cap112incisoS3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Técnicas de entrevista</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS4Positivo" name="Cap112incisoS4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS4Negativo" name="Cap112incisoS4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Metodología para el trabajo con la comunidad</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS5Positivo" name="Cap112incisoS5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS5Negativo" name="Cap112incisoS5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IPH para faltas administrativas</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS6Positivo" name="Cap112incisoS6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS6Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS6Negativo" name="Cap112incisoS6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS6Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Derechos Humanos y Uso Legítimo de la Fuerza</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS7Positivo" name="Cap112incisoS7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS7Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS7Negativo" name="Cap112incisoS7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS7Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Comunicación asertiva</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS8Positivo" name="Cap112incisoS8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS8Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap112incisoS8Negativo" name="Cap112incisoS8" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap112incisoS8Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otro (Descr&iacute;balo)</td>
                                    <td colspan="2"><input class="form-control" type="text"></td>
                                </tr>
                                </tbody>
                            </table>
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

            <!-- Boton para enviar -->
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-primary" id="EnviarARevision2">
                    Enviar a Revisión <i class='bx bx-send'></i>
                </button>
            </div>

        </div>
    </section>


    <section id="seccion3" class="about">
        <div class="container">
            <form>
                <h4>1.2.1  Avance General del Subprograma</h4>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>a) Señale el salario mensual bruto (antes de impuestos) de los policías según su grado (o grado equivalente), en pesos mexicanos</label>
                        <br>
                        <div class="container">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Policía</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos1"></td>
                                    <td>Policía Tercero</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos11"></td>
                                </tr>
                                <tr>
                                    <td>Policía Segundo</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos12"></td>
                                    <td>Policía Primero</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos13"></td>
                                </tr>
                                <tr>
                                    <td>Suboficial</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos2"></td>
                                    <td>Oficial</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos3"></td>
                                </tr>
                                <tr>
                                    <td>Subinspector</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos4"></td>
                                    <td>Inspector</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos5"></td>
                                </tr>
                                <tr>
                                    <td>Inspector Jefe</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos6"></td>
                                    <td>Inspector General</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos7"></td>
                                </tr>
                                <tr>
                                    <td>Comisario</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos8"></td>
                                    <td>Comisario Jefe</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos9"></td>
                                </tr>
                                <tr>
                                    <td>Comisario General</td>
                                    <td><input type="text" class="form-control" id="Cap121TablaSueldos10"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Siguiente inciso -->
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>b) Señale las prestaciones sociales que se proporcionan a los integrantes de la corporación o no</label>
                        <br>
                        <div class="container">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Acceso a créditos para vivienda</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB1Positivo" name="Cap121incisoB1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB1Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB1Negativo" name="Cap121incisoB1" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB1Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Seguro de vida</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB2Positivo" name="Cap121incisoB2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB2Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB2Negativo" name="Cap121incisoB2" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB2Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Servicio médico</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB3Positivo" name="Cap121incisoB3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB3Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB3Negativo" name="Cap121incisoB3" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB3Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fondo de ahorro para el retiro de los policías</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB4Positivo" name="Cap121incisoB4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB4Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB4Negativo" name="Cap121incisoB4" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB4Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Acceso de apoyos para los familiares de policías caídos en cumplimiento del deber</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB5Positivo" name="Cap121incisoB5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB5Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB5Negativo" name="Cap121incisoB5" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB5Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Becas escolares para hijos</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB6Positivo" name="Cap121incisoB6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB6Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB6Negativo" name="Cap121incisoB6" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB6Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gastos fúnebres</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB7Positivo" name="Cap121incisoB7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB7Positivo">Si</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Cap121incisoB7Negativo" name="Cap121incisoB7" class="custom-control-input">
                                            <label class="custom-control-label" for="Cap121incisoB7Negativo">No</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Siguiente inciso -->
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>c) Indique el número total de policías de la corporación que se encuentran dentro de un esquema de jornada laboral como los siguientes</label>
                        <br>
                        <div class="container">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>8 x 16</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                    <td>8 x 24</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                </tr>
                                <tr>
                                    <td>12 x 12</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                    <td>12 x 24</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                </tr>
                                <tr>
                                    <td>12 x 36</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                    <td>24 x 4</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                </tr>
                                <tr>
                                    <td>24 x 48</td>
                                    <td><input type="number" class="form-control" id="Cap121TablaEsquemas1"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Siguiente Inciso -->
            </form>

            <!-- Boton para enviar -->
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-primary" id="EnviarARevisio3">
                    Enviar a Revisión <i class='bx bx-send'></i>
                </button>
            </div>
        </div>
    </section>
</main>
<!-- Cierra Contenido Principal -->

<!-- Footer -->
@include('includes.footer')
