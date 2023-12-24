<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
    <title>Booking</title>

</head>



<body class="bg-gradient-to-br from-cyan-400 to-cyan-950">

    <?php

    include('../controllers/Add_members.php');
    include('../controllers/Delete_members.php');
    include('../controllers/Add_book.php');
    include('../controllers/pub_penal.php');
    include('../controllers/empreint.php');

    ?>

    <div class="bg-white px-2 py-5 flex items-center justify-between">
        <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="flex items-center space-x-2 hover:text-cyan-500">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 text-yellow-500 h-10">
                <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
            </svg> -->
            <img src="../src/assets/Booking.png" alt="">
            <span class="text-3xl text-yellow-500 font-extrabold duration-150 hover:text-cyan-500">BOOKing</span>
        </a>

        <div class="hidden md:flex items-center space-x-2  justify-between">
            <a href="http://localhost/PROJET%20FINAL/view/Admin.php" class="px-2 text-semibold hover:bg-yellow
              -500 hover:rounded-full hover:py-2 hover:px-2 duration-150 hover:text-white hover:bg-yellow-500">Administrator</a>
            <!-- <a href="http://localhost/PROJET%20FINAL/view/members.php" class="px-2 text-semibold hover:bg-yellow-500 hover:rounded-full duration-150 hover:py-2 
              hover:px-2 hover:text-white">Liste des members</a> -->
            <a href="http://localhost/PROJET%20FINAL/view/Borrow.php" class="px-2 text-semibold hover:bg-yellow-500 hover:rounded-full duration-150 hover:py-2 
              hover:px-2 hover:text-white">Livres empreintés</a>
        </div>



    </div>

    <div>
        <h1 class="text-3xl font-bold py-4 text-white cursor-pointer hover:text-yellow-500 text-center">Gestion de BOOKing</h1>
    </div>
    <!-- Insertion de nouveau membre -->
    <div class="p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
        <form action="" method="POST" style="float: left;" class="bg-cyan-500 rounded-md p-8 hover:scale-105 hover:bg-cyan-950 duration-150">
            <h1 class="text-3xl font-bold text-white pb-4">Inscription</h1>

            <div class="">
                <div>
                    <input type="text" name="username" id="" class="m-8 p-2" placeholder="Name" required>
                </div>

                <div>
                    <input type="email" name="usermail" id=""  class="m-8 p-2" placeholder="Email" required>
                </div>

                <div>
                    <input type="password" name="userpsw" id=""  class="m-8 p-2" placeholder="Password" required>
                </div>

                <div>
                    <input type="submit" value="Add" name="add" class="m-8 p-2 bg-cyan-700 text-white hover:scale-105 duration-100 hover:bg-yellow-500 hover:text-white">
                </div>
            </div>

        </form>

<!-- Insertion de nouveau livre -->
        <!-- <form action="" method="POST" id="book" class="bg-cyan-500 p-8 rounded-md hover:scale-105 hover:bg-cyan-950 duration-150">
            <h1 class="text-3xl font-bold text-white pb-4">Livres</h1>

            <div>
                <input type="text" name="book_name" placeholder="book_name"  class="m-8 p-2" required>
            </div>

            <div>
                <input type="text" name="book_type" placeholder="book_type"  class="m-8 p-2" required>
            </div>

            <div>
                <input type="text" name="book_cover" placeholder="book_cover"  class="m-8 p-2" required>
            </div>

            <div>
                <input type="submit" value="Add" name="add_book" class="m-8 p-2 bg-cyan-700 text-white hover:scale-105 duration-100 hover:bg-yellow-500 hover:text-white" >
            </div>

        </form> -->
<!-- Ajouter une pénalités -->
        <form action="" method="POST" class="bg-cyan-500 p-8 rounded-md hover:scale-105 hover:bg-cyan-950 duration-150">
            <h1 class="text-3xl font-bold text-white pb-4">Penalités</h1>

            <div>
                <input type="text" name="name" placeholder="name" class="m-8 p-2"  required>
            </div>

            <div>
                <input type="text" name="sanction" placeholder="Sanction"  class="m-8 p-2" required>
            </div>

            <div>
                <input type="text" name="cover" placeholder="Book"  class="m-8 p-2" required>
            </div>

            <div>
                <input type="submit" value="Add" name="pub_penal" class="m-8 p-2 bg-cyan-700 text-white hover:scale-105 duration-100 hover:bg-yellow-500 hover:text-white" >
            </div>

        </form>
<!-- Suppréssion de membre -->
        <form action="" method="post" class="bg-cyan-500 p-8 rounded-md hover:scale-105 hover:bg-cyan-950 duration-150">
            <h1 class="text-3xl font-bold text-white pb-12">Suppression</h1>
            <div>
                <input type="text" name="num" id="" placeholder="Identifiant Utilisateur" class="m-8 p-2">
            </div>
            <div>
                <input type="submit" value="Delete" name="delete" class="m-8 p-2 bg-cyan-700 text-white hover:scale-105 duration-100 hover:bg-yellow-500 hover:text-white" >
            </div>
        </form>

    <!-- AJouter un nouvel emprunt de livre -->
        <form action="" method="post" class="bg-cyan-500 rounded-md p-8 hover:scale-105 text-center hover:bg-cyan-950 duration-150">
            <h1 class="text-3xl font-bold text-white pb-4">Emprunt</h1>
            <div>
                <div>
                    <input type="text" name="user" id="" placeholder="Nom" class="m-8 p-2" >
                </div>
                <div>
                    <input type="text" name="book" placeholder="Book" class="m-8 p-2" >
                </div>
                <div>
                    <input type="submit" value="Entrer" name="lend" class="m-8 p-2 bg-cyan-700 text-white hover:scale-105 duration-100 hover:bg-yellow-500 hover:text-white" >
                </div>
            </div>
        </form>
    </div>



    <style scoped>
        form {
            display: inline-block;
            flex-direction: column;
            text-align: center;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            margin-left: 3cm;

        }

        input {
            width: 8cm;
            text-align: center;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        input[type=file] {
            border: none;
        }
    </style>


</body>

</html>