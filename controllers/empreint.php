<?php
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$conn = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$conn) {
    echo ("DB not found");
}
if (isset($_POST['lend'])) {
    $name = nl2br(htmlspecialchars($_POST['user']));
    $book = nl2br(htmlspecialchars($_POST['book']));
    $date = date('d/m/Y');

    $sql = "INSERT INTO emprunt (name,book,date) VALUES ('$name','$book','$date')";
    if ($conn->query($sql) == TRUE) {
        echo "Nouvelle donnée ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de la donnée : " . $conn->error;
    }
    $conn->close();
}
?>