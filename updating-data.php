<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $i = $_SESSION['id'];
$req1 = "SELECT *FROM users WHERE id='$i'";
    $result1 = mysqli_query($connect,$req1);
    $row = mysqli_fetch_assoc($result1);
$b =$_POST['bio'];
$n = $_POST['name'];
$s = $_POST['secname'];
$u = $_POST['username'];
$e = $_POST['email'];
$p = $_POST['pwd'];


$today = date("F j, Y, g:i a");  
$array_file=[];
$array_file['done'] = "change have been made";
$req = "UPDATE users SET email='$e',name='$n',secname='$s', username='$u',pwd='$p',bio='$b',last_time_changed='$today' WHERE id='$i'";
    $result = mysqli_query($connect,$req);
    if($result){
           
        $oldname  =$_SESSION['username'];
        unset ($_SESSION['username']);
        $_SESSION['username']=$u;
        
        
        rename('uploads/'.$oldname,'uploads/'.$u);
        $array_file['done']='true';
       
    }else{
        $array_file['done']='false';
    }
    
    echo json_encode($array_file);
}
?>