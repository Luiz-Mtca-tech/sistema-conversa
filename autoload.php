<?php

spl_autoload_register(function($class){

	//echo "CLASSE: ".$class.'<br>';

	//$base_dir = __DIR__.'/'.$class;//'/classes/';

	$file = __DIR__.'/'.str_replace('\\', '/', $class).'.php';

	//echo $file.'<br>';
	
	if(file_exists($file)){
		require $file;
	}

});
