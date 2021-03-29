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

                    <label>b) ¿Cuáles fueron los principales bienes adquiridos para el fortalecimiento de la Unidad de Investigación? </label>
                    <br>
                <div class="table-responsive">
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

    <!-- Botones para enviar -->
    <div class="d-flex justify-content-around" id="contenedorCambiarSeccion">
        <button type="button" class="btn btn-primary botonCambiarSeccion" onclick="CambiarSeccion('1-1','1-1','1-1-1','1-1-2')">
            Siguiente Sección <i class='bx bx-skip-next'></i>
        </button>
        <button class="btn btn-warning botonCambiandoSeccion" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Validando...
        </button>
    </div>
    <br>
    <!-- Botones para enviar -->