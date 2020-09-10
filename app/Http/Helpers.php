<?php 


 

function save_image($image_url,$title){
	
		$url		= $image_url;
		$data		= file_get_contents($url);
		$image		= mt_rand(10000000, 99999999).'.jpg';
		$image_url	= './images/'.$image;
		$upload		= file_put_contents($image_url, $data);	
		if($upload){
			return $image_url;
		} 
}


function breakstr($str){
		 
		$as  =  str_replace(","," , ","$str");;
		 return explode(' , ', $as);;
 		 $i = explode(', ', $as);
		 return $i;
}
