<?php
$server_name = 'localhost';
$server_user = 'root';
$server_psw = '';
$bdd = 'library';
$conn = mysqli_connect($server_name, $server_user, $server_psw, $bdd);
if (!$conn) {
    echo ("DB not found");
}

// Sélection de tous les livres dans la base de données
$query = "SELECT title, type_book, book_cover FROM book";
$result = mysqli_query($conn, $query);

?>


<body class="font-semibold">

    <div class="p-6 text-5xl font-extrabold text-center">
        Nos
        <span class="font-semibold text-cyan-300 cursor-pointer duration-150 hover:text-yellow-500">Livres</span>
        , à votre
        <span class="text-cyan-300 cursor-pointer duration-150 hover:text-yellow-500">
            disposition
        </span>
        !
    </div>

    <div class="max-w-screen-lg mx-auto">

        <div class=" pl-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 mb-8 gap-10">

            <div class="p-1 bg-cyan-800  cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://pictures.abebooks.com/inventory/md/md30242767050.jpg
                     " alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Biologie</strong>
                    <p class="text-white items-center text-center">
                        Livre de biologie de classe 3ème
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShAJw8DogzgGanr1h6eKiSYG3A94sY1eLyBOnRioUuc9n_d0NEM-fwnm7VxbEc1q4pGbo&usqp=CAU
                          " alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Histo-Géo</strong>
                    <p class="text-white items-center text-center">
                        Livre de Histo-Géo de classe 1ère
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://pictures.abebooks.com/inventory/md/md31478362069.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Science de la Vie et de la Terre</strong>
                    <p class="text-white items-center text-center">
                        Livre de SVT de classe 5ème
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://m.media-amazon.com/images/I/918Ai9a893L._AC_UF1000,1000_QL80_.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Jeunesse</strong>
                    <p class="text-white items-center text-center">
                        One Piece
                    </p>
                </div>
            </div>



            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://cdn1.booknode.com/book_cover/940/miracle_morning-939649-264-432.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Bien-être</strong>
                    <p class="text-white items-center text-center">
                        Miracle Morning
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://www.planetebd.com/dynamicImages/album/cover/large/48/46/album-cover-large-48462.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Jeunesse</strong>
                    <p class="text-white items-center text-center">
                        Naruto
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://m.media-amazon.com/images/I/61V3Kcz1cNL._AC_UF1000,1000_QL80_.jpg" alt="Biologie Cover" class="h-52 w-full object-cover">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Roman</strong>
                    <p class="text-white items-center text-center">
                        Même étoile
                    </p>
                </div>
            </div>

            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://cdn1.booknode.com/book_cover/1319/mod11/after_saison_2_after_we_collided-1319117-264-432.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Romant</strong>
                    <p class="text-white items-center text-center">
                        After
                    </p>
                </div>
            </div>
            
            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://cdn1.booknode.com/book_cover/1410/power_les_48_lois_du_pouvoir-1410491-264-432.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Magazine</strong>
                    <p class="text-white items-center text-center">
                        48 Lois du pouvoir
                    </p>
                </div>
            </div>
            
            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://m.media-amazon.com/images/I/51TTLKbMF1L.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Magazine</strong>
                    <p class="text-white items-center text-center">
                        Plus Malin que le diable
                    </p>
                </div>
            </div>
            
            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://m.media-amazon.com/images/I/41A1ijLfrdL._AC_SY580_.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Education</strong>
                    <p class="text-white items-center text-center">
                        Maths
                    </p>
                </div>
            </div>
            
            <div class=" p-1 bg-cyan-800 cursor-pointer duration-150 hover:scale-110 rounded-md">
                <img src="https://servimg.eyrolles.com/static/media/8728/9782340068728_internet_h1400.jpg" alt="Biologie Cover" class="h-52 w-full object-cover rounded-md ">
                <div class="text-center my-1">
                    <strong class="text-white text-2xl underline">Education</strong>
                    <p class="text-white items-center text-center">
                        Physique-Chimie
                    </p>
                </div>
            </div>


            <?php
            // Votre code PHP pour se connecter à la base de données et récupérer les données ici

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="p-1 bg-blue-500 cursor-pointer duration-150 hover:scale-110 rounded-md">
                    <?php
                    if (isset($row['book_cover'])) {
                    ?>
                        <img src="<?php echo $row['book_cover']; ?> " alt="Biologie Cover" class="h-52 w-full object-cover rounded-md">
                    <?php
                    } else {
                    ?>
                        <div class="h-52 w-full bg-gray-300 rounded-md flex items-center justify-center">
                            <span class="text-black text-2xl">Pas de couverture disponible</span>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="text-center my-1">
                        <strong class="text-black text-2xl underline"><?php echo $row['type_book']; ?></strong>
                        <p class="text-black items-center text-center">
                            <?php echo $row['title']; ?>
                        </p>


                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>

</body>