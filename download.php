<?php

 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
   $id=$_SESSION['id'];
    
    $req="SELECT * FROM music_update WHERE userid = '$id'";
    $resluts = mysqli_query($connect,$req);
    $num = mysqli_num_rows($resluts){
        while($row= mysqli_fetch_array($resluts)){
            $path=$row['post_m']
                header('content-Dispostion:attachment;filename=uploads/'.$path.'');
                header('content-type:application/octent-stream');
                header('content-length='.filesize($path));
                readfile($path);
        }
    }
}