<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('compile_less')) {

	function compile_less($compress = true){

		$input = 'platonic.less';
		$output = 'platonic.css';

		$inputFile = base_path('resources/assets/less/').$input;
		$outputFile = public_path('css/').$output;

		try{

			$options = array('compress' => $compress);
			$parser = new Less_Parser( $options );

			$parser->parseFile( $inputFile, base_path('resources/assets/less/') );

			$parser->ModifyVars(array(
				'base_font_size' => '16px',
				'base_font_family' => '"Varela Round"'
			));

			Storage::put('public/css/'.$output, $parser->getCss());

		}catch (Exception $e){
			echo "Error compiling LESS files: ".$e->getMessage();
		}
		
	}
}