<?php
    session_start();
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
     <script src="https://use.fontawesome.com/dfd37920c4.js"></script>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>     
<body>
    <header>
        <div class="head">
            <?php require'navbar.php' ?>
        </div>
        <div class="intro-description">
            <p class="first-text">Open the world of music.<br> 
                It’s all here</p><br>
            <div class="d-inline">
                <a href="#" id="button-first-1">MUSIC BOX FREE</a>
                <a href="#" id="button-first-2">CREATING NEW ACCOUNT</a>
            </div><br><br>
            <p id="secondary-text">Downloading <span style="color:#35EDFB">free music</span> on our web site</p>
        </div> 
        </header>
        <section id="first-section">
            <div class="container">
                <div class="row justify-content-center">
                   
                    <div class=" col-12 col-md-8 " id="flow-section">
                        <div class="flow-description text-center">
                            <div class="image">
                                
                            <p class="first-text"><span> <img src="img/audio-8x.png" class="flow-image"></span> OUR FLOW </p>
                            </div>
                           
                             </div>
                            <P class="sec-text text-center">
                                Listen to a personalized mix of tracks based on your 
                                listening history, or create your own mix of genres, artists 
                                and playlists - letting you enjoy more of the music you love.
                            </P>
                       
                    </div>
                </div>
            </div>
        </section>
       <section id="last-section">
            <div class="chose-description">
                <p class="first-text">Why Website name is Better ?</p>
      
            <div class="container">
                <div class="row mt-6">
                <div class="col-12 col-md-3">
                    <img src="img/audio-spectrum-4x.png">
                    <p id="why-text">High quality audio.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img src="img/data-transfer-download-4x.png">
                    <p id="why-text">Downloading original music.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img src="img/media-step-forward-4x.png">
                    <p id="why-text">Unlimited skips.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img src="img/audio-spectrum-4x.png">
                    <p id="why-text">High quality audio.</p>
                </div>
            </div>
            </div>
            </div>    
        </section>
    <section class="pricing py-5 pt-5">
  <div class="container">
      <p class="first-text text-center" style="color:#fff;text-decoration:underline;">We Offer To You Best Plans </p>
    <div class="row">
        
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <section id="third-section">
            <div class="container">
                <div class="row py-5">
                    <div class=" col-12 col-md-5 mb-5" id="flow-section">
                        <div class="flow-description">
                           
                            <p id="third-text"> Find the music you want </p>
                    
                            <P class="sec-text">
                                Search for your <span style="color:#35EDFB">favorite songs using the description</span>,<br>
                                or turn on the MusicFinder feature to find the song <br>
                                that is playing near you.
                            </P>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 my-5">
                        <img src="img/pngwave.png" alt="image" style="width:100%;height:auto;padding-top:70px;">
                    </div>
                </div>    
            </div>    
        </section>
    
        <?php require 'footer.php' ?>
</body>    