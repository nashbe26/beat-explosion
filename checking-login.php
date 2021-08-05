<?php
//$connect = mysqli_connect('localhost','id13840503_moi','Jq*CW8Mb/>fZf85v','id13840503_company');
$connect = mysqli_connect('localhost','root','','company');

if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $array_file=(object)[];
    if(isset($_POST['email']) && isset($_POST['pwd'])) {
        $e =$_POST['email'];
        $p=$_POST['pwd'];
        $req = "SELECT * FROM users WHERE email='$e' and pwd='$p'";
        $results = mysqli_query($connect,$req);
        $row = mysqli_fetch_assoc($results);
        $output='';
        if (mysqli_num_rows($results)==0){
            echo $output .="false";
           
        }else{
            
            session_start();
            $_SESSION['id'] =$row['id'];
            $_SESSION['username'] =$row['username'];
            $_SESSION['nom'] =$e;
            echo $_SESSION['username'] ;    
   
                   
        
    }
       
    }
    
}
