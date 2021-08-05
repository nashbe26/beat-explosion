<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
$id= $_POST['token'];

    $req="SELECT * FROM music_update WHERE id ='$id'";
    $resluts = mysqli_query($connect,$req);

           while($row = mysqli_fetch_array($resluts,MYSQLI_ASSOC)) {
               $Response = array('Content' => $row['post_m']);
         echo json_encode($Response);
            
            }
    
            }
   

?>