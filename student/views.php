<?php
	include("main.php");
    include("config.php");
	
if($course == "CE")
{
	if($sem == 6)
		
	{
		if($division=="A")
		{	
			header("Location:CETimeTable6A.php");
		}
		else
		{
			header("Location:CETimeTable6B.php");
		}
	}
	
	else
	{
		if($sem==1 && $division=="A")
		{
		header("Location:CETimeTable1A.php");
		}
		else if($sem==1 && $division=="B")
		{
		header("Location:CETimeTable1B.php");
		}
		else if($sem==2 && $division=="A")
		{
		header("Location:CETimeTable2A.php");
		}
		else if($sem==2 && $division=="B")
		{
		header("Location:CETimeTable2B.php");
		}
		else if($sem==3 && $division=="A")
		{
		header("Location:CETimeTable3A.php");
		}
		else if($sem==3 && $division=="B")
		{
		header("Location:CETimeTable3B.php");
		}
		else if($sem==4 && $division=="A")
		{
		header("Location:CETimeTable4A.php");
		}
		else if($sem==4 && $division=="B")
		{
		header("Location:CETimeTable4B.php");
		}
		else if($sem==5 && $division=="A")
		{
		header("Location:CETimeTable5A.php");
		}
		else
		{
		header("Location:CETimeTable5B.php");
		}
		
	}
}
else
{
	if($sem == 6)
	{
		if($division=="A")
		{	
			header("Location:ITTimeTable6A.php");
		}
		else
		{
			header("Location:ITTimeTable6B.php");
		}
	}
	
	else if($sem==1 && $division=="A")
	{
			
			header("Location:ITTimeTable1A.php");
	}
	else if($sem==1 && $division=="B")
	{
			header("Location:ITTimeTable1B.php");
	}
	else if($sem==2 && $division=="A")
	{
			header("Location:ITTimeTable2A.php");
	}
	else if($sem==2 && $division=="B")
	{
			header("Location:ITTimeTable2B.php");
	}
	else if($sem==3 && $division=="A")
	{
			header("Location:ITTimeTable3A.php");
	}
	else if($sem==3 && $division=="B")
	{
			header("Location:ITTimeTable3B.php");
	}
	else if($sem==4 && $division=="A")
	{
			header("Location:ITTimeTable4A.php");
	}
	else if($sem==4 && $division=="B")
	{
			header("Location:ITTimeTable4B.php");
	}
	else if($sem==5 && $division=="A")
	{
			header("Location:ITTimeTable5A.php");
	}
	else
	{
			header("Location:ITTimeTable5B.php");
	}
	
				
}
	
	

?>