<!DOCTYPE html>
<html>

<head>
  <title>Tela de Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
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

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1 class="text-center">Tela de Login</h1>
      </div>
      <div class="card-body">
        <form action="/" method="POST">
          <div class="form-group">
            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
          </div>
          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
          <p id="error-message" style="margin-top: 5vh; color: red; font-weight: bold; text-align: center;" ></p>
        </form>
      </div>
    </div>
  </div>

  <?php
  require('controller/login_controller.php');

  if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $username = $_POST['usuario'];
    $password = $_POST['senha'];

    $login_controller = new login_controller();
    $login_controller->realizarLogin($username, $password);

    

  }
  ?>

  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      const urlParams = new URLSearchParams(window.location.search);
      const error = urlParams.get('error');

      if (error === '1') {
        const errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'LOGIN OU SENHA INCORRETOS';
      }
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>