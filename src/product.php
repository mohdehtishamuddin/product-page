<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Bootstrap</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .desc1{
    color: blue;
  }
  .phones{
    color: blue;
  }
  .yellow{
    color: yellow;
  }
  .img-fluid{
    max-width: 402px;
    height: 464px;
  }
  .col-4{
    flex: 0 0 auto;
    width:49%
  }
  .justify-content-around {
    justify-content: space-around!important;
}
.row{
  margin-right: 0px;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><h1>Jeveline</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav justify-content-end">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbar1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
        </li>&nbsp;
        <li class="nav-item dropdown">
        <a class=" nav-link dropdown-toggle " href="#" id="navbar4">Shop</a>&nbsp;&nbsp;&nbsp;
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">new</span>&nbsp;
        </li>&nbsp;&nbsp;
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Variation</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar5" role="button" data-bs-toggle="dropdown" aria-expanded="false">Element</a>
        </li>
        <i class="bi bi-cart" style="font-size: 1.5rem";>
        <span class="position-absolute top-5 start-35 translate-middle badge rounded-pill bg-danger">0</span>
       
      </i>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="bi bi-search" style="font-size:20px";></i>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-end">
        <li class="nav-item">
          <span  id="home" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</span> > &nbsp;&nbsp;
        </li>
        <li class="nav-item">
          <span  id="home" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</span> > &nbsp;&nbsp;
        </li>
        <li class="nav-item">
          <span  id="home" role="button" data-bs-toggle="dropdown" aria-expanded="false"><h5>Android Phone</h5></span>  &nbsp;&nbsp;
        </li>
</div>
</nav>
    <div class="container">
    <div class="row justify-content-around">
    <div class="col-4">
    <figure class="figure">
  <img src="images/phone.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
  <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
</figure>
    </div>
    <div class="col-4">
     <h2>Android Phone</h2><br>
     <span><del>$199.00</del>&nbsp;&nbsp;<strong>$179.00</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <span class="fa fa-star checked yellow"></span>
<span class="fa fa-star checked yellow"></span>
<span class="fa fa-star checked yellow"></span>
<span class="fa fa-star checked yellow"></span>
<span class="fa fa-star checked yellow"></span>(1review)
    </span><br>
    <div style="margin-top: 20px;">
   <p>Folly words widow one down few age every seven.if miss part by fact he park just shew.Discovered had get considered projection who favourable.Neceesary up knowledge it tolerably</p>
  </div>
  <div>
  <i class="bi bi-arrow-down-circle"><strong>1</strong></i>
  <i class="bi bi-arrow-up-circle"></i>
 
  <button type="button" class="btn btn-primary" style="margin-left: 160px;">&nbsp;<i class="bi bi-cart2"></i>&nbsp;&nbsp; Add To Cart</button>
  </div><br>
  <div>
    <p>SKU:12</p>
    <p > Category:<a href="#"style="text-decoration: none;">  Phones</a></p>
    <p> Tag : screen</p>
    <button type="button" class="btn btn-secondary btn-lg" disabled><i class="bi bi-share">share</i></button><br><br>
    <span class="desc1"><b>Description</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Review(1)</b><hr class="phones"></hr><br>

  </div>
  <div>
    <span class="my"><p>Unwilling departure education is be dashwood or an.Use off agreeable law unwilling sir dificient curiosity instantaly .Easy mind life fact with see has bore ten.Parish any chatty can elinor direct for former.Up as meant widow equal an share least.</p></span>
  </div>
    </div>
    
  </div>
  
    </div><br><br><br>
    <div class="container">
    <div class="d-flex justify-content-evenly">
    <i class="bi bi-minecart-loaded" style="font-size:2rem; color:blue"></i> <span><h3>Free shipping</h3><p>for purchase over $50</p></span>
    <i class="bi bi-shield-x" style="font-size: 2rem; color:blue"></i><span><h3> Secure Payment</h3><p>for online transactions</p></span>
    <i class="bi bi-lightning-charge" style="font-size: 2rem; color:blue"></i> <span> <h3> Same day shipping</h3><p>for purchases till 6.00 pm EST</p></span>

    </div>
    </div><br><br>
   <div class="container" style="margin-top:30px;">
  <nav class="navbar navbar-light bg-light">
  <div class="container" style="background-color: black;">
    <a class="navbar-brand"><h1 style="color: white;">Jeveline</h1></a>
  <div class="row" style="color: whitesmoke;">
  <ul class="nav justify-content-end">
  <li class="nav-item">
  <i class="bi bi-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <i class="bi bi-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <i class="bi bi-youtube"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <i class="bi bi-whatsapp"></i>
  </li>
  </ul><br><br>
  </div>
</div><br>
<hr class="new" style="color: white;"><hr>
<div class="container"style="background-color:black;"><br><br><br><br>
  <div class="row align-items-start">
    <div class="col">
    <h5 style="color: white;"> start crafting<br> Epic website Today!<br><br>
    <button type="button" class="btn btn-primary" style="margin-left: 0px;">Purchase theme</button>
    </h5>
    </div>
    <div class="col"style="color: white;">
     <h6>Useful</h6>
       <p>Documentation intro video<br> showcase buy theme</p>
     
    </div>
    <div class="col"style="color: white;">
     <h5> Keep in touch</h5>
     <p>Nippon,Osaka,Crimson street 78-42<br> (10am-6pm EST,Mon-Fri) Support@brand.com</p>
    </div>
    <div class="col"style="color: white;">
     <h5>SignUp For newsletter</h5>
     <input type="text" class="form-control"  placeholder="Email">&nbsp;&nbsp;<br>
     <button type="submit" class="btn btn-dark mb-3">send</button><br>
     <span>*information is not disclosed to third parties</span>
      </div>
 
</div><br><br><br><br><br><br><br><br>
<div class="d-flex bd-highlight">
  <div class="p-2 flex-grow-1 bd-highlight" style="color: white;">c 2021 Jeveline.Crafted by Shufflehound</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="p-2 bd-highlight"style="color:white;">Privacy Policy</div>
  <div class="p-2 bd-highlight"style="color:white;">Term&Condition</div>
</div>
   </body>
</html>