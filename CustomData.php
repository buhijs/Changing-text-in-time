<?php
class CustomData{
//public function __construct(){}

// Data array
private function customDataArray($i){
	$customData = array(
		'0' => "Life is good!",
		'1' => "Something new is happening today.",
		'2' => "Apples are red and sky is blue, or whatever ...",
		'3' => "<b>This is bold text. Are you happy now...</b>",
		'4' => "<i>Genetic algorithms are a subset of evolutionary computing that borrow techniques from classic evolution theories to find solutions within a large search space.</i>",
		'5' => "<b><i>Unknown error</i></b>, please try again or send request for help to <u>unknown provider.</u>",
	);
	return $customData[$i];
}

// returns data using corresponding index number
public function returnData($i){
	if(is_numeric($i)){
		$i = $i;
	} else {
		$i=0;
	}
	return $this->customDataArray($i);
}

}
?>
