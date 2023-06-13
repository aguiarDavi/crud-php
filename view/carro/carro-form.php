<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 8px 8px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>

</head>

        <?php 
        session_start();

        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: /');
            exit();
        }
        ?>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Cadastro De Carros</h1>
            </div>
            <div class="card-body">
                <form method="post" action="/carro/form/save">

                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input class="form-control" type="text" name="marca" id="marca" value="<?= $model->marca ?>">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input class="form-control" type="text" name="modelo" id="modelo" value="<?= $model->modelo ?>">
                    </div>
                    <div class="form-group">
                        <label for="ano">Ano:</label>
                        <input class="form-control" type="number" name="ano" id="ano" value="<?= $model->ano ?>">
                    </div>

                    <button class="btn btn-primary" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>