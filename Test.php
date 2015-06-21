<?php
	include ("Manusia.php");
	var_dump(new Manusia()); // gak ada yang terjadi
	echo "</br>";
	echo "</br>";
	
	$classList = array('Annotation','Makhluk','Manusia');
	
	foreach($classList as $class)
	{
		$r = new ReflectionClass($class);
		echo "Class ".$class;		
		echo "</br>";
		
		echo "Doc comments ";		
		echo "</br>";
		$doc = $r->getDocComment();
		var_dump($doc);
		echo "</br>";
		
		echo "Doc properties ";		
		echo "</br>";
		$properties = $r->getProperties();
		foreach($properties as $property)
		{
			echo "Property : " . $property;		
			echo "</br>";
			echo "Comment : " . $r->getProperty($property->name)->getDocComment();		
			echo "</br>";
			
		}
		
		echo "Doc methods ";		
		echo "</br>";
		$methods = $r->getMethods();
		var_dump($methods);
		echo "</br>";
		
		echo "</br>";
	}
?>