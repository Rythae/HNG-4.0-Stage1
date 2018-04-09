<!DOCTYPE html>
<html>
<head>
<title>HNGStage1</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body style="background-color:#EB5757; text-align:center; height:100vh; padding:30px; font-family: 'Roboto', sans-serif;">
<div style='background-color:#EEEEEE; text-align:center; margin:auto; height:15vh; width:50%; padding-top:10px'><h1>
      <?php
        echo "HNG Internship Display Time";
      ?>
    </h1></div>
<div style="margin-top:1px;">
<br/><br/>

<div style='color:#FFFFFF; font-weight:bold; font-size:36px;'><h1>
      <?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
<div id="clock"> </div>
</h1></div>

<div style="margin:auto; width:30%;" >
<div style="text-align:center;">
<h5 style="font-weight:400; font-size:16px;">My First PHP Website!</h5>
</div>
</div>
</div>
</body>
</html>