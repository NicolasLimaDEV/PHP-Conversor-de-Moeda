<?php include './services/api.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Conversor de Moeda</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include './components/header.php' ?>

   <section>
      <div class="card">
         <h1>Resultado</h1>

         <h3>Seus <span class="dinheiro"> <?= numfmt_format_currency($padrao, $real, "BRL") ?></span> equivalem a <span class="dinheiro"><?= numfmt_format_currency($padrao, $dolar, "USD") ?></span></h3>
         <p>Cotação obtida diretamente do site do Banco do Brasil.</p>

         <a class="btn-voltar" href="index.php">Voltar</a>
      </div>
   </section>
   
</body>
</html>