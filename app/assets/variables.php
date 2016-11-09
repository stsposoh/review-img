<?php
//ЧПУ
if(isset($_GET['route'])) {
	$temp = explode('/',$_GET['route']);
	foreach($temp as $k=>$v) {
		if($k == 0) {
			$_GET['module'] = $v;
		} elseif($k == 1) {
			if(!empty($v)) {
				$_GET['page'] = $v;
			}
		} else {
			$_GET['key'.($k-1)] = $v;
		}
	}
	unset($_GET['route']);
}

//допустимые значения module
$allowed = array('static','errors'); 

if(!isset($_GET['module'])) { 
	$_GET['module'] = 'static';
} elseif(!in_array($_GET['module'],$allowed)) {
	header("Location: ./errors/404");
	exit();
}

//допустимые значения page
$allowed2 = array('main','about_us','price','gallery','contacts','allpages',404);

if(!isset($_GET['page'])) { 
	$_GET['page'] = 'main';
} elseif(!in_array($_GET['page'],$allowed2)) {
	header("Location: ./errors/404");
	exit();
}
