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
        $nome = $_POST['nome'];
        $annoNasc = $_POST['annoNasc'];
        $nazionalita = $_POST['nazionalita'];
        $sql = "INSERT INTO attori (Nome, AnnoNascita, Nazionalita) VALUES ('$nome' , $annoNasc , '$nazionalita');";
        if($conn->query($sql)) {
            echo "<p style='color:green'> Inserimento andato a buon fine </p>";
        } else {
            echo "<p style='color:red'> ERRORE </p>";
        }
    ?>
    <a href="./index.html">Torna alla home page</a>
</body>
</html>