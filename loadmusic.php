<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $id_music = $_GET['music'];
    $id_user = $_GET['user'];
    $req="SELECT * FROM music_update WHERE id='$id_music'";
    $res = mysqli_query($connect,$req);
    $row=mysqli_fetch_assoc($res);
    $req1="SELECT count(*) as total FROM music_update";
    $result=mysqli_query($connect,$req1);
    $roweee=mysqli_fetch_assoc($result);
    $int =$roweee['total'];
    
    $req2="SELECT * FROM music_update  ORDER BY RAND()LIMIT 4;";
    $res2 = mysqli_query($connect,$req2);
    $rows = mysqli_fetch_all($res2,MYSQLI_ASSOC);
    if(!$res2){
        echo 'erreur'.mysqli_error($connect);
        echo $res1;
    }else{
    
    }
    
}

?>