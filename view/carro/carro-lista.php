<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
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

        .table {
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
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
                <h1 class="text-center">Lista De Carros</h1>
            </div>
            <div class="card-body">
                <div class="text-center mb-3">
                    <a href="/carro/form" class="btn btn-success">Adicionar Carro</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($model->rows as $item):
                            ?>
                            <tr>
                                <td><a href="/carro/form?id=<?= $item->id ?>"> <?= $item->id ?></a></td>
                                <td>
                                    <?= $item->marca ?>
                                </td>
                                <td>
                                    <?= $item->modelo ?>
                                </td>
                                <td>
                                    <?= $item->ano ?>
                                </td>
                                <td><a href="/carro/delete?id=<?= $item->id ?>"><button
                                            class="btn btn-danger btn-sm">Deletar</button></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
            </div>
        </div>
    </div>

    </table>
</body>

</html>