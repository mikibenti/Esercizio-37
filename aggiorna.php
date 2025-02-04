<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $codRec = $_POST['codRec'];
        $voto = $_POST['voto'];
        $sql = "UPDATE recensioni SET Voto = $voto WHERE idRecensione = $codRec";
        if($conn->query($sql)) {
            if($conn->affected_rows > 0) {
                echo "<p style='color:green'> Aggiornamento andato a buon fine </p>";
            } else {
                echo "<p style='color:blue'> Non è stato aggiornato nulla </p>";
            }
        } else {
            echo "<p style='color:red'> ERRORE </p>";
        }
    ?>
    <a href="./index.html">Torna alla home page</a>
</body>
</html>