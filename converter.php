<?php 
   //Consumindo API do Banco Central
   $inicio = date("m-d-Y", strtotime(" -7 days "));
   $final = date("m-d-Y");
   $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$final.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

   $dados = json_decode(file_get_contents($url), true);

   $cotacao = $dados["value"][0]["cotacaoCompra"];
   $diaHoje = $dados["value"][0]["dataHoraCotacao"];

   //Pegando dados do formulário 
   $real = $_REQUEST["moeda"];

   //Calculo do dolar
   $dolar = $real / $cotacao;

   $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Conversor de Moeda</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?= include 'header.php' ?>

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