<body>
  
  <nav class="sticky top-0 font-semibold">
    <!-- desktop menu -->
    <div class="bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="flex justify-between">
          <!-- Menu -->
          <div class="flex items-center space-x-4">
            <!-- Logo -->
            <div class="bg-white px-2 py-5 flex items-center">
              <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="flex items-center space-x-2 hover:text-cyan-500">
                <img src="../src/assets/Booking.png" alt="">
                <span class="text-3xl text-yellow-500 font-extrabold duration-150 hover:text-cyan-500">BOOKing</span>
              </a>
            </div>
            <!-- menu -->
            <div class="hidden md:flex items-center space-x-2 justify-center text-center">
              <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="px-2 text-semibold hover:bg-yellow
              -500 hover:rounded-full hover:py-2 hover:px-2 duration-200 hover:text-white hover:bg-yellow-500">Home</a>
              <a href="http://localhost/PROJET%20FINAL/view/Forum.php" class="px-2 text-semibold hover:bg-yellow-500 duration-200 hover:rounded-full hover:py-2 
              hover:px-2 hover:text-white">Publier </a>
              <a href="http://localhost/PROJET%20FINAL/view/message.php" class="px-2 text-semibold hover:bg-yellow-500 duration-200 hover:rounded-full hover:py-2 
              hover:px-2 hover:text-white">Forum</a>
              <a href="http://localhost/PROJET%20FINAL/view/penalite.php" class="px-2 text-semibold hover:bg-yellow-500 duration-200 hover:rounded-full hover:py-2 
              hover:px-2 hover:text-white">Notification</a>
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
      <a href="http://localhost/PROJET%20FINAL/view/Public.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400 hover:rounded-md ">Home</a>
      <a href="http://localhost/PROJET%20FINAL/view/Forum.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400 hover:rounded-md ">Publier</a>
      <a href="http://localhost/PROJET%20FINAL/view/message.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400 hover:rounded-md ">Forum</a>
      <a href="http://localhost/PROJET%20FINAL/view/penalite.php" class="block py-2 px-4 hover:bg-white hover:text-yellow-400 hover:rounded-md ">Notification</a>
    </div>
  </nav>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script setup>
    import {
      ref
    } from 'vue';
    const ShowMobileMenu = ref(true);
  </script>


</body>