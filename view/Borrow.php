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

$getLend = mysqli_query($conn, "SELECT * FROM emprunt");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BOOking</title>
</head>

<body class="bg-gradient-to-br from-cyan-400 to-cyan-950">

    <div class="bg-white px-2 py-7 flex items-center justify-between ">
        <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="flex items-center space-x-2 hover:text-cyan-500">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 text-yellow-500 h-10">
                <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
            </svg> -->
            <span class="text-3xl text-yellow-500 font-extrabold hover:text-cyan-500">BOOKing</span>
        </a>

        <div class="hidden md:flex items-center space-x-2">
            <a href="http://localhost/PROJET%20FINAL/view/Admin.php" class="px-2 text-semibold hover:bg-yellow
              -500 hover:rounded-full hover:py-2 hover:px-2 hover:text-white hover:bg-yellow-500 duration-150">Administrator</a>
            <!-- <a href="http://localhost/PROJET%20FINAL/view/members.php" class="px-2 text-semibold hover:bg-yellow-500 duration-150 hover:rounded-full hover:py-2 
              hover:px-2 hover:text-white">Liste des members</a> -->
            <a href="http://localhost/PROJET%20FINAL/view/Borrow.php" class="px-2 text-semibold hover:bg-yellow-500 duration-150 hover:rounded-full hover:py-2 
              hover:px-2 hover:text-white">Livres empruntés</a>
        </div>
    </div>



    <div>
        <table class="w-full text-sm font-bold text-white text-center items-center justify-center dark:text-gray-400">
            <thead class="text-xs text-white uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Book</th>
                    <th scope="col" class="px-6 py-3">Date d'empreint</th>
                </tr>
            </thead>
            <tbody class="text-center items-center justify-center">
                <?php while ($row = mysqli_fetch_assoc($getLend)) : ?>
                    <tr>
                        <td class="px-6 py-4 text-3xl"><?php echo $row['name']; ?></td>
                        <td class="px-6 py-4 text-3xl"><?php echo $row['book']; ?></td>
                        <td class="px-6 py-4"><?php echo $row['date']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- <style scoped>
        input{
            /* border: solid 1px; */
        }
    </style> -->

</body>

</html>