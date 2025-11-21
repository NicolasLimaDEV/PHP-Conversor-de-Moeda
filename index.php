<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Conversor de Moeda</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>   
   <header class="header">
      <h3>
         Real $ Dolar
         <span>by: Nicolas Lima</span>
      </h3>

      <a class="btn-linkedin" href="https://www.linkedin.com/in/nicolaslimadev/" target="_blank">Linkedin</a>
   </header>

   <section>
      <div class="card">
         <h1>Conversor de Moeda</h1>

         <form action="converter.php" method="get">
            <label for="moeda">Digite o valor em R$</label>
            <input type="text" name="moeda" id="moeda">

            <input type="submit" value="Converter">
         </form>
      </div>
   </section>
</body>
</html>