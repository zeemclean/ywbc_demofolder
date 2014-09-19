/*
 
                    ________
                 .##@@&&&@@##.
              ,##@&::%&&%%::&@##.
             #@&:%%000000000%%:&@#
           #@&:%00'         '00%:&@#
          #@&:%0'             '0%:&@#
         #@&:%0                 0%:&@#
        #@&:%0                   0%:&@#
        #@&:%0                   0%:&@#
        "" ' "                   " ' ""
      _oOoOoOo_                   .-.-.
     (oOoOoOoOo)                 (  :  )
      )`"""""`(                .-.`. .'.-.
     /         \              (_  '.Y.'  _)
    |           |             (   .'|'.   )
    \           /              '-'  |  '-'
     `=========`
 
Rainbows!
 
Download this file and save it as app.js in a new directory.
Download rainbows.php and style.css from below as well, and browse to the
page to check it's working.
 
JQUERY EXERCISES:
 
Fill in the logic in the functions below as described, so that:
 
1) When you click 'Rainbow me!' three things happen:
	- That button disappears
	- The rainbow appears
	- The favourite div at the bottom appears
 
2) When you click a favourite, two more things happen:
	- The text changes to say your favourite
	- The color of the bottom div changes too.
 
*/
 
// Do our usual document ready functionailty,
// to make sure the JS waits until the page has loaded
 
$( document ).ready(function() {
 
	// KEEP THIS AREA AS SIMPLE AS POSSIBLE!
	// We're adding event listeners, and all they do is call functions.
 
	// Here we're adding an event listener to the #draw-rainbow element
	$('#draw-rainbow').click(function(){
		turnRainbowOn();
	});
 
	// Add an event for when a favourite is chosen:
	$('.favourite').click(function(){
		// 'this' is an important thing in javascript, when
		// you are using event listeners, 'this' means the thing
		// that triggered the event, in this case the button.
		// We need to send that button as an argument to the function
		// 'chooseFavourite' so that it too knows what button was clicked.
		chooseFavourite(this);
	});
});
 
/*
* Turn Rainbow on 
* This function is called when the draw-rainbow button is clicked
* It shows the rainbow elements and hides the 'rainbow me' button 
*/
 
function turnRainbowOn(){
	// This just checks if it works:
	$('.the-rainbow').show();
	$('#draw-rainbow').hide();
	$('.your-favourite').show();
}
 
/*
* Choose favourite
* This function is called when a favourite button is clicked.
* It changes the text in the bottom div ( .your-favourite ) to 
* 'Your favourite is xxxxx' and also gives the div an additional 
* class, the same as the favourite color!
*/
function chooseFavourite(button) {
	// This is how you find the parent of a div in jQuery
	parentDiv = $(button).parent();
	// This is how you find an element's attribute, in this case class:
	className = parentDiv.attr("class");
	// For now, we just alert the class name to see it's working:
	

	$('.your-favourite h3').html("Your favourite is "+className+"!");
	$('.your-favourite').removeClass('red orange yellow green blue indigo purple');
	$('.your-favourite').addClass(className);
}



