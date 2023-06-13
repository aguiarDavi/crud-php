<!DOCTYPE html>
<html>

<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
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

        if (isset($_GET['logout'])) {
            session_destroy();
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
                <div class="text-center">
                    <a class="btn btn-primary btn-lg" href="/carro">Ver Carros</a>
                    <a class="btn btn-primary btn-lg" href="?logout">Deslogar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>