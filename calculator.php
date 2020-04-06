<?php 
extract($_POST);
if(isset($plus))
{
	
		$result=$first+$second;
	
	
}
if(isset($mins))
{
	
    $result=$first-$second;
	
	
}if(isset($mul))
{
	
    $result=$first*$second;
	
	
}
if(isset($div))
{
	
    $result=$first/$second;
	
	
}


?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator</title>
		
	</head>
	<body>
		<form method="post">
			
			
				First number<br>
				<input type="number" name="first" value="<?php  echo $first;?>"/><br>
			
				Second number<br>
				<input type="number" name="second" value="<?php  echo @$second;?>"/>
                <br><br>
				Select Your Choice<br><br><br>
				
                <input type="submit" name="plus" value="+"><br>
                <input type="submit" name="mins" value="-"><br>
                <input type="submit" name="mul" value="*"><br>
                <input type="submit" name="div" value="/"><br><br><br>
            
                
				Your Result<br><br>
				<input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$result;?>"/>
			

		</form>
	</body>
</html>