<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num.";

        // $v = 300;
        // var_dump($v);

        // $num = (int) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num";
        //var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>