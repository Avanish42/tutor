
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  

  </head>

  <body>

    

    <!-- Page Content -->
    <div class="container">
<?php pr($email); ?>
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4 text-center" style="margin-top: 50px">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Confirm your email address</p>
        <a href="<?php echo base_url(); ?>user/confirm/<?php echo $token; ?>" class="btn btn-primary btn-lg">click here to activate your account</a>
      </header>

      <!-- Page Features -->
      

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  

  </body>

</html>
