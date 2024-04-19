<!doctype html>
<html lang="en">

<head>
    <title>Aplicacion co LARAVEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">

        <br />
        <div class="card">
            <div class="card-header">Tareas</div>
            <div class="card-body">

                <form action="{{ url('/') }}" method="post">
                    @csrf <!--etsa llave(@csrf) permite recibir los datos post que esta en web.php  -->
                    <br />
                    <input type="text" class="form-control" name="task" placeholder="AGREGA TU TAREA" id="task">
                    <br />
                    <input type="submit" class="btn btn-success" value="Enviar tarea">
                </form>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-borderless table-primary align-middle">
                        <thead class="table-light">

                            <tr>
                                <th>Accion</th>
                                <th>Nombre de la tarea</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($tasks as $task)

                            <tr class="table-primary">
                                <td scope="row">
                                    <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="HECHO👍">
                                    </form>
                                </td>
                                <td>{{ $task->task }}</td> <!--muestra el contenido que tiene la tabla task de la base de datos -->
                            </tr>

                            @endforeach <!--estamos cerrando la tarea con el endforeach-->
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted"><button class="btn btn-dark"><a target="_blank" href="https://github.com/agustindev22">Github</a></button></div>
        </div>


    <footer>
       
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>