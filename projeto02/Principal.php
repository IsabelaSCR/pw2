<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Projeto Banco de Dados</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 25px">
    
  <div class="collapse navbar-collapse" id="navbarNav">
    <a class="navbar-brand" href="http://etec199-2021-isabelarocha.atwebpages.com/">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                             Voltar ao início
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
    <ul class="navbar-nav">
      <li class="nav-item">

      </li>
      <li class="nav-item">

      </li>
      
    </ul>
  </div>
</nav>
<br>
 
                <?php
                require "./Conta.php";
                require "./ContaCorrente.php";
                require "./ContaPoupanca.php";
                require "./Cliente.php";
                
                $conta = new Conta('Agência, 123456, 100, senha0000, 1000');
                
                $contaCorrente = new ContaCorrente('4447779','343536', $cliente,'senha1111','5000');
                
                $contaPoupanca = new ContaPoupanca('4853210','257074',$cliente,'senha2222','9000');
                
                $cliente = new Cliente('Isabela','111.222.333-44','01/01/2005','Rua Francolino Pereira', 'Feminino','11943876907');
                
                ?>
                
                
                <h3>Dados da conta corrente:</h3>
                
                <p> Agência: <?php echo $contaCorrente->getAgencia() ?> </p>
                <br>                
                <p> Cliente: <?php echo $contaCorrente->getCliente() ?> </p>
                <br>
                <p> Conta: <?php echo $contaCorrente->getConta() ?> </p>
                <br>
                <p> Saldo: <?php echo $contaCorrente->getSaldo() ?> </p>
                <br>
                <p> Senha: <?php echo $contaCorrente->getSenha() ?> </p>
                
                <br>
                
                <h3>Dados da conta poupanca:</h3>
                
                
                <p> Agência: <?php echo $contaPoupanca->getAgencia() ?> </p>
                <br>
                <p> Cliente: <?php echo $contaPoupanca->getCliente() ?> </p>
                <br>
                <p> Conta: <?php echo $contaPoupanca->getConta() ?> </p>
                <br>
                <p> Saldo: <?php echo $contaPoupanca->getSaldo() ?> </p>
                <br>
                <p> Senha: <?php echo $contaPoupanca->getSenha() ?> </p>
        
        </body>
</html>