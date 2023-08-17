<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números Real</h1>
        
        <?php 
            $num = $_POST["n"];
            
            echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".")."</strong> informado pelo usuário:</p> ";

            $inte = (int) $num;
            $frac = $num - $inte;

            echo "<ul><li> A parte inteira do número é <strong> " . number_format($inte, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionária do número é <strong> ".number_format($frac, 3, ",", ".") ." </strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>   
</body>
</html> 