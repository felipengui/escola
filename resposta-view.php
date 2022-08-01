<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/resposta.css">
    
</head>
<body>

<h1 class="topo">Reserva Concluída!</h1>
<div id="div">
<div class="centro">
    <?php

    include '../model/cliente-class.php';

    $nomeDoCliente = $_GET['nome']; // variável auxiliar da controle
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $RG = $_GET['rg'];
    $diaria = $_GET['diaria'];
    $suites = $_GET['suites'];
    $resposta = $_GET['resposta'];

      echo "<p>Nome do Cliente: $nomeDoCliente</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Telefone: $telefone</p>";
      echo "<p>RG: $RG</p>";
      echo "<p>Quantidade de dias: $diaria</p>";
      echo "<p>Acomodação escolhida: $suites</p>";
      echo "<p>Valor total da diária será R$$resposta,00</p>";

    ?>
    </div>
    </div>

</body>
</html>