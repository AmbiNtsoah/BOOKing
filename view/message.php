<?php
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$conn = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$conn) {
    echo ("DB not found");
}

$getAllQuest = " SELECT * FROM forum ORDER BY id ASC " ;
$resul = mysqli_query($conn, $getAllQuest);
include ("../components/Navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BOOking</title>
</head>
<body class="bg-gradient-to-br from-cyan-400 to-cyan-950">
    
    <h1 class="text-center font-bold text-white text-5xl py-4">Bienvenue sur notre Forum</h1>
    

<div class="container text-center items-center justify-center">
    <?php

        while ($q = mysqli_fetch_assoc($resul)){
           ?>
             <div class="card text-center items-center justify-center font-bold py-4">
                   <h5 class="card-header text-2xl text-white font-semibold">
                       <div>
                       <?php  echo $q ['name']; ?>
                       </div>
                       <div>
                       <?php echo  $q['date'] ; ?>
                       </div>
                   </h5>
                 <div class="card-body">
                     <p class="card-text text-center text-white">
                        <?php echo  $q['message'] ; ?>
                     </p>
                 </div> 
             </div> <br>

           <?php
        }
    
    ?>

  </div>


</body>
</html>