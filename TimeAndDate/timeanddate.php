<?php
/*
 
        _____
     _.'_____`._
   .'.-'  12 `-.`.
  /,' 11      1 `.\
 // 10      /   2 \\
;;         /       ::
|| 9  ----O      3 ||
::                 ;;
 \\ 8           4 //
  \`. 7       5 ,'/
   '.`-.__6__.-'.'
    ((-._____.-))
 
 
TIME, DATE, AND THE UNIX EPOCH
 
Showing accurate times and dates and doing calcluations with them can be problematic, especially 
when accounting for time zones around the world.
 
Unix Time was invented by programmers in order to get around a lot of these issues and is the 
universal standard that powers most lanugages built-in time and date functions.
 
http://en.wikipedia.org/wiki/Unix_time
 
So  a Unix timestamp is a ten digit number that tells us the number of seconds that have passed since 
'the Unix epoch' which is the time 00:00:00 UTC on 1 January 1970.
 
By representing all dates as a universal number of seconds, we can do maths on dates, and calculate 
time intervals.
 
Most systems also use 'timestamps', which are more human readable, but can sometimes be harder
to work with without a good library (which many Javascript frameworks now have, fortunately).
 
For this excercise we're going to work with Unix time, and learn how to echo out dates and calcualate
periods between them.
 
TRIGGER WARNING: MATHS
 
*/
 
echo "<h1>Time and Date</h1>";
 
echo "<br /><br />================================== LEVEL 1 ==========================================<br /><br />";
 
// First let's see what PHP thinks the time is:
 
$currentTime = time(); // Time is a built in PHP function
 
echo "<br />The time is ".$currentTime. " in unix time";
 
// TO DO: check out this page, and format a nice date:
// http://nz2.php.net/manual/en/function.date.php
 
// So far the date just says the year, but you need to add the month, date, maybe day 
// of the week, and the hour, minute and second. Add them one at a time
// from the table on the page linked above, and test as you go.
 
echo "<br />In human readable terms, the date is ".date('l F jS Y', $currentTime);
 
 
echo "<br /><br />================================== LEVEL 2 ==========================================<br /><br />";
 
// Remember that the Unix time is just a total number of seconds.
 
echo "<br />It has been ".$currentTime." seconds since 1 Jan 1970";
 
// Here's how we get the number of minutes - obviously, there are 60 seconds per
// minute, so we divide by 60
 
echo "<br />It has been ".($currentTime / 60 )." minutes since 1 Jan 1970";
 
// TODO : Finish these so they say the number of hours, days, and weeks since
// the unix epoch at 1 Jan 1970. If you are getting lots of decimal points, 
// look up how to round numbers in PHP and use the most appropriate option.
// You can pre-calculate the  number of seconds in an hour, day, etc, or just do
// the maths in the code, eg the seconds in a day is 60 * 60 * 24 
 
echo "<br />It has been ".($currentTime / 3600)." hours since 1 Jan 1970";
echo "<br />It has been ".($currentTime / 86400)." days since 1 Jan 1970";
echo "<br />It has been ".($currentTime / 604800)." weeks since 1 Jan 1970";
 
 
echo "<br /><br />================================== LEVEL 3 ==========================================<br /><br />";
 
// Now, how do we turn a date into a unix timestamp?
// Well, a human readable date is expressed in a string, so we use a function
// that turns a string into a time, called strtotime();
 
$ritasBirthday = strtotime('12 January 2015');
 
echo "<br />Rita's next birthday is 12 January 2015, which in Unix time is ".$ritasBirthday;
 
// TO DO: Write out when your birthday is in unix time
$myBirthday = strtotime('22 July 2015');

echo "<br />My next birthday is 22 July 2015, which in Unix time is ".$myBirthday;
 
 
echo "<br /><br />================================== LEVEL 4 ==========================================<br /><br />";
 
// So, why even do that? 
// So we can do maths with dates, and work out how long to go and other
// handy things like that.
 
echo "<br />That means Rita only has to wait ".($ritasBirthday - $currentTime).' seconds';
 
// And we can make use of the modulo operator to get the remainder, which is % in PHP
// Also note that the php floor() function rounds numbers DOWN.
 
$secondsRemaining = $ritasBirthday - $currentTime;
 
$wholeMinutesUntilRitasBirthday = floor($secondsRemaining / 60);
$secondsRemainingAfterMinutes = $secondsRemaining % 60;
 
echo "<br />In other words, ".$wholeMinutesUntilRitasBirthday.' minutes and '.$secondsRemainingAfterMinutes.' seconds';
 
 
// And to get more complex:
$secondsInADay = 60 * 60 * 24;
$wholeDaysUntilBirthday = floor($secondsRemaining / $secondsInADay);
 
// Use modulo on the same equation to get the left-over seconds, after the whole days:
$remainderSecondsAfterDays = $secondsRemaining % $secondsInADay;
 
// Now work out how many hours remain, after the days:
$secondsInAnHour = 60 * 60;
$wholeHoursUntilBirthday = floor($remainderSecondsAfterDays / $secondsInAnHour);
 
 
echo "<br />Or, ".$wholeDaysUntilBirthday." days, and ".$wholeHoursUntilBirthday.' hours.' ;
 
// TO DO output how long until your birthday also
echo "<br /> I only have to wait ".($myBirthday - $currentTime).' seconds';

$mySecondsRemaining = $myBirthday - $currentTime;
 
$wholeMinutesUntilMyBirthday = floor($mySecondsRemaining / 60);
$mySecondsRemainingAfterMinutes = $mySecondsRemaining % 60;
 
echo "<br />In other words, ".$wholeMinutesUntilMyBirthday.' minutes and '.$mySecondsRemainingAfterMinutes.' seconds';


$myWholeDaysUntilBirthday = floor($mySecondsRemaining / $secondsInADay);
 
// Use modulo on the same equation to get the left-over seconds, after the whole days:
$myRemainderSecondsAfterDays = $mySecondsRemaining % $secondsInADay;
 
// Now work out how many hours remain, after the days:
$secondsInAnHour = 60 * 60;
$myWholeHoursUntilBirthday = floor($myRemainderSecondsAfterDays / $secondsInAnHour);
 
 
echo "<br />Or, ".$myWholeDaysUntilBirthday." days, and ".$myWholeHoursUntilBirthday.' hours.' ;
 
 
echo "<br /><br />================================== LEVEL 5 ==========================================<br /><br />";
 
// TO DO
 
// Here are 2 dates in the past. Write some code using what you have learnt, and then echo how how long it has been 
// since that day in days.
$newMillenium = strtotime('1 January 2000');

$secondsSinceMillenium = ($currentTime - $newMillenium);
$secondsInADay = 60 * 60 * 24;
$daysSinceMillenium = floor($secondsSinceMillenium / $secondsInADay);

echo "<br />It has been ".$daysSinceMillenium.' days since 1 January 2000';
 
 
// You'll need to format this date more nicely:


$nineEleven = strtotime('11 September 2001');

$sSinceNineEleven = ($currentTime - $nineEleven);
$secondsInADay = 60 * 60 * 24;
$dSinceNineEleven = floor($sSinceNineEleven / $secondsInADay);
 
echo "<br />It has been ".$dSinceNineEleven.' days since 9/11 ( in 2001)';
 
// Now, make some dates in the future, such as for your session times. 
// Echo out the date in a human-readable way, and then how long until that time.

$premiere = strtotime('15 November 2015');

$sTillPremiere = $premiere - $currentTime;
$hTillPremiere = floor($sTillPremiere / $secondsInAnHour);
$dTillPremiere = floor($sTillPremiere / $secondsInADay);





echo "<br /> Coming November 15th, 2015.";
echo "<br /> days till premiere:".$dTillPremiere;



