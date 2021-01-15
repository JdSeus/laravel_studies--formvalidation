<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body {
            padding: 20px
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-sm-8 offset-sm-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input class="form-control" name="nome" type="text" id="nome" placeholder="Nome do cliente">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input class="form-control" name="idade" type="number" id="idade" placeholder="Idade do cliente">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input class="form-control" name="endereco" type="text" id="endereco" placeholder="Endereço do cliente">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input class="form-control" name="email" type="text" id="email" placeholder="E-mail do cliente">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="card-footer">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    @if(isset($errors))
    {{ var_dump($errors) }}
    @endif

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>