<?php


$handle = fopen("write/bankdata.csv", "r");

while(($data = fgetcsv($handle, 0 ,",")) !==FALSE) {
	
	if(($count = count($data)) > 3){
			array_pop($data);
		}
	$records[] = $data;
	
  }	

print_r($records);

fclose($handle);


?>
