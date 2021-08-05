<?php 
 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
    $id_music = $_GET['music'];
    $req="SELECT * FROM music_update WHERE id='$id_music'";
    $res = mysqli_query($connect,$req);
    $row=mysqli_fetch_assoc($res);
    $req1="SELECT count(*) as total FROM music_update";
    $result=mysqli_query($connect,$req1);
    $roweee=mysqli_fetch_assoc($result);
    $int =$roweee['total'];
    
    $req2="SELECT * FROM music_update  ORDER BY RAND()LIMIT 4;";
    $res2 = mysqli_query($connect,$req2);
    $rows = mysqli_fetch_all($res2,MYSQLI_ASSOC);
    if(!$res2){
        echo 'erreur'.mysqli_error($connect);
        echo $res1;
    }else{
    
    }
    
}

?>
<!DOCTYPE html>
<html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <meta charset="utf-8">

     <meta property="og:url"           content="https://smart-teech.000webhostapp.com/music.php?id=<?php echo $_GET['id']?>?&music=<?php echo $_GET['music']?>" />
     <meta property="og:type"          content="website" />
     <meta property="og:title"         content="<?php echo $row['post_m']?>" />
     <meta property="og:description"   content="Listen To Music On BeatExplosion" />
     <!--<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
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
    font-size: 18px;
   color:#fff;
    
}
#navbarSupported .navbar-nav a:hover {
    transition: 0.2s linear;
    font-family: var(--text-main-family);
    font-size: 18px;
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
             background-color: #161A1A;
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


.mt-100 {
    margin-top: 100px
}

.modal {
    
    opacity: 0.2;
         }

.modal-title {
    font-weight: 900
}

.modal-content {
    border-radius: 13px
}

.modal-body {
    color: #3b3b3b
}

.img-thumbnail {
    border-radius: 33px;
    width: 61px;
    height: 61px
}

.fab:before {
    position: relative;
    top: 13px
}

.smd {
    width: 200px;
    font-size: small;
    text-align: center
}

.modal-footer {
    display: block
}

.ur {
    border: none;
    background-color: #e6e2e2;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px
}

.cpy {
    border: none;
    background-color: #e6e2e2;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    cursor: pointer
}

button.focus,
button:focus {
    outline: 0;
    box-shadow: none !important
}

.ur.focus,
.ur:focus {
    outline: 0;
    box-shadow: none !important
}

.message {
    font-size: 11px;
    color: #ee5535
}
     </style>
</head>     
<body>
       
    <?php require'navbar.php' ?>
<div class="container">    
<div role="tabpanel" id="tabpanel" class="" >
    <div class="user-description py-3 ">
        <div class="row d-flex justify-content-around">
            <div class="col-6 col-sm-6 col-md-6">
                 <div class="d-flex justify-content-around">
                        <img src='img/user%20(4).png' alt='' style='width:64px;hegiht:auto;float:left;'>
                    <div class="music-section" >
                        
                   <div class="music-information pt-1">    
                  <a style="color:#fff" href="" id="<?php echo $_GET["music"] ?>" class="push-music"><?php echo $row["post_m"] ?></a>
                  <p style="color:#c2c2c2"><?php echo $row["type_m"] ?></p>        
                </div> 
                   
                </div>
                
                <div class="icon-border mt-3">
                    <a class="download-song" href="https://www.google.com/?hl=fr" target='_blank'><i class="fas fa-download" style="color:#fff;background-color:#89cff0;padding:8px;border-radius:5px;"></i></a>    
                </div>    
                </div>
                  </div> 
                <div class="col-3 col-sm-3 col-md-3  mt-4">
                    <div class="d-flex justify-content-around">
                        <p> <i class="fas fa-play  pr-2"></i>132</p>
                           <a type="button"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-share pr-2"></i> </a> 
                        <p><i class="fas fa-download pr-2" > </i>20<p>     
                   </div>
           
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
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://smart-teech.000webhostapp.com/music.php?id=<?php echo $_GET['id']?>?&music=<?php echo $_GET['music']?>;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="img-thumbnail fab fa-facebook fa-2x" style="color: #3b5998;background-color: #eceff5;"></i></a>
                                        <p>Facebook</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer"> <label style="font-weight: 600">Page Link <span class="message"></span></label><br />
                                <div class="row"> <input class="col-10 ur" type="url" placeholder="https://smart-teech.000webhostapp.com/music.php?id=<?php echo $_GET['id']?>?&music=<?php echo $_GET['music']?>" id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;"> <button class="cpy" onclick="copied()"><i class="far fa-clone"></i></button> </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
            <div class="col-3 col-sm-3 col-md-2 mr-5 my-auto">
                                <div class="playing"  id="<?php echo $_GET["music"] ?>" >
                <i  class="far fa-play-circle fa-2x px-1"></i>
                </div>   
            </div>
        </div>    
        </div>
        </div>
    </div>
    

    <audio id="music">
                <source src=""  >
                </audio>
<div class="container">
    <section class="row justify-content-center">
    
        <div class="col-12 col-md-12">
            <div class="alert alert-dark ">
             
              
                <form action="" method="post" id="form">
                    <div class="form-group" style="position:relative">
                        <input class="form-control" placeholder="Search" id="search" nom="search" >
                         <a><i class="fas fa-search" style="     color: #fff;background-color:  #000;padding: 11px;position: absolute;top:0px;right:0px;"></i></a>
                    </div>
                
                <div id="show-music">
                    
                </div>
                    </form>
                <hr>
            </div>
        </div>
        
         
    </section>
</div>


    <div class="Music-player p-3 fixed-bottom" id="Music-section">
      
            
                
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


         
 function copied() {

$(".message").text("link copied");
}      
        



  
</script>