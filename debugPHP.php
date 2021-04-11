

<script>
	var res=document.getElementById("idd").innerHTML;   
	console.log(res);  
	console.log(res.toString());  
</script>
<?php
	
	$str = "He said \"Hello O'Reilly\" & disappeared.\nNext line..."; 
 
	$s=addslashes($str);
	echo $s; 

	
	
  ?> 
