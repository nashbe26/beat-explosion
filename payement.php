<?php 


 require 'db.php' ;
if (!$connect){
    die('Erreur de connection dans la base'.mysqli_error($connect));
}else{
if (isset($_GET['id'])){
    $id=$_GET['id'];
$req="SELECT * FROM music_update WHERE id='$id'";
$exec = mysqli_query($connect,$req);
$rows = mysqli_fetch_assoc($exec);
if (!$exec){
echo "failed requete" . mysqli_error($connect);
}

}}

?>

<html >
<head>
  <title>panier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>
     <meta charset="utf-8">
     <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
     <script src="https://use.fontawesome.com/dfd37920c4.js"></script>

<style type="text/css">
    StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.fa-lock{
	background: #273746;
	color: #fff;
	line-height: 2.1;
	padding: 8%;
	width: 30px;
	text-align: center;
}
@media (min-width: 360px) and (max-width: 767px){
  .col-md-4 .form-group{
    margin-bottom: 0;
  }
  .mt-2{
          margin-top: .3rem!important;
  }
}
    .Footer{
        
        position:absolute;
        bottom:0px;
        left:0;
        right:0;
    }
    .mt-5 {
        margin-top: 100px;
    }
    .quantity,
.shipping,
.promocode,
.subtotal,
.cardAndExpire,
.nameAndcvc {
    margin: 5%;
    color: #6c757d !important
}

.heading1 {
    margin: 5%;
    font-size: 25px
}

.heading2 {
    margin: 5%;
    margin-top: 15%;
    font-size: 20px
}

.payment {
    background-color: #f0edeb;
    padding: 3px;
    margin-top: 15%
}

.text1 {
    color: black;
    font-weight: 700
}

.card-footer {
    background-color: black;
    color: white
}

.purchaseLink {
    text-decoration: none
}

.row1 {
    font-size: 12px
}

.row2 {
    font-weight: 600
}

.subRow {
    margin-left: 10%;
    margin-bottom: 2%;
    margin-top: 5%
}

p.cardAndExpireValue,
p.nameAndcvcValue {
    margin: 5%;
    margin-bottom: 10%;
    font-weight: 600
}

p.nameAndcvc,
p.cardAndExpire {
    margin-bottom: -10px
}
.totalText2 {
    font-weight: 700;
    font-size: 20px
}
    
</style>
</head>

<body style="margin:0">
<div style="background-color:#111313;">
    <?php require'navbar.php'?>
</div>   

<div style="background-color:#000;color:#111313">       
<form action="charge.php" method="post" id="payment-form" style="margin-block-end:0">
<div class="container">
    <div class="row">       
        
<div class="col-md-7 mt-5 ">
    <div class="container">
    <div class="chose-pay">
        <p>CHOSE YOUR PAIMENT METHOD :</p>
        <div class="form-group">
            <select class="form-control">
                <option value="paypal"><img src="img/paypal.png" >Paypal </option>
                <option value="payonner">Payonner</option>
                <option value="crypto">Crypto</option>
            </select>
        </div>
        </div>
    </div>
<div class="container mt-5">
    
	<div class="row">
        
		<div class="col-lg-2"></div>
<div class="col-lg-12">
  
	 <div class="card" > 
    <div class="card-header" style="background-color:#111313;">
    	<div class="row">
<div class="col-md-12" >
    <h4 class="font-weight-bolder pt-1 pb-0" style="color:#fff">Payment Details</h4>
   </div>

</div>
  </div>
    <div class="container py-3">    
   <div class="form-row">
            <label for="nom" class="font-weight-bolder inputicon">Full Name</label>
  <div class="input-group">
   
    <input type="text" name="fname"id="nom" class="form-control" placeholder="Nom et Prénom">

  </div>
       <input type="hidden" id="custId" name="title" value="<?php print $_GET['id']; ?>">
       
                   <label for="pre" class="font-weight-bolder inputicon">Email</label>
  <div class="input-group">
   
    <input type="Email" name="lname"id="pre" class="form-control" placeholder="Email">

  </div>
    <label for="element" class="font-weight-bolder inputicon"> Credit or debit card</label>
     
    
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
<br>
  <button class="btn btn-primary">Submit Payment</button>
  </div>
</div></div>
</div>
</div>
   
        </div>
            <div class="col-md-5 mt-5">
                <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">
                <!--Card Body-->
                <div class="card-body card-body-cascade">
                    <!--Card Description-->
                    <div class="card2decs">
                        <p class="heading1"><strong> <?php  if (isset($id)): print $rows['post_m'];?><input type="hidden" id="custId" name="title" value="<?php print $rows['title']; ?>"> <?php else: print "Empty Cart"; endif; ?></strong></p>
                        <p class="quantity">Qty <span class="float-right text1">1</span></p>
                        <p class="subtotal">Subtotal<span class="float-right text1"><?php  if (isset($id)): print $rows['price']; endif; ?> USD </span> </p>
                        <p class="shipping">Shipping<span class="float-right text1">Free</span></p>
                        <p class="promocode">Promo Code<span class="float-right text1">-$100</span></p>
                        <p class="total"><strong>Total</strong><span class="float-right totalText1"><span class="totalText2"><?php  if (isset($id)): print $rows['price']; endif; ?></span></span></p>
                        <input type="hidden" id="custId" name="id" value="<?php print $_SESSION['id'] ?>">
                    </div>
                    <div class="payment">
                        <p class="heading2"><strong>Payment Details</strong></p>
                        <p class="cardAndExpire">Card Number<span class="float-right">Expiry</span></p>
                        <p class="cardAndExpireValue">{{Card}}<span class="float-right">{{exp2}}/{{exp1}}</span> </p><br>
                        <p class="nameAndcvc" style="margin-bottom:-10px;">Cardholder name<span class="float-right">CVC</span></p>
                        <p class="nameAndcvcValue">Mr. {{nom}}<span class="float-right">{{CVC}}</span></p>
                    </div>
                    
                </div>
            </div>
        </div>    
    </div>
</div>
                </form>
</div> 
    <?php require'footer.php'?>
  
</body>
</html>


<script src="charge.js"></script>
<script type="application/javascript">

</script>

    