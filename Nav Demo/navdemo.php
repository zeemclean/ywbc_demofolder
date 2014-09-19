<?php
/*
 
Nav demo starter code
 
Take this starter code, and save it as navdemo.php 
We'll use some PHP to make it work for your site!
 
*/

$pages = array(
              'The Film',
              'Barrel Chasers',
              'Explore Lobitos',
              'News'
              );

var_dump($pages);

function createNavFromArray($pages){

$nav = "\n<nav><ul>";
    foreach($pages as $page){
    $nav.="\n\t<li>".$page."</li>";
  }



$nav .= "\n</ul></nav>";

return $nav;
}
 
?>
 
<!doctype html>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
 
    <title>Fancy nav</title>
    <meta name="description" content="This is a nav made with PHP">
  </head>
 
  <body>
    <header>
      <h1>Nav demo</h1>
      <?php 
      $nav = createNavFromArray($pages);
      echo $nav;
      ?>
    </header>
  </body>
</html>