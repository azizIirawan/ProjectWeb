<?php
if(isset($_POST['bilangan1']) && isset ($_POST['bilangan2'])){
    $bil1 = $_POST['bilangan1'];
    $bil2 = $_POST['bilangan2'];
    echo "hasil perkalian ".$bil1."x".$bil2."=".($bil1*$bil2);
}

// handling data
if(isset ($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    echo "hasil pencarian dengan kata kunci : ".$keyword;
}

// handling multiple input data
if(isset($_POST['nama']) && isset($_POST['dari'])){
    echo "nama : " . $_POST['nama'] . "<br/>";
    $dari = $_POST['dari'];
    echo "kenal mdp dari :";
    // var_dump($dari);
    // menggunakan foreach untuk menampilkan data array
foreach ($dari as $value) {
    echo "<li>".$value."</li>";
}
    }
?>