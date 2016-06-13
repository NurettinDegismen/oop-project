<?php
include_once('classAutoloader.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Admin Area</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- Custom -->
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top  ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">BuyMe!</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <?php if(!isset($_SESSION['customer'])):  ?>
          <li><a href="index.php">Home</a></li>
          <?php endif;  ?>
          <li><a href="store.php">Store</a></li>
          <li><a href="contact.php">Contact</a></li>
           <?php if(!empty($_SESSION['customer'])):  ?>
            <li><a href="logout.php?logout">Log Out</a></li>
          <?php endif;  ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php"> <?php echo $_SESSION['customer']->getName()." ".  $_SESSION['customer']->getSurname() ?> </a></li>
        </ul>

      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <header class=" header store " >

    <h1 class = "text-center">Admin Area</h1>  

    <hr>

  </header>

  <section class=" wrap productManager"  >
  <h2 class=" text-center sectionTitle " >Product Manager</h2>

  <h3 class="text-center" >Insert a new product</h3>

  <form class="form-horizontal" action="insertProduct.php" method="post" >
    <div class="form-group">
    <label  class="col-sm-2 control-label">Name Product</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nameProduct" placeholder="Name Product">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Price</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="priceProduct" placeholder="Price">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Quantity</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="quantityProduct" placeholder="Quantity">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Type</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="typeProduct" placeholder="Type">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Insert Product</button>
      </div>
    </div>
  </form>
    
  </section>

  <section class=" wrap customerManager"  >
  <h2 class=" text-center sectionTitle " >Customer Manager</h2>
    
  </section>

<?php include('parts/footer.php') ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>