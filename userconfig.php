<?php 
    require 'db.php' ;
    if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
    }else{
    $id=$_SESSION['id'];
    $req2 = "SELECT * FROM users WHERE id='$id'";
    $results2=mysqli_query($connect,$req2);
    $row=mysqli_fetch_assoc($results2);
    if(isset($_POST['send-image'])){
        $target_dir = "user_image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$f=$_FILES["fileToUpload"]["name"];
$i = $_SESSION['id'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $req = "UPDATE users SET image='$f' where id='$i'";
    $result = mysqli_query($connect,$req);
    if($result){
      
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}}
      
    }    
}
 ?>
<!DOCTYPE html>
<html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>
     <meta charset="utf-8">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
               <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <style>
         avatar{
             position: relative;
         }
         #add-image{
             position: absolute;
             right: 47%;
             left:54%;
             top: 140px;
             background: #f4f4f3
         }
         
         @media only screen and (max-width:768px){
    .navbar-toggler{
            padding: 0 4px;
             border: 2px solid #fff;
         } 
    .navbar-nav a {
    font-family: var(--text-main-family);
    font-size: 12px;
    color:white;
    
}
.navbar-nav a:hover {
    transition: 0.2s linear;
    font-family: var(--text-main-family);
    font-size: 12px;
    color:white;
    border-bottom: 2px solid #fff;
    
    
}
    .btn-login {
     font-size: 12px;   
    background-color: inherit;
    border: 1px solid #fff;
    padding: 4px 8px;
    border-radius: 15px;
    color:#fff;
}
.btn-login:hover {
    font-size: 12px;   
    background-color: #fff;
    border: 1px solid #fff;
    padding: 4px 8px;
    border-radius: 15px;
    color:black;
}
.btn-sign {
    font-size: 12px;   
    background-color: #fff;
    border: 1px solid #fff;
    padding: 4px 8px;
    border-radius: 15px;
    color:black;
}
.btn-sign:hover {
    font-size: 12px;   
    background-color: inherit;
    border: 1px solid #fff;
    padding: 4px 8px;
    border-radius: 15px;
    color:#fff;
    }
   
    }
.navv{
background-color: #161A1A;
         }
         .form-control{
             width: 100%;
         }
        
     </style>
     <script src="https://use.fontawesome.com/dfd37920c4.js"></script>
</head>     
<body>
   
        <div class="navv">
        <nav class="navbar navbar-expand-lg px-5">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/Webp.net-resizeimage%20(3).png" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php if (isset ($_SESSION['id'])): ?>
                       <a class="btn btn-login my-2 my-sm-0 mx-2" id="change-session"href="<?php echo $_SESSION['username'] ?> ">Profil</a>
                    <a class="btn btn-sign my-2 my-sm-0 mx-2" href="session_destroy.php">Disconnect</a>
                    <?php else : ?>
                    <a class="btn btn-login my-2 my-sm-0 mx-2" href="login.php">Log in</a>
                      <a class="btn btn-sign my-2 my-sm-0 mx-2" href="signin.php">Sign up</a>
                   
                    <?php endif; ?>
                    </form>
                  </div>
                </div>   
            </nav>
            </div>
    <section style="background-color:#000"><br>
<div class="container"  ><br><br>
    <h1>Edit Profile</h1>
  	<hr>
      <div class="col-md-9 personal-info">
        
        <div class="alert alert-info alert-dismissable" id="sucess">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i id="icon"class="fa fa-check"></i>
          Your Information have been changed successfully
        </div>
        </div>
	<div class="row pt-3">
      <!-- left column -->
      <div class="col-md-3 pl-5">
        <div class="text-center">
          <img src="user_image/<?php echo $row['image'] ?>" class="avatar img-circle" alt="avatar" style="width:200px;height:200px;border-radius:50%">
         
          <form action='userconfig.php' method='post' enctype="multipart/form-data">
           <input class="form-control" type='file' hidden="hidden"id="fileToUpload"name="fileToUpload"/><br>
                  <center><i class="fas fa-upload" id="add-image"></i></center>
          <input type="submit" id="send-image"class="btn btn-primary float-left" name='send-image' value="Upload a different photo">
            </form>  
        </div>
      </div>
      
      <div class="col-md-9   personal-info">
      
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form"  enctype="multipart/form-data">
            <div class="row">
            <div class="col-6">
                     <div class="form-group">
            <label class="col-lg-4 control-label">First name:</label>
            <div class="col-lg-12">
              <input class="form-control" id="name"type="text" value="Name will be changed in the sec fase">
            </div>
          </div>
            </div>
            <div class="col-6">
                <div class="form-group">
            <label class="col-lg-12 control-label">Last name:</label>
            <div class="col-lg-12">
              <input class="form-control" id="secname"type="text" value="Surename will be changed in the sec fase">
            </div>
          </div>
                </div>
            <div class="col-6">
                    <div class="form-group">
            <label class="col-lg-12 control-label">Email:</label>
            <div class="col-lg-12">
              <input class="form-control" id="email"type="text" value="<?php echo $row['email']; ?>">
            </div>
          </div>
                </div>
            <div class="col-6">
                          <div class="form-group">
            <label class="col-md-4 control-label">Username:</label>
            <div class="col-md-12">
              <input class="form-control" id="username"type="text" value="<?php echo $row['username']; ?>">
            </div>
          </div>
                </div>
            <div class="col-6">
                   <div class="form-group">
            <label class="col-md-12 control-label">Password:</label>
            <div class="col-md-12">
              <input class="form-control" id="pwd"type="password" value="<?php echo $row['pwd']; ?>">
            </div>
          </div>
                </div>
            <div class="col-6">
                  <div class="form-group">
            <label class="col-md-12 control-label">Confirm password:</label>
            <div class="col-md-12">
              <input class="form-control" id="confirm-pwd"type="password" value="<?php echo $row['pwd']; ?>">
            </div>
          </div>
                </div>
                <div class="col-12 ">
                <div class="form-group px-3">
                <label for="exampleFormControlTextarea1">Bio:</label>
                    <textarea class="form-control" id="bio" rows="3" name="bio"></textarea>
                    </div>
                </div>
            </div>
     
          
        
      
      

       
        
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" id="send-btn"class="btn btn-primary"  value="Save Changes">
         
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div><br>
</section>
<?php require 'footer.php' ?>
    </body>
    <script type="application/javascript">
          
    $('#sucess').hide();    
    $('#send-btn').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'updating-data.php',
             method:'POST',
            data:{
                name:$('#name').val(),
                secname:$('#secname').val(),
                email:$('#email').val(),
                username:$('#username').val(),
                pwd:$('#pwd').val(),
                bio:$('#bio').val()
            },
           
            success:function(result){
                var file = JSON.parse(result);
                var verif = Object.keys(file);
                if(file[verif] == 'true'){
                   
                $('#change-session').attr('href',$('#username').val())
                    
                $('#sucess').fadeIn();
                }   
            }
        })   
    })
        var cust=document.getElementById('add-image');
        var real=document.getElementById('fileToUpload');
        cust.addEventListener('click',function(){
            real.click()
        })
        
        
    </script>
</html>