<?php include('../components/header.php');
include('../controllers/add_mmbr.php');
include('../controllers/delete_mmbr.php');
?>

<body>

    <div class="bg-white px-2 py-7 flex items-center">
        <a href="#" class="flex items-center space-x-2 hover:text-cyan-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 text-yellow-500 h-10">
                <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
            </svg>
            <span class="text-3xl text-yellow-500 font-extrabold hover:text-cyan-500">BOOKing</span>
        </a>
    </div>

    <div class="">
        <form action="" method="POST">
            <h1>Inscription</h1><br>

            <div>
                <input type="text" name="username" id="" placeholder="Name" required>
            </div><br>

            <div>
                <input type="email" name="usermail" id="" placeholder="Email" required>
            </div><br>

            <div>
                <input type="password" name="userpsw" id="" placeholder="Password" required>
            </div><br>

            <div>
                <input type="submit" value="Add" name="add">
            </div>

        </form><br><br>


    </div>

    <div>
        <form action="" method="post">
            <h1>Suppression</h1><br>
            <input type="text" name="num" id="" placeholder="Number"><br>
            <input type="submit" value="Delete" name="delete">
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
            border: solid 1px;
            width: 8cm;
            text-align: center;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }
    </style>


</body>

</html>