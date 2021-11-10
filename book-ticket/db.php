<?php
$a=$_POST["txtm1"];
$b=$_POST["txtt1"];
$c=$_POST["txts"];
$d="$a.$b.$c";
include("connect.php");
$sql="select * from db where bi='". $d. "'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==0)
{
	$query="insert into db(mn,mt,ms,bi) values('". $a. "','". $b. "','". $c. "','". $d. "')";
	$n=mysqli_query($con,$query);
	$o=mysqli_query($con,$sql);
	if(mysqli_num_rows($o)>0)
	{
		echo "Thank your for booking the ticket please note your booking id is [$d]";
		
	}
	else
	{
		echo "<script>alert('we are unable to proceed your request please try again later')</script>";
			echo "<script>window.location.href='time.php'</script>";
	}
}

else
{
	echo "<script>alert('this seat is already booked by some one please go back to seat page and try some other seats ')</script>";
			
}
?>