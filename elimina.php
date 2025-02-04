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
        $codProiezione = $_POST['codProiezione'];
        $sql = "DELETE FROM proiezioni WHERE CodProiezione = $codProiezione;";
        if($conn->query($sql)) {
            if($conn->affected_rows > 0) {
                echo "<p style='color:green'> Eliminazione andata a buon fine </p>";
            } else {
                echo "<p style='color:blue'> Nessuna Riga eliminata </p>";
            }
        } else {
            echo "<p style='color:red'> ERRORE </p>";
        }
    ?>
    <a href="./index.html">Torna alla home page</a>
</body>
</html>