<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $ar=$_POST['artist'];
    $req='SELECT * FROM users where username='$a'';
    $results=mysqli_query($connect,$mysqli);
    while($row=mysqli_fetch_assoc($results)){
        echo '<option value='.$row['username'].'>'..$row['username'].'</option>'
    }esle {
        echo  '<option value="">No data</option>'
    }