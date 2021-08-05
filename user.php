<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
    }else{
    if(isset($_SESSION['id'])&&$_GET['id']==$_SESSION['username']){
         $id=$_SESSION['id'];
    $req2 = "SELECT * FROM users WHERE id='$id'";
    $results2=mysqli_query($connect,$req2);
    $row=mysqli_fetch_assoc($results2);
    }else{
        $id1=$_GET['id'];
        $req2 = "SELECT * FROM users WHERE username='$id1'";
        $results3=mysqli_query($connect,$req2);
    $row_1=mysqli_fetch_assoc($results3);

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
         body{
             background-color:#000;
             
         }
        
        #navbarSupported .navbar-toggler{
              background-color: #161A1A;
         }
        #navbarSupported .navbar-user ul{
             
             display: flex;
             justify-content: flex-start;
             padding: 0;
             list-style: none;
             
         }
         .navbar{
             background-color: #161A1A;
         }
         #navbarSupported .navbar-nav a {
    font-family: var(--text-main-family);
    font-size: 16px;
   color:#fff;
    
}
    .inputfile {
     width: 100%;    
	
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;

}
    .inputfile + label {
       
        border-radius: 15px;
        padding: 10px 8rem;
    font-size: 12px;
    font-weight: 700;
    color: white;
    background-color: #89cff0;
    display: inline-block;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #89b7f0;
}
         .inputfile + label {
	cursor: pointer; /* "hand" cursor */
}
#navbarSupported .navbar-nav a:hover {
    transition: 0.2s linear;
    font-family: var(--text-main-family);
    font-size: 16px;
    color:#fff;
    text-decoration: none;
    border-bottom: 4px solid #89cff0;
    
    
}
        #navbarSupported li{
            
         
             padding:15px;
             list-style: none;
             
         }
         
         #navbarSupported.navbar-user li:hover{
            
             margin:0;
             padding:15px;
             border-bottom: 4px solid 89cff0;
             
             
         }
         .panel-user .navbar-toggler{
             border: 2px solid #161A1A;
         }
         
         .panel-user{
             border-radius: 15px;
             padding-bottom: 3rem;
             background-color: #161A1A;
             height:auto;
         }
         #img-button{
             padding-right:10px;
             width: 18%;
             height: auto;
         }
         .tab-content{
             display: flex;
             justify-content: space-between;
         }
         #tabpanel{
             margin-bottom: 50px;
             margin-top: 50px;
             background: linear-gradient(to right, #c2c2c2 ,#a3bfc7,#72eef7 ,#55cfd9);
         }
         .Music-player{
             background: linear-gradient(#89cff0,#569ebd);
         }
         .input-label{
            border-radius: 15px;
             padding: 20px;
             background-color: #89cff0;
             
             color:#fff;
             font-family: var(--text-main-family);
         }
         #avatar{
             display: none;
         }
         hr{
             
             width: 90%;
         }
         .progress-bar{
             background: transparent;
             height:35px;
             width:200px;
             border:1px solid darkblue;
         }
         
         .progress-bar-fill{
             
             height: 100%;
             width: 0%;
             background: #89cff0;
             display: flex;
             align-items: center;
             transition: width 0.2s;
         }
             .progress-bar-music{
             height:10px;
             width:100%;
             background: #c2c2c2;
                   
             border-radius: 5px; 
             
         }
         .progress-bar-fill-music{
             border-radius: 5px;
             height: 100%;
             width:0%;
             background: #fff;
             display: flex;
             
             transition: width 0.2s;
         }
         .progress-bar-text-music{
             text-align: center;
             color: #fff;
         }
         .timing-sound{
             color:#fff;
             font-size: 14px;
             font-family: var(--main-text-family);
         }
         #search{
             position: relative;
         }
         
    
         .text-song{
             color:#161A1A;
             font-size: 22px;
             font-family: 'Lato', sans-serif;
         }
         #song-description{
             color:#999;
             font-size: 16px;
             font-family: 'Lato', sans-serif;
         }
          
        .panel-user .navbar-toggler-icon {
             
             
             border-radius: 5px;
             
             background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(22,26,26)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }
         .alert-dark{
             background-color: #161A1A;
             border:none;
         }
       .submit{
                 background-color: #89cff0;
                background-color: #89cff0;
                padding: 5px 2rem;
                color: white;
                border: 1px solid #89cff0;
                font-weight: 200;
                font-size: 14px;
                border-radius: 15px;
                font-family: var(--text-main-family);
             }
         #href-sec{
             margin: 15px 0 15px 10px;
                 padding: 5px 10px;
                 color:#fff;
                 font-size:14px;
                 background-color: #c2c2c2;
             border-radius: 5px;
             }
 
         @media only screen and (max-width:768px){
           .text-song{
             color:#161A1A;
             font-size: 14px;
             font-family: 'Lato', sans-serif;
         }
         #song-description{
             color:#999;
             font-size: 12px;
             font-family: 'Lato', sans-serif;
         } 
             #show-music{
                   color:#999;
             font-size: 16px;
             font-family: 'Lato', sans-serif;
             }
              .image-panel{
                 width: 85px;
                 height: 85px;
            
             }
             .icon-border{
                 background-color:  #89cff0;
             }
     
             .songs{
                 display: inline;
             }  
             #upload_image{
                 width:100%;height:auto;
             }
             tab-content img{
                 width:100%;height:auto;
             }
             .navbar-user a{
                 font-size: 12px;
             color: #161A1A;
             font-family: 'Lato', sans-serif;
             
         }
             #navbarSupported li{
            
         
             padding:5px;
             list-style: none;
             
         }
            
         
                 #navbarSupported .navbar-nav a {
                
    font-family: var(--text-main-family);
    font-size: 12px;
    color:#fff;
    
} #navbarSupported .navbar-nav a:hover {
    transition: 0.2s linear;
    font-family: var(--text-main-family);
    font-size: 12px;
    color:#fff;
    text-decoration: none;
    border-bottom: 4px solid #89cff0;
    
    
}
             .image-panel{
                 width: 85px;
                 height: 85px;
            
             }
              #show-music{
                   color:#999;
             font-size: 12px;
             font-family: 'Lato', sans-serif;
             }
             #navbarSupported{
             background-color: #161A1A;
            opacity: 0.9;
         }
             .input-label{
            border-radius: 15px ;
             padding: 10px;
             background-color: #89cff0;
             font-size: 10px;
             color:#fff;
             font-family: var(--text-main-family);
         }
             .panel-user .navbar-toggler{
             padding: 0 4px;
                 
         }
            
         } 
         .iconuser{
             padding: 15px;
             border-radius: 50%;
             border: 3px solid #fff;
         }
         .producer-info{
             padding-right:2rem;
         }
     </style>
</head>     
<body>
       
    <?php require'navbar.php' ?>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="response-text"></p>
      </div>
    
    </div>
  </div>
</div>
<div class="container">    
    
<div role="tabpanel" id="tabpanel">
    <div class="user-description py-3 pl-3 ">
        <div class=" d-flex justify-content-between">
            <div class="col-6 mb-3">
                <?php if(isset($_SESSION['id'])&&$_GET['id']==$_SESSION['username']):?>
                <img src="user_image/<?php echo $row['image'] ?>" class="avatar img-circle float-left " alt="avatar" style="width:200px;height:200px;border-radius:50%">
                 <?php else : ?>
                <img src="user_image/<?php echo $row_1['image'] ?>" class="avatar img-circle float-left " alt="avatar" style="width:200px;height:200px;border-radius:50%">
                         <?php endif; ?>
                  <div class="ml-3">
          
                <p style="margin:inherit;background-color:#000;margin-top:10px;display: inline-block; padding:10px;opacity:0.8"><span class="text">Producer: </span><?php echo $_GET['id']?></p> <br> 
                        <?php if(isset($_SESSION['id'])&&$_GET['id']==$_SESSION['username']):?>
                         <p style="margin:inherit; background-color:#000;display: inline-block;margin-top:10px;padding:10px;opacity:0.8"><span class="text">Producer: </span><?php echo $row['username']?></p> <br>
                         <p style="margin:inherit;background-color:#000;margin-top:10px;display: inline-block;padding:10px;opacity:0.8"><span class="text">Producer: </span><?php echo $row['email']?></p> 
                      <?php else : ?>
                                   <p style="margin:inherit; background-color:#000;display: inline-block;margin-top:10px;padding:10px;opacity:0.8"><span class="text">Producer: </span><?php echo $row_1['username']?></p> <br>
                         <p style="margin:inherit;background-color:#000;margin-top:10px;display: inline-block;padding:10px;opacity:0.8"><span class="text">Producer: </span><?php echo $row_1['email']?></p> 
                      <?php endif; ?>
                </div>
            </div>
            <div class="mb-3 mr-2">
            <form action='userconfig.php' method='post' enctype="multipart/form-data" >
               
           <input class="form-control" type='file' hidden="hidden"id="fileToUpload"name="fileToUpload"/><br>
                  <center></center>
                <p style="background-color:#c2c2c2;padding:5px 10px;border-radius:15px;display:inline-block"><i class="fas fa-upload" id="add-image"></i> Upload a different photo</p>
         </form> 
            </div>
        </div>  
        
      
        
        </div>
        
        </div>
    </div>
    

    <audio id="music">
                <source src=""  >
                </audio>
<div class="container">
    <section class="row" style="background-color:#161A1A">
<?php if (isset($_SESSION)&&isset($_SESSION['username'])&&$_SESSION['username']==$_GET['id']): ?>        
     
    <div class="col-12" style="border-bottom:1px solid #f4f4f2">
        
                    <div class="d-flex justify-content-end" style="color:#fff">
                    <a href="#" id="href-sec" style="background-color:#89cff0"> <i class="fas fa-chart-bar pr-1"></i> Your Insights</a>
                    <a href="#"id="href-sec"  data-toggle="modal" data-target="#exampleModal" style="  margin: 15px 0 15px 10px;padding: 5px 10px;color:#fff;font-size:14px;background-color: #c2c2c2;border-radius: 5px;"><i class="fas fa-share-square pr-1"></i> Share</a>
                    <a id="href-sec" href="userconfig.php"><i class="fas fa-user-edit pr-1"></i>Edit</a>
                         
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content col-12">
                            <div class="modal-header">
                                <h5 class="modal-title">Share</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <div class="modal-body">
                                <div class="icon-container1 d-flex">
                                    <div class="smd"> <i class=" img-thumbnail fab fa-twitter fa-2x" style="color:#4c6ef5;background-color: aliceblue"></i>
                                        <p>Twitter</p>
                                    </div>
                                    <div class="smd"> 
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="ENMzz20C"></script>
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://smart-teech.000webhostapp.com/music.php?id=<?php echo $_GET['id']?>;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="img-thumbnail fab fa-facebook fa-2x" style="color: #3b5998;background-color: #eceff5;"></i></a>
                                        <p>Facebook</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer"> <label style="font-weight: 600">Page Link <span class="message"></span></label><br />
                                <div class="row"> <input class="col-10 ur" type="url" placeholder="localhost/<?php echo $_GET['id']?>" id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;"> <button class="cpy" onclick="copied()"><i class="far fa-clone"></i></button> </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    
    <?php endif; ?>
        <div class="col-12 col-md-9 pt-3">
  
                  <?php if(isset($_SESSION['id']) && $_SESSION['username'] == 'admin'):?>
                 <div class=" mb-2">
                    <p style="color:#fff;">Change your download Link</p>
                     <br>
                     <div class="d-flex justify-content-between mb-2">
                      <select id="add-link" class="form-control" style="width:50%;">
                     </select> 
                         <button type="submit" class="submit py-2" onclick="display()" id="select-download-btn">Select Download Button</button>
                     </div>
                   <span id="get-sextion" style=" padding: 10px;font-family:'Lato', sans-serif;font-size: 16px;color:#fff"></span>
                    <input type="text" id="change-download" placeholder="Change your download Link" class="form-control"><br>
                     <button type="submit" class="submit" id="change-download-btn"><i class="fas fa-upload pr-2"></i>change download</button>
                </div>    
                <?php endif; ?>
                <?php if(isset($_SESSION['id']) && $_GET['id']==$_SESSION['username']):?>
                    <div class="d-flex justify-content-between mb-2">
                        <p style="color:#fff;">Your Songs : (100)</p>
                        <button type="submit" class="submit" data-toggle="modal" data-target="#MusicAdd"><i class="fas fa-upload pr-2"></i>Upload Music</button>
                    </div>
                <?php endif; ?>
    
                <form action="" method="post" id="form">
                    <div class="form-group" style="position:relative;">
                        <input class="form-control" placeholder="Search" id="search" nom="search" >
                         <a><i class="fas fa-search" style="     color: #fff;background-color:  #000;padding: 11px;position: absolute;top:0px;right:0px;"></i></a>
                    </div>
                
                <div id="show-music" style="margin-bottom:50px">
                    
                </div>
                    </form>
                <hr>
            </div>
        
        
        <div class="col-12 col-md-3 pt-3" style="border-left:1px solid #f4f4f2;" >
            <div class="row">
                <div class="col-4">
                    <p>Followers:<br>
                     768</p>
                </div>
                <div class="col-4">
                    <p>Following:<br>
                    600</p>
                </div>
                <div class="col-4">
                    <p>Beats:<br>
                    10</p>
                </div>
                <div class="col-12">
                    <?php echo $row['bio']; ?>
                </div>
            </div>
            
        </div> 
    </section>
</div>
<div class="modal fade" id="MusicAdd" tabindex="-1" role="dialog" aria-labelledby="MusicAdd" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title-music" id="exampleModalLongTitle" style="color:#161A1A;">Upolad Music</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <form method="post" action="uploadmusic.php" id="form2">
                                  <div class="modal-body">
                                      
                                       
                                        <div class="form-group">
                                        <input type="text" class="form-control" id="input-text" name="input-text" placeholder="Your Music Name">
                                        </div>
                                         <div class="form-group">
                                        <input type="number" class="form-control" id="input-number" name="input-number" placeholder="Your price">
                                        </div>
                                   
                                     
                                        <div class="form-group">
                                            <select class="form-control" name="music-type">
                                                <option value="HipHop">HipHop</option>
                                                <option value="Jazz">Jazz</option>
                                                <option value="RAP">RAP</option>
                                            </select>
                                        </div>
                                      <div class="progress-bar" id="progressBar">
                                        <div class="progress-bar-fill">
                                            <span class="progress-bar-text">%0</span>
                                          </div>
                                      </div>
                                        
                                        <div class="form-group">
                                            <input class="form-control" type='file' id="fileToUpload"name="fileToUpload"/>
                                
                                        </div>
                                        <span style='color:red'id="failerror"></span>    
                                         
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelbtn">Close</button>
                                      <button type="submit" class="btn btn-info" id="sendBtn">Add your music</button>
                                  </div>
                                           </form> 
                                </div>
                                  
                              </div>
                            </div>

    <div class="Music-player p-3 fixed-bottom" id="Music-section" >
      
            
                
                <div class="d-flex justify-content-between">
                    <p id="timing-sound-1">00:00</p>
                    
                    <div class="d-flex justify-content-center px-1">
                        <i id="prev"class="fas fa-backward fa-lg px-1 pt-2"></i>
                        <i  id="play"onclick='playing()'class="far fa-play-circle fa-2x px-1"></i>
                        <i  id="pause" onclick='pausing()'class="far fa-pause-circle fa-2x px-1"></i>
                        <i  id="next"class="fas fa-forward fa-lg px-1 pt-2"></i>
                        <!--<i  id="rand" class="far fas fa-random fa-lg px-1 pt-2"></i>-->
                     </div>
                    <p style="color:#fff" id="musicname"></p>
                    <div class="">
                    
                    <i id="unmuted"  class="fas fa-volume-up fa-lg px-1 pt-2"></i>
                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1"></div>
                    <p id="timing-sound-2">00:00</p>
                </div>
                <div class="progress-bar-music" id="progressBar-music">
                    <div class="progress-bar-fill-music">
                     
                    </div>
                </div>
            </div>
  
</body>
</html> 
<script type="application/javascript">
var form2 = document.getElementById('form2');
var form = document.getElementById('form');
var btn =document.getElementById('sendBtn');    
var prev =document.getElementById('prev');    
var next =document.getElementById('next');    
const progessfill = document.querySelector('#progressBar > .progress-bar-fill');
const progesstext = progessfill.querySelector('.progress-bar-text');   
var x1 =document.getElementById('musicname')    
var httpreq = new XMLHttpRequest();
var music = document.getElementById('music')
var ind=0;
var currentname =''
var musiclist = Array()
var idname=""
var id_name=0
var seeking=false
var source = document.querySelector('.source[src]')
var palying_btn = document.querySelectorAll('#palying-btn');
var full_playlist =document.getElementById('rand');
var volumeslider =document.getElementById('volumeslider');
const progessfill1 = document.querySelector('#progressBar-music > .progress-bar-fill-music');
var progessfillbar = document.querySelector('.progress-bar-music');    
const progesstext1 = document.querySelector('.progress-bar-text-music');
let download = document.querySelectorAll('.download-song');
let widthbar = document.getElementById('progressBar-music').offsetWidth;
var time1 = document.getElementById('timing-sound-1');
var time = document.getElementById('timing-sound-2'); 
var get_index = 0;
window.addEventListener('load',function(){
    $('#pause').hide(); 
    $.ajax({
        url:'fetch_data.php',
        type:'post',
        data:{id:'<?php echo $_GET['id']?>'},
         success:function(result){
                
                $('#show-music').html(result);
                var getmusic = document.querySelectorAll('.push-music');
             
                getmusic.forEach(function(music){
                
                music.setAttribute("href","music.php?id=<?php echo $_GET['id']?>&music="+music.id);
                })
                $('.playing').click(function(){
                    
                 $.ajax({
                    url:'play.php',
                    type:'post',
                     data:{
                         token:this.id
                     },
                     success:function(valid){
                     currentname=$.parseJSON(valid);  
                     $('source').attr("src","uploads/"+'<?php echo $_GET['id']?>'+'/'+currentname.Content);
                     music.load()  
                     music.play()
                     $('#pause').show();
                     $('#play').hide();     
                     idname=  currentname.Content  
                     document.getElementById('musicname').innerHTML=idname
                      id_name=musiclist.indexOf(idname); 
                } 
            })
            })
            }})})

  $('.download-song').click(function(){
                 $.ajax({
                    url:'download.php',
                    type:'post',
                     data:{
                         token:this.id
                     },
                     success:function(valid){
                         alert('success')
                     }
                 })
  })
    
    music.addEventListener ("timeupdate", function current() {
        updateTime();
    });
   
    function updateTime(){
         var current = (   music.currentTime*widthbar/music.duration)
          progessfill1.style.width = current+"px";
          var min = parseInt(music.duration/60);
          var secu = parseInt(music.duration%60);
        var minu = parseInt(music.currentTime/60);
         var sec = parseInt(music.currentTime%60);
        if(sec <10){
            sec='0'+sec
        }
        if(secu <10){
            secu='0'+sec
        }
        time1.innerHTML = minu+':'+sec;
       time.innerHTML=min+':'+secu;
    }


                       
      function playing(){
          $('#pause').show();
             $('#play').hide();
    var playPromise = music.play();
    if (playPromise !== undefined) {
        
    playPromise.then(_ => {
      
         if(music.paused){
             
             music.play();
             var isplaying =true
         
         }  
    })
    .catch(error => {
     
    });
  }
      }
    function pausing(){
    $('#play').show();
    $('#pause').hide();    
    var playPromise = music.pause();
      if (playPromise !== undefined) {
            music.load();
            
        playPromise.then(_ => {
          if(isplaying)
    {
    
        $('#play').show();
    $('#pause').hide(); 
    music.pause();
    }

    })
    .catch(error => {
     
    });
  }
}  
    
    
$('.progress-bar').hide();

window.addEventListener("load", function() {
 var xhr_1=httpreq;
var  k=id_name;
    var name=
    xhr_1.onreadystatechange= function(){
        if (xhr_1.readyState === 4 && this.status ===200){
            var All_Music = JSON.parse(this.responseText);
            if (Object.keys(All_Music).length != 0 && All_Music.constructor != Object){
            
            
            var all_music_i= Object.keys(All_Music[0]);
          
             
               
              
            var playing =document.querySelectorAll('.playing');    
        
          
            /*full_playlist.addEventListener("click", function() {
                music.addEventListener('ended', () => {
                
             
            }) }) */
             for(var j =0;j<all_music_i.length;j++){
                  var x = all_music_i[j]
                  musiclist[j]=  All_Music[0][j][2];
                 
                
                  }
            var indexx=1;
                musiclist.forEach(function(mu){

                    $('#add-link').append('<option value="j" > Button N°'+indexx+'</option>');
                                        indexx++;
                })
         
         music.addEventListener('ended',()=>{
                          k++; 
                        if(k<all_music_i.length){
                        
                        var  x ="uploads/"+'<?php echo $_GET['id']?>'+'/'+All_Music[0][k][2];
                        console.log(k)
                        var y =All_Music[0][k][2];
                        $('source').attr("src",x);
                        document.getElementById('musicname').innerHTML=y;
                        music.load();
                        music.play();
             }
         })  
         prev.addEventListener('click',function(){  
                  if (id_name>0){
                       id_name--;
                       var  x ="uploads/"+'<?php echo $_GET['id']?>'+'/'+All_Music[0][id_name][2]
                       var y =All_Music[0][id_name][2]
                 }else{
                     id_name =0;
                      var  x ="uploads/"+'<?php echo $_GET['id']?>'+'/'+All_Music[0][id_name][2]
                       var y =All_Music[0][id_name][2]  
                 }
                       
                  $('source').attr("src",x);
                  document.getElementById('musicname').innerHTML=y;
                  music.load();
                  music.play(); 
             })
            
             next.addEventListener('click',function(){  
                 if (id_name<=all_music_i.length-2){
                        id_name=id_name+1;
                    
                       var  x ="uploads/"+'<?php echo $_GET['id']?>'+'/'+All_Music[0][id_name][2]
                       var y =All_Music[0][id_name][2]    
                 }else{
                     id_name =0;
                      var  x ="uploads/"+'<?php echo $_GET['id']?>'+'/'+All_Music[0][id_name][2]
                       var y =All_Music[0][id_name][2]  
                 }
                  $('source').attr("src",x);
                  document.getElementById('musicname').innerHTML=y;
                  music.load();
                  music.play();
             })
             
             volumeslider.addEventListener("mousemove",function (){
                 if(music.muted){
                     volumeslider.value =0;
                 }else{
                     music.volume = volumeslider.value / 100;
                 }
            })
           }}}
            xhr_1.open('GET',"get_music.php?id_user=<?php echo $_GET['id'] ?>",true);
            xhr_1.send();
  })
         

        
btn.addEventListener('click',function(e){
      e.preventDefault();
    $('.progress-bar').show();
    var datas = new FormData(form2);

    
    var xhr=httpreq;
    var errors=''
    var checkerror=true;
    xhr.onreadystatechange= function(){
        if (xhr.readyState === 4 && this.status ===200){ 
            var res = JSON.parse(this.response);
            var errors_val = Object.values(res);
            var errors = Object.keys(res);
            if(errors != 'Sucess'){
             $('.modal-title').html('Uploading Failed') ;
                 $('.modal-title').attr('class','text text-danger')   
             $('#response-text').attr('class','text text-danger')   
            }else{
                $('.modal-title').html('Uploading Successed') ;
                 $('.modal-title').attr('class','text text-success') 
               $('#response-text').attr('class','text text-success')   
            }
            console.log(res)
            $('#response-text').html(errors_val);
     
    
            if (Object.keys(errors).length != 0 && errors.constructor != Object){
            return checkerror=false;
             }  
        }
    }
    xhr.open('POST','uploadmusic.php',true);
    
            xhr.upload.addEventListener("progress",e=>{
            if(checkerror == false){
                document.getElementById('failerror').innerHTML = errors
            }else{
            $('.progress-bar').show();
                 const percent = e.lengthComputable ? (e.loaded / e.total)*100 : 0;
                progessfill.style.width = percent.toFixed(2)+"%";
                progesstext.textContent = percent.toFixed(2)+"%";
                if (percent == 100){
                 
                     $('#myModal').modal('show');
                    $('.progress-bar').hide();
                    $('#cancelbtn').trigger('click');

                }    
            }})
    
    
    xhr.send(datas);
})  

         function display() {
             get_index =  document.getElementById('add-link').selectedIndex;
             $('#get-sextion').html('You have Select Button N°'+get_index+' To change')
          
         }
        $('#change-download-btn').click(function(){
        var change = $('#change-download').val();
        var btn =document.querySelectorAll('.download-song')

        for(var k=0;k<btn.length;k++){
            if(get_index == k){

                 btn[k].setAttribute('href',change); 
            }
    
}

})
    
</script>