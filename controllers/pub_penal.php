<?php
  $server_name='localhost';
  $server_user='root';
  $server_psw='';
  $bdd='library';
  $conn= mysqli_connect($server_name,$server_user,$server_psw,$bdd);
  if(!$conn){
     echo("DB not found");
   }

   if(isset($_POST['pub_penal'])){
    $name = nl2br(htmlspecialchars($_POST['name']));
    $sanction = nl2br(htmlspecialchars($_POST['sanction']));
    $book = nl2br(htmlspecialchars($_POST['cover']));

    $sql = " INSERT INTO penalite (name, sanction , book) VALUES ('$name','$sanction','$book')";
    if ($conn->query($sql) == TRUE) {
        echo "Sanction publier";
       }else {
        echo "Erreur : " . $conn->error;
      }
    $conn->close();
   }



?>