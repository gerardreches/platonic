<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('compile_less')) {

	function compile_less($formatType = 'lessjs'){

		$input = 'platonic.less';
		$output = 'platonic.css';

		$inputFile = base_path('resources/assets/less/').$input;
		$outputFile = public_path('css/').$output;

		$parser = new lessc;
		$parser->setPreserveComments(true);
		$parser->setFormatter($formatType); //lessjs (default), compressed, classic

		$parser->setVariables(array(
			"base_font_size" => "16px",
			"base_font_family" => "'Varela Round'"
		));
		
		try{
			$cacheFile = storage_path('app/').'lesscompile.cache';

			if (file_exists($cacheFile)) {
				$cache = unserialize( Storage::get('storage/app/lesscompile.cache') );
			} else {
				$cache = $inputFile;
			}

			$newCache = $parser->cachedCompile($cache);
			
			if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
				Storage::put('storage/app/lesscompile.cache', serialize($newCache));
				Storage::put('public/css/'.$output, $newCache['compiled']);
			}

			//$parser->checkedCompile(base_path('resources/assets/less').$input, public_path('css').$output);
		}catch (Exception $e){
			echo "lessphp fatal error: ".$e->getMessage();
		}
		
	}
}