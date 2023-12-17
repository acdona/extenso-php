<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>FSPHP: Iniciando um projeto!</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <?php

        /**
         * Bloco PHP com variável start
         * e comando de saída!
         */

        $start = "Vamos Começar!";

        echo "<h1>Olá Mundo! {$start}</h1>";
        echo "<p id='js'>Loading...</p>";
        include "NumeroPorExtenso.php";
        
 
        $numero = 58922658123.45;
        $extenso = new NumeroPorExtenso;
        $extenso = $extenso->converter($numero);
        echo "$numero por extenso é $extenso";
        
    ?>

    <script src="assets/js/script.js"></script>

</body>

</html>
