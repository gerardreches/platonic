<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('compile_less')) {

	function compile_less($inputFile, $outputFile, $compress = true, $vars = [] ){

		try{

			$options = array('compress' => $compress);
			$parser = new Less_Parser( $options );

			$parser->parseFile( $inputFile, implode('/', explode('/', $inputFile, -1)) );

			if(!empty($vars)){
				$parser->ModifyVars($vars);
			}

			Storage::disk('public')->put($outputFile, $parser->getCss());
			
		}catch (Exception $e){
			echo "Error compiling LESS files: ".$e->getMessage();
		}
		
	}
}