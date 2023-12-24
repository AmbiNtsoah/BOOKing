<?php 
 $server_name='localhost';
 $server_user='root';
 $server_psw='';
 $bdd='library';
 $conn= mysqli_connect($server_name,$server_user,$server_psw,$bdd);
  if(!$conn){
    echo("DB not found");
  }

 if(isset($_POST['add'])){
    $username = nl2br(htmlspecialchars($_POST['username']));
    $usermail= nl2br(htmlspecialchars($_POST['usermail']));
    $userpsw = $_POST['userpsw'];

    $sql = "INSERT INTO members (user_namme, email, password) VALUES ('$username','$usermail','$userpsw')";

    if ($conn->query($sql) == TRUE) {
        echo "Nouvelle donnée ajoutée avec succès.";
       }else {
        echo "Erreur lors de l'ajout de la donnée : " . $conn->error;
      }
    $conn->close();
 }

?>