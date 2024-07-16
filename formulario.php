<?php
// verificar sem o formulario foe submitado
  if(isset($_POST['submit']))
  {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br');
    // print_r('Telefone: ' . $_POST['telefone']);

    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br');
    // print_r('Data de nacimento: ' . $_POST['data_nacimento']);
    // print_r('<br');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br');
    // print_r('Endereço: ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nacimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    //query de insert
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES 
    ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
   
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="escrevo uma descrição do site que estou fazendo">
  <meta name="keywords" content="postos chaves do site HTML, CSS, JavaScript">
  <meta name="author" content="Paula">

  <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="./style.css">

  <title>Formulário</title>
</head>

<body>
  <div class="box">

    <form action="formulario.php" method="POST">

      <fieldset>
        <legend><b>Formulário de clientes</b></legend>

        <div class="inputbox">
          <input type="text" name="nome" class="inputUser" id="nome" required>
          <label for="nome" class="labelInput">Nome Completo</label>
        </div>

        <div class="inputbox">
          <input type="text" name="email" class="inputUser" id="email" required>
          <label for="email" class="labelInput">Email</label>
        </div>

        <div class="inputbox">
          <input type="tel" name="telefone" class="inputUser" id="telefone" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        
        <p>Sexo:</p>
        <input type="radio" name="genero"  id="feminino" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>

        <input type="radio" name="genero" id="masculino" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>

        <input type="radio" name="genero" id="outro" value="outro" required>
        <label for="outro">Outro</label>

        <br><br>

          <label for="data_nacimento"><b>Data de Nacimento:</b></label>
          <input type="date" name="data_nacimento" id="data_nacimento" required>

        <div class="inputbox">
          <input type="text" name="cidade" class="inputUser" id="cidade" required>
          <label for="cidade" class="labelInput">Cidade</label>
        </div>

        <div class="inputbox">
          <input type="text" name="estado" class="inputUser" id="estado" required>
          <label for="estado" class="labelInput">Estado</label>
        </div>

        <div class="inputbox">
          <input type="text" name="endereco" class="inputUser" id="endereco" required>
          <label for="endereco" class="labelInput">Endereço</label>
        </div>

        <input type="submit" name="submit" id="submit">

      </fieldset>
    </form>
  </div>

</body>

</html>