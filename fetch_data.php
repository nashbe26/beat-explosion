<?php

 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
     function isAjax(){
            return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']);
        }
    
    $username=$_POST['id'];
    $req1="SELECT * FROM users WHERE username = '$username'";
    $resluts1 = mysqli_query($connect,$req1);
    $row1 =mysqli_fetch_assoc($resluts1);
    $id = $row1['id'];
    if(isset($id)){
    $req="SELECT * FROM music_update WHERE userid = '$id'";
    $resluts = mysqli_query($connect,$req);
    $num = mysqli_num_rows($resluts);
          while($row =mysqli_fetch_assoc($resluts)){
                $path = $row['post_m'];     
                ?>
                <hr> 
                <div class="d-flex justify-content-between" style="font-size:14px;marg">
                <div class="playing"  id="<?php echo $row["id"] ?>" >
                    <div class="music-section d-flex" >
                        <img src="img/Webp.net-resizeimage%20(5).png" style="height:72px"alt="" class="float:right;">
                        <div class="track-info pt-2 ml-2">
                        <a style="color:#fff" href="" id="<?php echo $row["id"] ?>" class="push-music">Music name : <?php echo $row["post_m"] ?><br>Music Type : <?php echo $row["type_m"] ?></a>
                        <p style="color:#fff">Price : <?php echo $row["price"] ?>$</p>
                      
                        </div>
                    </div>
                </div> 
                <div class="icon-border pt-4">
                    <div class=" d-inline " >   
                    <a  href="payement.php?id=<?php echo $row["id"] ?>" style="color:#fff;background-color:#89cff0;padding:8px;border-radius:5px;">Buy Now <span><i class="fas fa-hand-holding-usd fa-lg" ></i></span></a>
                    <a class="download-song" href='' target="_blank" id="<?php echo $row["id"] ?>" style="color:#fff;background-color:#89cff0;padding:8px;border-radius:5px;" ><i class="fas fa-download fa-lg" ></i></a>
                  
                    </div> 
                    </div>   
                </div>    
               <?php
            }
        }


    }

?>
<script>

</script>
              
              
              
              
              
  