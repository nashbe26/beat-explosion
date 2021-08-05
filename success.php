<?php
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    
    if(isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['pwd']) && isset ($_POST['dates']) && isset($_POST['gender'])) {
       function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $array_file=[];
        $e=$_POST['email'];
        $u=$_POST['nom'];
        $p=$_POST['pwd'];
        $d=$_POST['dates'];
        $g=$_POST['gender'];
        $s = generateRandomString();
         $req = "SELECT * FROM users WHERE  email ='$e'";
        $results=mysqli_query($connect,$req);
         $req2 = "SELECT * FROM users WHERE username='$u'";
        $results2=mysqli_query($connect,$req2);
        
        $check = true;
        if (mysqli_num_rows($results) !=0){
        
        $array_file['email'] = "email is already used";
   
        }
        if (mysqli_num_rows($results2) !=0 ){
         
        $array_file['username'] = "username is already used";
         
          
        }
       
        if(empty($array_file)){
          $req1 = "INSERT INTO users(email,username,pwd,image,birth_date,gender,token,last_time_changed) VALUES ('$e','$u','$p','NULL','$d','$g','NULL','Not Changed')";
        $results1=mysqli_query($connect,$req1);
       
        if($results) {
           
/*$to = "$e";
$to = "$e";
$subject = "Verification";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<h3 class='text text-success'>Account verification!</h3>
<p> Your registration was done successfuly <a href='account-inforamtion.php?token='<?php echo $s ?>'>

</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: $u <info@address.com>' . "\r\n";

mail($to,$subject,$message,$headers);*/

        mkdir("uploads/".$u);
              $array_file['CHECK'] = "true";
       
        }else{
              $array_file['CHECK'] = "false";
      
        }
       
        }   
        }else{
          $array_file['reg'] = "FAILED    ";
      
        } 
      
        echo json_encode($array_file) ;
}