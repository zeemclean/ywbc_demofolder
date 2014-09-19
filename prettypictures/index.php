<?php
/*
 
Pretty pictures
 
Your client wants you to build a simple page that will allow users to try out some 
wallpapers in the browser.
 
Download this file to a fresh directory. Then, go to this URL: 
http://imgur.com/a/akHsJ?gallery#0 
and download 5 images that you like, and save them in an images directory in the same 
directory as this folder.
 
The client wants there to be thumbnails of each image at the top, and when the thumbnails 
are moused over, the whole background should become that image.
 
=============================  LEVEL 1 ===========================================
 
There is some code already in this file that finds out what files are in the images directory, 
and adds their names to an array.
 
Create a foreach for the $files array, to output image elements for each file,  with a class of 'thumb'
(for thumb nail), something like: echo "<img src=\"images/". $img ."\" class=\"thumb\" />";
 
=============================  LEVEL 2 ===========================================
 
You will have two 'broken' images showing up, thanks to an irregularity in the readdir() function
that has created the array, so inspect these and see what is wrong. Add a condition 
('if' statement) inside your foreach loop to make sure the images that aren't real names
don't show up. (HINT - think about what differentiates the real names from the fake ones)
 
=============================  LEVEL 3 ===========================================
 
Now create a main.css file so you can start styling this up.
In your css, give the .thumb class a width of 120px, margin of 5px, and float them left.
Then give the body a background-image that has the URL of one of the images, and make its 
background-size 100%.
 
=============================  LEVEL 4 ===========================================
 
Now, make it work.
 
Create an app.js, and create a document ready function. Within that, you'll need an
event listener for mouseover. When the thumbnail is moused over, change the body background image
to be the same image as the thumb.
 
Hint: The src (source) of an image is one of its attributes. jQuery has a method for getting 
attributes that we have touched on before. Once you've saved the value of the src attribute to
a variable, you can then use it to change the css of the body element.
 
 
===================================  BONUS ================================================
 
Your thumbnails should now all be at the top, but different heights, which is a little ugly.
Change your foreach loop's output, so that each thumbnail is now inside a div element. 
Re-arrange your CSS declarations so that they still float left and have margin as before, but 
that the overflow on height is hidden so the thumbnails are now the same height.
 
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Big images</title>
 
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Your styles! -->
    <link href="css/main.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="thumb_window">
        <div class="thumb_container">
        </div>
      </div>

  
      <button class="btn" id="gallery_show" type="button">Show | Hide</button>
      
      <div class="row dlholder"></div>
    </div>
 <!-- end container -->
    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
    <!-- Your JS! -->
    <script src="app.js"></script>
  </body>
</html>