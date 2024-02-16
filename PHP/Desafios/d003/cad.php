<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 03 PHP</title>
</head>

<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $reais = $_GET["reais"];
        $dolar = round($reais / 4.97, 2);

        echo "Seus R\$ $reais equivalem a <strong>US\$ $dolar</strong>";
        echo "<br><strong>*Cotação Fixa de US$ 4,97</strong>, informado diretamente no código";
        ?>
        <p><a href="javascript:history.go(-1)"> Voltar Para a Página Anterior</a></p>
    </section>

</body>

</html>