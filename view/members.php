<?php
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$conn = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$conn) {
  echo ("DB not found");
}
$sql = mysqli_query($conn, "SELECT id_membre , user_name FROM members ");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
  <title>BOOking</title>
</head>

<body class="bg-gradient-to-br from-cyan-400 to-cyan-950">

  <nav class="sticky top-0">
    <!-- desktop menu -->
    <div class="bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="flex justify-between">
          <!-- Menu -->
          <div class="flex items-center space-x-4 justify-between">
            <!-- Logo -->
            <div class="bg-white px-2 py-7 flex items-center">
              <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="flex items-center space-x-2 hover:text-cyan-500">
                <!-- <img src="../src/assets/Booking.png" alt="BOOKing Logo"> -->
                <span class="text-3xl text-yellow-500 font-extrabold hover:text-cyan-500">BOOKing</span>
              </a>
            </div>
            <!-- menu -->
            <div class="hidden md:flex items-center space-x-2 justify-between font-bold">
              <a href="http://localhost/PROJET%20FINAL/view/Admin.php" class="px-2 text-semibold hover:bg-yellow
              -500 hover:rounded-full hover:py-2 hover:px-2 duration-150 hover:text-white hover:bg-yellow-500">Administrator</a>
              <!-- <a href="http://localhost/PROJET%20FINAL/view/members.php" class="px-2 text-semibold hover:bg-yellow-500 hover:rounded-full hover:py-2 
              hover:px-2 duration-150 hover:text-white">Liste des members</a> -->
              <a href="http://localhost/PROJET%20FINAL/view/Borrow.php" class="px-2 text-semibold hover:bg-yellow-500 hover:rounded-full hover:py-2 
              hover:px-2 duration-150 hover:text-white">Livres empruntés</a>
            </div>
          </div>
          <!-- Login -->
          <!-- <div class="flex items-center space-x-2">
            <a href="http://localhost/PROJET%20FINAL/view/form.php" class="text-semibold bg-cyan-500 py-2 px-5 rounded-3xl text-black
               hover:text-cyan-500 hover:bg-white">Login</a>
            <a href="" class="text-semibold py-2 px-5 rounded-3xl hover:text-white hover:bg-cyan-500 text-cyan-500">Register</a>
          </div> -->
          <!-- Button show mobile menu -->
          <div class="md:hidden flex items-center">
            <button @click="ShowMobileMenu = !ShowMobileMenu" class="py-5 px-5 text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-10">
                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden bg-yellow-400 hover:rounded-md text-white hover:text-white" :class="{ hidden : ShowMobileMenu }">
      <a href="http://localhost/PROJET%20FINAL/view/Admin.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400  duration-150hover:rounded-md ">Administrator</a>
      <a href="http://localhost/PROJET%20FINAL/view/members.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400  duration-150hover:rounded-md ">Liste des members</a>
      <a href="http://localhost/PROJET%20FINAL/view/Borrow.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400  duration-150hover:rounded-md ">Livres empruntés</a>
      
    </div>
  </nav>




  <div>
    <table  class="w-full text-sm text-center text-white dark:text-white">

      <thead class="text-xs text-gray-900 uppercase dark:text-white">
        <tr>
          <th scope="col" class="px-6 py-3">N°</th>
          <th scope="col" class="px-6 py-3">Name</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($row = mysqli_fetch_assoc($sql)) : ?>
          <tr class="bg-white dark:bg-gray-800">
            <td class="px-6 py-4"><?php echo $row['id_membre']; ?></td>
            <td class="px-6 py-4"><?php echo $row['user_name']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>




    </table>




  </div>






</body>

</html>