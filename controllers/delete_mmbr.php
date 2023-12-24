<?php
$server_name='localhost';
$server_user='root';
$server_psw='';
$bdd='library';
$conn= mysqli_connect($server_name,$server_user,$server_psw,$bdd);
 if(!$conn){
   echo("DB not found");
 }

 if(isset($_POST['delete'])){
    $id = $_POST['num'];
    $sql = "DELETE FROM members WHERE id_membre = $id ";

    if ($conn->query($sql) == TRUE) {
        $succes = "Donnée supprimée avec succès.";
      }  else {
        $error= "Erreur lors de la suppression de la donnée : ";
              }
            }
    $conn->close();
 ?>