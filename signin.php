
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
        
        font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 28px;
}
         .login-box{
             
             background-color: white;
             text-align: center;
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
             font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 14px;
            
         }
         #submit{
        
    background-color: #89cff0;
    
    padding: 10px 7rem;
    color: white;
    border: 1px solid #89cff0;
    font-weight: 200;
    font-size: 18px;
    border-radius: 15px;
    font-family: var(--text-main-family);
}
      
         @media only screen and (max-width:768px){
             
               #agree-sign{
             font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 10px;
            
         }
                      #sign-text{
        
        font-family: 'Lato', sans-serif;
        color:  #161A1A;
        font-size: 18px;
}
           .login-box{
             
            
             margin-top:0;   
             
             }
             input[type="email"],input[type="text"]
             ,input[type="password"],input[type="date"]
             ,input[type="text"]
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
             #reg{
            font-family: 'Lato', sans-serif;
        color:  #161A1A;      
        font-size: 12px;
        text-align: center; 
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
                      
                <p id="sign-text">Ready to sign up?</p>
                <img src="img/baseline_account_box_black_48dp.png" alt="newuser">
                <form action="success.php" method="post" id="form">
                    
                    <div id="succes-fail"></div>
                   
                    <div class="form-group">
                        <input  class="form-control has-error" type="email" placeholder="Your Email" name="email" id="email">  
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="text"placeholder="Your Username" name="username" id="username">  
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Your Password" name="pwd" id="pwd">    
                    </div>                
                    
                    
                    <div class="form-group">
                        <input class="form-control" type="date" name="meeting" placeholder="Your birth day" id="date" max="2005-06-07">
                    </div> 
                    <div class="form-group">
                    <select name="gender" class="form-control" id="gender">
                          <option value="">Gender</option>
                          <option value="Male">Male</option>
                          <option value="Famale">Famale</option>
                    </select>   
                    </div>    
                    <p id="agree-sign">By clicking on "Sign up", you accept the <br>
                        <span style="color:#35EDFB">Terms and Conditions of Use.</span></p>
                    
                    <button class="signin-button mb-1" type="submit" id="submit">SIGN UP</button>
                    <p id="agree-sign">Already have an account? Log in</p>
                </form>    
                </div>
                     </section> 
                </section>    
            </div>
            
            
        </section>
        
    </body>
</html>
    <script type="application/javascript">
        window.onload = function() {
        $('#submit').click(function(e){
            e.preventDefault();
            var e=    $('#email').val();
             var u=   $('#username').val();
             var p=   $('#pwd').val();
              var d=  $('#date').val();
              var g=  $('#gender').val()
              var form=document.getElementById('form');
            var errores = form.querySelectorAll('.has-error');
            errores.forEach(function(errore){
                errore.classList.remove('has-error');
               var span= errore.querySelector('.text-danger');
                if(span){
                    span.parentNode.removeChild(span);
                }
            })
              
        $.ajax({
               url:'success.php',
                method:'POST',
            data:{
                email:e,
                nom : u,
                pwd : p,
                dates : d,
                gender : g,
            },
            success:function(result){
                   var file = JSON.parse(result);
                   var errors =Object.keys(file);
                   var errorv =Object.values(file);
                   errors.forEach(function(error){
                    var key = error;
                    
                    var keys = file[key];
                  
                    
                    var input =document.querySelector('[name='+key+']');
                    var span =document.createElement('span')
                 if (errorv == 'true'){
                       $('#succes-fail').attr('class','alert alert-success');
                        $('#succes-fail').html('<p class="text text-success"> Registration successed');
                    }else{
                        $('#succes-fail').attr('class','alert alert-danger');
                         $('#succes-fail').html('<p class="text text-danger"> Registration failed');
                    console.log(keys)
                    span.className='text-danger';
                       span.style.float='left';
                    span.innerHTML = keys;
                    input.parentNode.classList.add('has-error')
                    input.parentNode.appendChild(span)
                    }
                })
            }
        });
        });}
    </script>
 
    