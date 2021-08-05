<?php

 require_once 'db.php' ;

if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $id=$_SESSION['id'];
$array_file=(object)[];
 $uploadOk = 1;
if (!isset($_FILES['fileToUpload'])){
    $array_file=[
      'formerror' => "Please select a file",
  ];
}else{
 
  

$target_dir = "uploads/".$_SESSION['username'].'/';
    
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if($imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "wma"
&& $imageFileType != "avi" ) {
   $array_file=[
      'formerror' => "Sorry, only mp3, mp4 & wma files are allowed."
  ];
  $uploadOk = 0;
}

if ($uploadOk == 0) {
$array_file=[
      'formerror' => "Sorry, only mp3, mp4 & wma files are allowed."
  ];
} else {
      $req3="SELECT * FROM music_update WHERE userid='$id'";
             $results3=mysqli_query($connect,$req3);
      if (mysqli_num_rows($results3)<10){
          
      
    $music =$_FILES["fileToUpload"]["name"];   
    $req1="SELECT * FROM music_update WHERE post_m = '$music' and userid='$id'";
             $results1=mysqli_query($connect,$req1);
    
    if (mysqli_num_rows($results1)==0){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         if (isset($_POST['input-text']) && isset($_POST['music-type'])){
    $nom =$_POST['input-text'];
             $type = $_POST['music-type'];    
             $price = $_POST['input-number'];    

             
             
     $req ="INSERT INTO music_update (nom_m,post_m,type_m,price,downloaded_number,userid) VALUES ('$nom','$music','$type','$price','0','$id')";    
     $results = mysqli_query($connect,$req);
   
      if(!$results){
                   echo mysqli_error($connect);
          
                 $array_file=[
      'formerror' => "Sorry, Your file is not uploaded, try again."
  ];
      }else{

        $array_file=[
      'Sucess' => "The file ". basename( $_FILES["fileToUpload"]["name"]).  " has been uploaded."
   ];
      }

} 
    } else {
       $array_file=[
      'formerror' => "Sorry, there was an error uploading your file."
  ];
  
  }}else{
          $array_file=[
            'formerror' => "Sorry, file with the same exist"  
  ];
      
    }
    }
      else{
        $array_file=[
            'formerror' => "You have reached your Limits" 
        ];
        
    }
        
        
  
   
 
}
   
}
     
    echo json_encode($array_file) ;
}
?>