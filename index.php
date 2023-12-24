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
     $usermail = nl2br(htmlspecialchars($_POST['usermail']));
     $userpsw = $_POST['userpsw'];
  
    $sql = mysqli_query($conn, "SELECT * FROM members WHERE user_name ='$username' AND email='$usermail'
          AND password = '$userpsw'");
  
    if($sql->num_rows > 0){
        while ($row = $sql->fetch_assoc()) {
            $user_id = $row['id'];
            $dbNameUser = $row['user_name'];
            $dbEmailUser = $row['email'];
            $dbPswUser = $row['password'];
            

            if($username == $dbNameUser && $usermail == $dbEmailUser && $userpsw == $dbPswUser){     
                $_SESSION['User'] = $user_id;         

                if ($dbNameUser == 'admin') {
                    header('Location: http://localhost/PROJET%20FINAL/view/Admin.php');
                } else {
                    header('Location: http://localhost/PROJET%20FINAL/view/Public.php');
                }
                exit();
            } else {
                $error = "ACCESS REFUSED";
                break;
            }
        }
    } else {
        $error = "Invalid credentials"; 
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
  <!-- <link rel="stylesheet" href="../dist/output.css"> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="./src/assets/Booking.png">
  <title>BOOKing</title>

</head>
<body class="bg-gradient-to-br from-cyan-500 to-cyan-950">

    <div class="justify-center items-center p-52 bg-gradient-to-br from-cyan-500 to-cyan-950">
        <form action="./view/Public.php" method="POST" class="bg-cyan-700"><br>

            <div class =" px-2 py-7 flex items-center">
                <a href="#" class="flex items-center space-x-2 hover:text-cyan-500">
                    <!-- <img src="./src/assets/Booking.png" alt="BOOKing Logo"> -->
                    <span class="text-3xl text-yellow-500 font-extrabold hover:text-cyan-500 duration-110">BOOKing</span>
                </a>
            </div>

            <div>
                <input type="text" name="username" id="" placeholder="Nom d'Utilisateur" class="p-2 hover:scale-105 duration-150 bg-white m-3" required>
            </div>

            <div>
                <input type="email" name="usermail" id="" placeholder="Email" class="p-2 hover:scale-105 duration-150 bg-white m-3" required>
            </div>

            <div>
                <input type="password" name="userpsw" id="" placeholder="Password" class="p-2 hover:scale-105 duration-150 bg-white m-3" required>
            </div>

            <div class="p-4">
                <input type="submit" value="Log in" name="login" class="bg-cyan-500 p-3 text-white cursor-pointer hover:bg-yellow-500 hover:scale-105 duration-150">
            </div>

        </form>
    </div>

<style scoped>
    form {
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
    }

    input {
        width: 8cm;
        text-align: center;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
    }
</style>

</body>