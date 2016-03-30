<?php

if (! function_exists('compile_css')) {

	function compile_css($formatType){

		$input = "platonic.less";
		$output = "platonic.css";

		$parser = new lessc;
		$parser->setPreserveComments(true);
		$parser->setFormatter($formatType); //lessjs (default), compressed, classic

		$parser->setVariables(array(
			"base_font_size" => "16px",
			"base_font_family" => "'Varela Round'"
		));

		try{
			$parser->checkedCompile(base_path()."/resources/assets/less/".$input, public_path()."/css/".$output);
		}catch (Exception $e){
			echo "lessphp fatal error: ".$e->getMessage();
		}

	}
}