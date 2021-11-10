function extract(a)
{
	name=prompt("enter your name");
	alert(name+" You have selected the seat number " +a);
	result=confirm("are you sure you want to book the ticket");
	if(result==true)
	{
		alert("Your ticket has been booked! thank you for booking tickets");
	}
	else
	{
		window.location.href="select-seat.html";
	}
}

