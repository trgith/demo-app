
<form>
    <h4>3.2.1. Cumplimiento de Metas Convenidas</h4>
    <br>

    <strong>A) Detallar cada una de las obras y mantenimientos realizados durante el ejercicio fiscal 2020, así como el porcentaje alcanzado de las mismas</strong>
    <br><br>

    <!-- Equipamiento de Personal -->
    <div class="form-row">

        <!-- Contenido -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Obra</th>
                    <th scope="col">Mantenimiento</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Cant. Concertada en 2020</th>
                    <th scope="col">Cant. Modificada en 2020</th>
                    <th scope="col">Porcentaje Alcanzado en 2020</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                </thead>
                <tbody id="Cap321TablaObras">
                <tr>
                    <td class="text-center"><input class="form-check-input" type="radio" name="TipoCheck" id="ObraCheck" value="ObraCheck"></td>
                    <td class="text-center"><input class="form-check-input" type="radio" name="TipoCheck" id="MantenimientoCheck" value="MantenimientoCheck"></td>
                    <td><input type="text" class="form-control" id="Cap3NombreLugar"></td>
                    <td><input type="text" class="form-control" id="Cap3Concertada2020"></td>
                    <td><input type="text" class="form-control" id="Cap3Modificada2020"></td>
                    <td><input type="text" class="form-control" id="Cap3Alcanzado2020"></td>
                    <td>
                        <button type="button" class="btn btn-primary" id="AgregarObraCap321">
                            <i class='bx bx-plus-medical'></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Contenido -->

    </div>
    <br>
    <!-- Equipamiento de Personal -->

</form>

<!-- Botones para enviar -->
<div class="d-flex justify-content-around" id="contenedorCambiarSeccion">
    <button type="button" class="btn btn-primary botonCambiarSeccion" onclick="CambiarSeccion('3-3','3-4','3-2-1','3-2-2')">
        Siguiente Sección <i class='bx bx-skip-next'></i>
    </button>
    <button class="btn btn-warning botonCambiandoSeccion" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Validando...
    </button>
</div>
<br>
<!-- Botones para enviar -->
