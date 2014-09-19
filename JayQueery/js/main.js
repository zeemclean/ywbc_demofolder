



// var $root = $('html, body');
//var target = $( $(this).attr('href'));
	
// 	$('a').click(function() {
// 	    $root.animate({
// 	        scrollTop: target.offset().top
// 	    }, 1000);
// 	    return false;
// 	});

	




  // $('a').on('click', function(event) {
	// 	event.preventDefault();

	// 	var target = $( $(this).attr('href'));

	// 	$("div.ipsum > div").hide();

	// 	target.fadeToggle( "slow");
	// });

	var delay = 2000; // you can change it
      var count = 6; // How many items to animate
      var showing = 3; //How many items to show at a time
      var i = 0;
      function move(i) {
        return function() {
          $('#feed'+i).remove().css('display', 'none').prependTo('#feeds');
        }
      }
      function shift() {
        var toShow = (i + showing) % count;
        $('#feed'+toShow).slideDown(1000, move(i));
        $('#feed'+i).slideUp(1000, move(i));
        i = (i + 1) % count;
        setTimeout('shift()', delay);
      }    
      $(document).ready(function() {
        setTimeout('shift()', delay);
      });


