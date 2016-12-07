<?php
/**
* class handling cur requests
*/
class CurlPostGet 
{
	
	
	public function curl_post($url,$data_params){
		try {
			$postData = '';
   //create name value pairs seperated by &
			foreach($data_params as $k => $v) 
			{ 
				$postData .= $k . '='.$v.'&'; 
			}
			$postData = rtrim($postData, '&');

			$ch = curl_init();  

			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch,CURLOPT_HEADER, false); 
			curl_setopt($ch, CURLOPT_POST, count($postData));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

			$output=curl_exec($ch);

			curl_close($ch);
			return $output;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	public function curl_get($url){
		try {
			$ch = curl_init();  

			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,false);

			$output=curl_exec($ch);

			curl_close($ch);
			return $output;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}