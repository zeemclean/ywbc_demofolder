<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rainbows</title>
 
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Your styles! -->
    <link href="css/style.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
 
      <button id="draw-rainbow" class="purple">Rainbow me!</button>
 
      <!-- Rainbow start -->
      <div class="the-rainbow">
        <?php
       //  MAKE A RAINBOW!!!
        
        // Define colors (these match to css class style in our css file):
        $colors = array('red','orange','yellow','green','blue', 'indigo', 'purple');
        
        // This while loop makes the rainbow divs and buttons:
        foreach($colors as $color){
        ?>
          <div class="<?= $color ?>">
            <button class="favourite glyphicon glyphicon-heart"></button>
          </div>
        <?php
        }
        ?>
      </div>
        <div class="your-favourite">
          <h3>Choose your favourite!</h3>
        </div>
 
    <!-- Rainbow end -->
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
    <!-- Your JS! -->
    <script src="js/app.js"></script>
  </body>
</html>