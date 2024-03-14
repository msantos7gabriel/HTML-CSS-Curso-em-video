<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>

<body>
    <?php
    // CAPTURANDO OS DADOS DO FORMULARIO RETROALIMENTADO  
    $tempo = $_GET['tempo'] ?? 0;
    var_dump($_GET);

    ?>
    <main>
        <h1>Calculdora de Tempo</h1>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="tempo">Qual é o total em segundos ?</label>
            <input type="number" name="tempo" id="tempo" required value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h1>Totalizando tudo</h1>
        <?php
        $segundos = (int) $tempo / 60;
        $minutos = (int) $segundos / 60;
        $horas = (int) $minutos / 60;
        $dias = (int) $hora / 24;
        $semanas = $dia / 7;


        echo "<p>Analizando que voce digitou,  <strong>" . number_format($tempo, 0, ",", ".") . "</strong> equivalem a um total de:</p>";
        echo "        <ul>
        <li>" . number_format($semanas, 2, ",", ".") . " Semanas</li>
        <li>" . number_format($dias, 2, ",", ".") . " Dias</li>
        <li>" . number_format($horas, 2, ",", ".") . " Horas</li>
        <li>" . number_format($minutos, 2, ",", ".") . " Minutos</li>
        <li>" . number_format($segundos, 2, ",", ".") . " Segundos</li>
    </ul>";
        ?>


    </section>
</body>

</html>