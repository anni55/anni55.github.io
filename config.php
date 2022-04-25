<?php 
function e($key) {
	$config = [
		'SMTP_HOST'       => 'mail.gandi.net',                  
		'SMTP_USER'   		=> '4817300',          
		'SMTP_PASS'   		=> 'giBOl1n-123',                    
		'SMTP_TYPE' 			=> 'tsl', 
		'SMTP_PORT'       => 465,  
	
		'JUAKALI_CONTACT' => 'hello@juakali.io',

		'GOOGLE_RECAPTCHA_SITE' => '6Lc73agZAAAAAAox_7YfyGRP-LHnneHCA1FqpmTS',//'6Lf7dKkZAAAAACXt2wgQMASBDWNQwLzQrNhOwd9W',
		'GOOGLE_RECAPTCHA_SECRET' => '6Lc73agZAAAAAMgbG6Zp58xzOOglIp7UtM8ZQRu4',//'6Lf7dKkZAAAAANGoeiYLEfFlNkc0YuzB8dn8XVnN',
	];


	
	return $config[$key];
}

?>