          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<style>
    .ul-main .nav-link{
        font-size: 16px;
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
   #container-result{
       border-radius: 15px;
       border-top: 1px solid #f4f4f2;
       z-index: 2;
         border-radius: 5px;
         position: absolute;
         top:45px;
         left: 37.5%;
    }   
   #container-result ul{
       
        color:var(--text-main-color);
        background: #fff; 
        list-style: none;
    }
</style>


<nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ul-main">
                    <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                     <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Stream</a>
                  </li>
                     <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Library</a>
                  </li>
                     <li class="nav-item px-2">
                    <div class="input-group " style="width:380px;">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" id="seach-artist" list="seach-artists">
                        <datalist id="seach-artists">
                         
              
                        </datalist>
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                      </div>
                    </div>
                    
                  </li>
                  
                     <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Try Pro</a>
                  </li>
                      <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Upload</a>
                  </li>
                       <li class="nav-item px-2">
                    <a class="nav-link" href="index.php"><i class="fas fa-user"></i> user</a>
                  </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="index.php"><i class="fas fa-bell"></i></a>
                  </li>
                    <li class="nav-item px-2">
                    <a class="nav-link" href="index.php"><i class="fas fa-envelope"></i></a>
                  </li>
                        <li class="nav-item px-2">
                    <a class="nav-link" href="index.php"><i class="fas fa-ellipsis-h"></i></a>
                  </li>
                   
                </ul>
             
                  </div>
                </div>
          
            </nav>
  
<script>

  
   $.ajax({
       url:'user-search.php',
       method:'post',
       data:{
           artist:$('#seach-artist').val()
       },
       success:function(success){
           $('#seach-artist').html(success);
       }
   })
             
                
</script>