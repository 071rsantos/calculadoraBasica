<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA RS7</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>CALCULADORA RS7</h1>
    <div class="calculadora">
        <div class="resultado">
            <!--php-->
            <?php
            if(isset($_POST['acao']));
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $tipo = $_POST['tipo'];

                if($tipo == '+');
                $calcular = $n1 + $n2;
                elseif($tipo == '-');
                $calcular = $n1 - $n2;
                elseif($tipo == '*');
                $calcular = $n1 * $n2;
                elseif($tipo == '/');
                $calcular = $n1 / $n2;
                endif
                $calcular = str_replace('.' , ',' , $calcular);
                echo "$n1 $tipo $n2 = $calcular"
            endif
            ?>
            <!--fim php-->
        </div>
    </div>
</body>
</html>