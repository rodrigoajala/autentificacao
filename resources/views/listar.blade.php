<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <h1>
        Project management:
    </h1>
    <a href="{{ route('cadastrarProjeto') }}">Cadastrar projeto</a>
    <br><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Proprietario</th>
            <th>Titulo</th>
            <th>Data Limite</th>
            <th>Excluir</th>
            <th>editar</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->user->name }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->deadLine }}</td>
                <td><a href="{{ route('delete_route', $project->id) }}">Deletar</a></td>
                <td><a href="{{route('edit_route', $project->id)}}">Editar</a></td></td>

            </tr>
        @endforeach

    </table>
    <br>
    <a href="{{ route('logout') }}">Logout</a>
    <div>
    </div>


</body>

</html>
