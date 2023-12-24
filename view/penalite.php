<?php
include('../components/Navbar.php');
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$connect = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$connect) {
    echo ("DB not found");
}
$sql = mysqli_query($connect, "SELECT * FROM penalite")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BOOking</title>
</head>

<body class="bg-gradient-to-br from-cyan-400 to-cyan-950">

    <div>
        <h1 class="text-3xl text-center font-bold py-4 text-white">Gestion de <strong class="cursor-pointer hover:text-yellow-500 duration-150">sanction</strong></h1>
    </div>

    <div class="relative overflow-x-auto text-center">
        <table class="w-full text-sm text-left text-white dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3 text-white text-center">
                        Sanction
                    </th>
                    <th scope="col" class="px-2 py-3 text-white text-center">
                        Name
                    </th>
                    <th scope="col" class="px-2 py-3 text-white text-center">
                        Book
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($sql)) : ?>
                    <tr class=" text-center dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-white 
                whitespace-nowrap dark:text-white"><?php echo $row['sanction']; ?></th>
                        <td class="px-6 py-4"><?php echo $row['name']; ?></td>
                        <td class="px-6 py-4"><?php echo $row['book']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>



</body>

</html>