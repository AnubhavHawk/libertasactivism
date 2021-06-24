<?php
	session_start();
	function baseurl(){
		return "http://localhost/libertasactivism";
	}

	function generateSeoURL($string, $wordLimit = 0){
	    $separator = '-';
		$string .= " ".rand(1000, 999999);	    
	    if($wordLimit != 0){
	        $wordArr = explode(' ', $string);
	        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
	    }

	    $quoteSeparator = preg_quote($separator, '#');

	    $trans = array(
	        '&.+?;'                    => '',
	        '[^\w\d _-]'            => '',
	        '\s+'                    => $separator,
	        '('.$quoteSeparator.')+'=> $separator
	    );

	    $string = strip_tags($string);
	    foreach ($trans as $key => $val){
	        $string = preg_replace('#'.$key.'#i', $val, $string);
	    }

	    $string = strtolower($string);

	    return trim(trim($string, $separator));
	}
?>