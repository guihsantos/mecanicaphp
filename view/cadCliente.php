<html>
  <head>
    <title>
      Cadastro de Cliente
    </title>
  </head>
  <body>
    <form action="../control/clienteControl.php" method="post">
      <label>Nome</label>
      <input type="text" name="nome" placeholder="digite o nome do cliente"><br>
      <label>email</label>
      <input type="email" name="email"><br>
      <label>cpf</label>
      <input type="text" name="cpf"><br>
      <label>telefone</label>
      <input type="text" name="telefone"><br>
            
      <input type="hidden" name="acao" value="1">
      <input type="submit" value="salvar">
    </form>
          <?php 
           if(isset($_REQUEST["msg"])){
               switch($_REQUEST["msg"]){
                   case 1:
                         echo "Dados inseridos com sucesso!";
                    break;     
               }
           }
           
           ?>
  </body>
</html>