<?php

function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	$return = implode(' ', array_slice($words, 0, $word_limit));
	if($return < $string){
	       $return .= '...';
              return $return;
       } else {
              echo "Error!";
       }
}
echo limit_words("Halo selamat datang di kampung kami yang sangat indah ini, ok, klo begitu, biasalah", 100);
?> 