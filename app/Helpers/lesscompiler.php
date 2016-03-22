<?php

//require "lessc.inc.php";

if (! function_exists('compile_css')) {
	function compile_css(){

		echo_pretty_message("Compiling...");

		$input = "platonic.less";
		$output = "platonic.css";

		$parser = new lessc;
		$parser->setPreserveComments(true);
		$parser->setFormatter("compressed"); //lessjs (default), compressed, classic

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

?>