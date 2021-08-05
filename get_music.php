<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{

    $r= array();
    $ids=$_GET['id_user'];
  
    $req1="SELECT * FROM users WHERE username = '$ids'";
    $resluts1 = mysqli_query($connect,$req1);
    $rows = mysqli_fetch_assoc($resluts1);
     
    $user = $rows['id'];
    if (mysqli_num_rows($resluts1) != 0){
          $array_file=(object)[];
    $req="SELECT * FROM music_update WHERE userid = '$user'";
    $resluts = mysqli_query($connect,$req);

           while($rows = mysqli_fetch_all($resluts)) {
                $r[] = $rows;
         
            }
        echo json_encode($r);
    }
    }
  
   

?>