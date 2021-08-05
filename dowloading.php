<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    if (isset($_GET['music_id'])){
$n = $_GET['music_id'];
echo $n ;
$req1="SELECT * FROM music_update WHERE id = '$n '";
$resluts1 = mysqli_query($connect,$req1);
$rows = mysqli_fetch_assoc($resluts1);
    var_dump ($rows['downloaded_number']);
$up = $rows['downloaded_number']++;
$array_file['done'] = "change have been made";
$req = "UPDATE music SET downloaded_number='$up' WHERE id='$n'";
$resluts = mysqli_query($connect,$req);
}else{
        echo 'error';
    }
}
?>