<?php
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$conn = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$conn) {
    echo ("DB not found");
}

if (isset($_POST['publish'])) {
    $user = nl2br(htmlspecialchars($_POST['user']));
    $message = nl2br(htmlspecialchars($_POST['message']));
    $date = date('d/m/Y');

    $sql = " INSERT INTO forum (name , message , date) VALUES ('$user','$message','$date') ";

    if ($conn->query($sql) == TRUE) {
        echo ( "Votre message a été bien publier");
    } else {
        echo ("ERREUR"). $conn->error;
    }
    $conn->close();
}

$getAllQuest = " SELECT * FROM forum ORDER BY id ASC " ;
$resul = mysqli_query($conn, $getAllQuest);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../dist/output.css">
    <title>Booking</title>

</head>


<body class="bg-gradient-to-br from-cyan-400 to-cyan-950 font-semibold">
    <?php
    include('../components/Navbar.php');
    ?>
    <div class="py-9 bg-cyan-700 rounded-md">
        <form action="" method="POST" class="text-center items-center justify-center">
            <div class="bg-cyan-700 rounded-md">
                <div class="space-y-8 py-8 px-8">
                    <input type="text" name="user" id="user" placeholder="Nom d'Utilisateur" class="px-32 py-4 rounded-lg">
                </div>
                
                <div class="rounded-md">
                    <textarea name="message" id="message" class="px-4 py-4 rounded-md" cols="50" rows="20" placeholder="Votre message"></textarea>
                </div>
                
                <div class="pb-8 pt-2">
                    <input type="submit" value="Publish" name="publish" class="px-8 py-4 rounded-lg bg-cyan-400 text-white hover:bg-yellow-500 duration-150 hover:scale-110 cursor-pointer">
                </div>
            </div>
        </form>
    </div>









    <!-- <style scoped>
        textarea {
            border: solid 1px;
            margin-left: 1cm;
            border-radius: 20px;
        }

        input {
            border: solid 1px;
            border-radius: 5px;
        }
    </style> -->

</body>