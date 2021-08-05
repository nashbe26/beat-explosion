<?php session_start(); ?>
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
     <script src="https://use.fontawesome.com/dfd37920c4.js"></script>
     <style>
         :root{
  --text-main-color: #161A1A;
  --text-main-family: 'Lato', sans-serif;
  --text-secondary-color:#4C4C4C;
    
}
         body{
            background-image:url('img/1-st%20screen.jpg');
            width: 100%;
            height: 100vh;
         }
         #sign-text{
        
        font-family: 'Lato', sans-serif;;
        color:  #161A1A;
        font-size: 28px;
}
         .login-box{
             
             background-color: white;
             
             margin-top:3rem; 
             border-radius: 5px;
             box-shadow: 0px 0px 15px 0px #000;
             margin-bottom:2rem; 
             padding: 1rem 3rem;
         }
         #reg{
            font-family: 'Lato', sans-serif;
        color:  #161A1A;      
        font-size: 16px;
        text-align: center; 
         }
          #agree-sign{
              margin-top: 2rem;
        font-family: 'Lato', sans-serif;
        color:  #161A1A;      
        font-size: 14px;
        text-align: center;
            
         }
         #submit{
        
    background-color: #89cff0;
    
    padding: 10px 4rem;
    color: white;
    border: 1px solid #89cff0;
    font-weight: 200;
    font-size: 18px;
    border-radius: 15px;
    font-family: var(--text-main-family);
}
         .form-check-label{
             color:#161A1A;
             font-family: 'Lato', sans-serif;;
            color:  #161A1A;
            font-size: 18px;
         }
         
         
         @media only screen and (max-width:768px){
        #agree-sign{
            margin-top: 1rem;
            font-weight: bold;
             font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 10px;
            text-align: center;
            
         }
                      #sign-text{
        
        font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 18px;
}
           .login-box{
             
            
             margin-top:0;   
             
             }
             input[type="email"],input[type="password"]
             
             {
                font-size:12px;
             }
             #gender{ font-size: 12px; }
            #submit{
        
    background-color: #89cff0;
    
    padding: 5px 3rem;
    color: white;
    border: 1px solid #89cff0;
    font-weight: 200;
    font-size: 14px;
    border-radius: 15px;
    font-family: var(--text-main-family);
}
             .form-check-label{
           
             font-family: 'Lato', sans-serif;;
            color:  #161A1A;
            font-size: 12px;
         }
               #submit{
        
    background-color: #89cff0;
    
    padding: 8px 2rem;
    color: white;
    border: 1px solid #89cff0;
    font-weight: 200;
    font-size: 12px;
    border-radius: 15px;
    font-family: var(--text-main-family);
}
             #reg{
            font-family: 'Lato', sans-serif;
        color:  #161A1A;      
        font-size: 12px;
        text-align: center; 
         }
             
         
         }
     </style>
</head>  
    <body>
        <?php require'navbar.php' ?>
        <section>
            
                <div class="container">
                <section class="row justify-content-center">
                    <section class="col-12 col-md-6">
                    <div class="login-box">
                      
                <center>><p id="sign-text">Ready to sign up?</p>
                    <img src="img/baseline_account_box_black_48dp.png" alt="newuser"></center>
                <form action="success.php" method="post" id="form">
                    <div id="succes-fail"></div>
                    <div class="form-group">
                        <input class="form-control" type="email" placerholer="Your Email" name="email" id="email">  
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="password" placerholer="Your Password" name="pwd" id="pwd">    
                    </div>     
                    <div class="d-flex justify-content-between">
                        <div class="pr-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                         </div>   
                        <div class="">
                    <button class="signin-button" type="submit" id="submit">Log in</button>
                    </div>
                    </div>
                    
                    <p id="agree-sign"><a href="#">Forget your password ?</a></p>
                </form>    
                </div>
                     </section> 
                </section>    
            </div>
            
            
        </section>
     
    </body>
</html>
 <script type="application/javascript">
        $('#submit').click(function(e){
            e.preventDefault();
            var e=    $('#email').val();
             var p=   $('#pwd').val();
              
        $.ajax({
               url:'checking-login.php',
                method:'POST',
            data:{
                email:e,
                pwd : p,
            },
            success:function(result){
                var x =result;
                if (x=="false"){
                   $('#succes-fail').html('<div class="alert alert-danger"><p id="reg">Failed To login<br>Password/Email are incorrect</p></div>');  
                }else{
                    window.location.href=x
                }
                
            }
        });
        });
    </script>