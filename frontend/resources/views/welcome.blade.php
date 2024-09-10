<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="p-3 border">
        <h1>Cadastro de Pessoa</h1>
        <form action="/Pessoa" method="post">
            @csrf

            <div class="mb-3 p-0 w-50 col-md-6 mx-auto">
            <label for="nome">Nome:</label>
            <input type="text" id="name" name="nome" placeholder="Digite o nome" required class="form-control" required pattern="^[a-zA-Z\s]+$" title="O nome deve conter apenas letras e espaços.">
            </div>

            <div class="mb-3 p-0 w-50 col-md-6 mx-auto">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" class="form-control">
            </div>

            <div class="mb-3 p-0 w-50 col-md-6 mx-auto">
            <label for="tel">Telefone:</label>
            <input type="text" id="tel" name="tel" placeholder="Digite o telefone" class="form-control">
            </div>

            <div class="d-flex justify-content-center">
            <input type="submit" placeholder="Cadastrar" class="btn btn-success">

            <button id="btn-visualizar-json" class="btn btn-primary" >Abrir JSON em Nova Aba</button>
            </div>
            </div>
        </div>
    </div>
</div>
        </form>
        <script>
         const button = document.getElementById('btn-visualizar-json');

         button.addEventListener('click', function() {
            window.open('/Pessoas');
        });

            $('#cpf').mask('000.000.000-00');
            $('#tel').mask('(00)0 0000-0000');
        </script>
</body>
</html>