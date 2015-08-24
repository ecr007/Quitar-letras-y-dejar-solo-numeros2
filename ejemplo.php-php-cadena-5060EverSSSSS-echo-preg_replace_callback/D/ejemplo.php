<?php
	$cadena = '5060EverSSSSS';

	echo preg_replace_callback('/\D/',function($v){
	   	$v = str_replace($v, '', $v);
          	return $v[0];
        },$cadena
    );
?>
