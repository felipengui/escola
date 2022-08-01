<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="../css/reserva.css">
</head>
<body>
<main id="inicio">
          <div class="topo">
               <h1>Faça sua reserva:</h1>
          </div>
          <div class="centro">
               <section>
                    <form id="form1" class="form-text" action="../controller/cliente-controller.php" method="post">
                        <p> <label>Nome:</label>
                              <input class="form-control"  type="text" name="txtnome" placeholder="Nome Sobrenome" require autofocus></p>

                        <p> <label>Email:</label>
                              <input class="form-control"  type="email" name="txtemail" placeholder="***@gmail.com" require autofocus></p>
                       
                        <p> <label>Telefone:</label>
                              <input class="form-control" type="tel" name="txttelefone" placeholder="(**)****-****" require></p>
                         
                         <p><label>RG:</label>
                              <input class="form-control" type="txt" name="txtrg" placeholder="0000000000" require></p>
                        
                        <p><label>Quantidade de dias:</label></p>
                             <p> <input type="text" maxlength="2" name="txtdiaria" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                            </p>

                        <p><label>Seleção de sua acomodação:</label></p>
                        <select name="txtsuites" id="suites">
                           <p> <option value="Master">Suite Master - R$150,00 a diaria</option>
                            <option value="Familia">Suite Família - R$180,00 a diaria</option>
                            <option value="Single">Suite Single - R$100,00 a diaria</option>
                        </select></p>

                         <p><input type="submit" class="btn btn-success" value="Finalizar Reserva">
                         <input type="reset" class="btn btn-warning" value="Limpar Campos"></p>
                    </form>
               </section>
          </div>
     </main>
    
</body>
</html>