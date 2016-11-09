<?php
//вывод массива
function wtf($array, $stop = false) {
	echo '<pre>'.print_r($array,1).'</pre>';
	if(!$stop) {
		exit();
	}
}

//обработка входящих данных
function hsc($el) {
	if(!is_array($el)) {
		$el = htmlspecialchars($el);
	} else {
		$el = array_map('htmlspecialcharsAll',$el);
	}
	return $el;
}
?>