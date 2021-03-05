<!--Librerias -->
@include('includes.header')

<!-- Navbar -->
@include('includes.nav')

<!-- Contenido Principal -->
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Estatus</th>
                    </tr>
                    </thead>
                    <tbody id="Table">
                        @foreach ($test as $t)
                        <tr>
                            <th scope="row">{{ $t->idcatalogoEstatus }}</th>
                            <td>{{ $t->estatus }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>

        <div class="container">
                <div class="card">
                    <div class="card-header">
                        Formulario de prueba
                    </div>
                    <div class="card-body">
                        <form id="FormTest">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Campo Dummy 1</label>
                                <input type="text" class="form-control" name="uno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teclea cualquier cosa">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Campo Dummy 2</label>
                                <input type="text" class="form-control" name="dos" id="exampleInputPassword1" placeholder="Aqui igual">
                            </div>
                            <button type="button" id="EnviarTest" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
            </div>
        </div>
    </section>
</main><br><br><br>

<!-- Cierra Contenido Principal -->

<!-- Footer -->
@include('includes.footer')
