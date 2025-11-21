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
         <h1>Conversor de Moeda</h1>

         <form action="converter.php" method="get">
            <label for="moeda">Digite o valor em R$</label>
            <input type="number" name="moeda" id="moeda">

            <input id="btn-submit" type="submit" value="Converter">
         </form>
      </div>
   </section>

   <?php include './components/footer.php' ?>
</body>
</html>