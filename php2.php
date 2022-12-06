<?php
$nama = "Yoshe";

// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";

//Perintah perulangan For
//$no = 15;
// for ($i=0; $i<$no; $i++){
//     $n = $i + 1;
//     echo $n, " ".$nama."<br/>";
// }

//perintah perulangan while
// $no = 15;
// $i = 0;

// while($i < $no){
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// }

//perintah perulangan do-while
// $no = 15;
// $i = 0;
// do{
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// } 
// while($i < $no)

//Perulangan - Pengeleompokan Array
// $data = array('Violet', 'Bougenville', 'Iris', 'Rose', 'Lily', 'Edelweis');
// echo $data[2];

//menggunakan foreach
// foreach($data as $value){
//     echo $value."<br/>";
// }

//menggunakan while
// $i = 0;
// while ($i < count($data)){
//     echo $data[$i]."<br/>";
//     $i++;
// }

//Percabangan
// if($nama== "Isa"){
//     echo $nama." adalah orang Banyuwangi";
// } else if($nama == "Gibran") {
//     echo $nama. " berasal dari Jember";
// } else{
//     echo $nama." darimana ya?";
// }

// switch($nama){
//     case "Isa";
//         $pesan = $nama." adalah orang Banyuwangi";
//     break;
//     case "GIbran";
//         $pesan = $nama." adalah orang Jember";
//     break;
//     default;
//         $pesan = $nama." darimana ya?";
// }

// echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
<h1>Input Data</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty ($_POST['submit'])) {

            switch ($_POST['nama']) {
                case 'Yoshe':
                    $pesan = $_POST['nama'].  " adalah orang Banyuwangi";
                    break;
                case 'Gibran':
                    $pesan = $_POST['nama'].  " berasal dari Jember";
                    break;
                default:
                    $pesan = $_POST['nama']. " darimana ya?";
            }
            for ($i=0; $i < $_POST['no']; $i++) {
                echo $pesan. "<br/>";
            }
        } else {
            echo "Anda belum input data";
        }
    ?>
</body>

</html>