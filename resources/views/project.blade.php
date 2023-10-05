<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <h1>
         New Project:
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{route('recordProjectRota')}}">
                    @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Titulo</label>
                            <input name="title" type="name" class="form-control" id="title" aria-describedby="name">
                        </div>
                            <div class="mb-3">
                                <label for="deadline" class="form-label">Data limite</label>
                                <input name='deadline' type="date" class="form-control" id="deadline">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Cadastrar Projeto</button>
                </form>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                </script>
</body>

</html>
