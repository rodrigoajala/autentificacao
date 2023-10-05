<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('makeLoginRota') }}">
                    @csrf
                    <br>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="userName"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>

                        <input name='password' type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <br>
                </form>
                <a href="{{ route('create') }}">Cadastrar Usuario</a>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                </script>
</body>

</html>
