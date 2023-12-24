<?php 

$server_name='localhost';
$server_user='root';
$server_psw='';
$bdd='library';
$conn= mysqli_connect($server_name,$server_user,$server_psw,$bdd);
 if(!$conn){
   echo("DB not found");
 }

 if(isset($_POST['add_book'])){
    $book_name = $_POST['book_name'];
    $book_type = $_POST['book_type'];
    $book_img =$_POST['book_cover'];

    $sql = "INSERT INTO book (title, type_book,book_cover) VALUES ('$book_name','$book_type','$book_img')";

    if (mysqli_query($conn, $sql)) {
        echo "LIVRE AJOUTER.";
    } else {
        echo "ERREUR : " . mysqli_error($conn);
    }
}

?>