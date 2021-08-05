<?php 

 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
require_once('stripe/init.php');
    $p = $_POST['title'];
$_POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
$f = $_POST['fname'];
$l = $_POST['lname'];

$token = $_POST['stripeToken'];
if (isset($p)){
     $req="SELECT * FROM music_update WHERE id = '$p'";
    $resluts = mysqli_query($connect,$req);
    $num = mysqli_fetch_assoc($resluts);
    var_dump ($_POST);
$stripe =\stripe\Stripe::setApiKey('sk_test_51HEvaHLlNX7wORuBfcF6maeJ60yhJn3E7EWjKO7nAKKpgSoXo0IMUvVS04zQTbuVbHmcuriGxw8ORX1U7wGICybC00eeGtxOih');
$customer = \stripe\Customer::create(array(
    'source' => $token,
    'email' => $l,
    
));


$charge =\stripe\Charge::create(array(
  'amount' => '220',
  'currency' => 'usd',
  'description' => 'Music',
    'customer'=>$customer->id
));
}
else{
    echo ('error');
}}

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
</head>     
<body>
   
        <div class="head" style="background-color:#111313">
            <?php require'navbar.php' ?>
        </div>
        <?php if ($charge->status == 'succeeded'):?>
        <div class="alert alert-success" style="margin:8rem;">
                
               <p><i class="fas fa-check"></i> <strong>Payement Success!</strong></p> 
           
            <dl class="dl-horizontal">
                <dt>Order ID</dt>
                <dd><?php echo $charge->id ?></dd>
                <dt>Amount</dt>
                <dd><?php echo $charge->amount ?>$</dd>
                <dt>Order&nbsp;&nbsp; Date</dt>
                <dd><?php echo date("l jS \of F Y h:i:s A"); ?></dd>
            </dl>
 
        </div>
   
        <?php endif;?>
        <div class="foot">
            <?php require'footer.php' ?>
        </div>

    </body>
</html>