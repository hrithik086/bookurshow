<!DOCTYPE html>
<html>
<head>
<title>select a theatre</title>
<link href="style6.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 style="font-family: arial; font-size: 50px;" class="header"><i>Select A Nearby Theatre</i></h1>
<section>
<form method="post" name="f3" action="select-seat.php">
<?php
$a=$_POST["txt"];
echo "<input type='text' name='1ptxt' id='1ptxt' style='visibility: hidden;' val=$a >";
?>
<p>Theatre 1 </p>    <!-- 1st theatre -->

<ul>
    <li><input type="button" value="Theatre 1 8:00 AM" onclick=fun(value)></li>     
	<li><input type="button" value="Theatre 1 9:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 1 10:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 1 11:00 AM" onclick=fun(value)></li>
	<li><input type="button" value="Theatre 1 12:00 AM" onclick=fun(value)></li>
</ul>
<div>
    <h3>each ticket costs Rs 150</h3>
	<h3>each ticket costs RS 200</h3>
	<h3>each ticket costs Rs 250</h3>
	<h3>each ticket costs Rs 300</h3>
	<h3>each ticket costs Rs 350</h3>
</div>
<br>

<p>Theatre 2</p>    <!-- 2nd theatre -->

<ul>
    <li><input type="button" value="Theatre 2 8:00 AM" onclick=fun(value)></li>     
	<li><input type="button" value="Theatre 2 9:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 2 10:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 2 11:00 AM" onclick=fun(value)></li>
	<li><input type="button" value="Theatre 2 12:00 AM" onclick=fun(value)></li>
</ul>
<div>
    <h3>each ticket costs Rs 150</h3>
	<h3>each ticket costs RS 200</h3>
	<h3>each ticket costs Rs 250</h3>
	<h3>each ticket costs Rs 300</h3>
	<h3>each ticket costs Rs 350</h3>
</div>
<br>
<p>Theatre 3 </p>    <!-- 3rd theatre -->

<ul>
    <li><input type="button" value="Theatre 3 8:00 AM" onclick=fun(value)></li>     
	<li><input type="button" value="Theatre 3 9:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 3 10:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 3 11:00 AM" onclick=fun(value)></li>
	<li><input type="button" value="Theatre 3 12:00 AM" onclick=fun(value)></li>
</ul>
<div>
    <h3>each ticket costs Rs 150</h3>
	<h3>each ticket costs RS 200</h3>
	<h3>each ticket costs Rs 250</h3>
	<h3>each ticket costs Rs 300</h3>
	<h3>each ticket costs Rs 350</h3>
</div>
<br>
<p>Theatre 4 </p>    <!-- 4th theatre -->

<ul>
    <li><input type="button" value="Theatre 4 8:00 AM" onclick=fun(value)></li>     
	<li><input type="button" value="Theatre 4 9:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 4 10:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 4 11:00 AM" onclick=fun(value)></li>
	<li><input type="button" value="Theatre 4 12:00 AM" onclick=fun(value)></li>
</ul>
<div>
    <h3>each ticket costs Rs 150</h3>
	<h3>each ticket costs RS 200</h3>
	<h3>each ticket costs Rs 250</h3>
	<h3>each ticket costs Rs 300</h3>
	<h3>each ticket costs Rs 350</h3>
</div>
<br>
<p>Theatre 5</p>    <!-- 5th theatre -->

<ul>
    <li><input type="button" value="Theatre 5 8:00 AM" onclick=fun(value)></li>     
	<li><input type="button" value="Theatre 5 9:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 5 10:00 AM" onclick=fun(value)></li>    
	<li><input type="button" value="Theatre 5 11:00 AM" onclick=fun(value)></li>
	<li><input type="button" value="Theatre 5 12:00 AM" onclick=fun(value)></li>
</ul>
<div>
    <h3>each ticket costs Rs 150</h3>
	<h3>each ticket costs RS 200</h3>
	<h3>each ticket costs Rs 250</h3>
	<h3>each ticket costs Rs 300</h3>
	<h3>each ticket costs Rs 350</h3>
</div>
</section>
<input type="text" name="txtm" id="txtm" style="visibility: hidden;" value=<?=$a;?>>
<input type="text" name="txtt" id="txtt" style="visibility: hidden;" value="" > 
</form>
<script>
  function fun(a)
  {
	  document.getElementById("txtt").value=a;
	  document.f3.submit();
  }
</script>





</body>
</html>