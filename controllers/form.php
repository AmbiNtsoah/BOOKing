<?php
session_start();
 $server_name='localhost';
 $server_user='root';
 $server_psw='';
 $bdd='library';
 $conn= mysqli_connect($server_name,$server_user,$server_psw,$bdd);
  if(!$conn){
    echo("DB not found");
  }
 
  if(isset($_POST['login'])){
  $username = nl2br(htmlspecialchars($_POST['username']));
  $usermail= nl2br(htmlspecialchars($_POST['usermail']));
  $userpsw = $_POST['userpsw'];

  if( $username=="admin" && $usermail =="admin@gmail.com" && $userpsw=="admin"){
     header('Location: view/admin.php');
  }

        $sql = mysqli_query($conn,"SELECT * FROM members WHERE user_name ='$username' AND email='$usermail'
        AND password = '$userpsw'");

    if( $sql -> num_rows>0){
        while ($row=$sql->fetch_assoc()) {
            $idUser=$row['id'];
            $dbNameUser=$row['user_name'];
            $dbEmailUser=$row['email'];
            $dbPswUser=$row['password'];
            
            if( $username==$dbNameUser && $usermail==$dbEmailUser && $userpsw==$dbPswUser){
                header('Location: view/acc_mmbr.php ');
                break;
            }else{
                $error = ("ACCESS REFUSER");
                break;
            }
        }

    }

}
?>