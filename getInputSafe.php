<?php 
//------REGEX - in http://php.net/manual/en/function.preg-match.php 

    $scheme_match = "((https?|ftp)\:\/\/)?"; // SCHEME 
    $userNpass_match= "([\w+!* (),;?&=\$\_\.\-\/\<\>]+)"; // User and Pass 
    $hostNip_match= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
    $port_match= "(\:[0-9]{2,5})?"; // Port 
    $path_match= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
    $getquery_match= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
    $anchor_match= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 

	

$mail_match = "[^@~+*\\/\\\\\-;:<>&|#\"'!?´`]+(?<!@)@[a-zA-Z.]{0,}[a-zA-Z.]";
$title_match="([\w \<\>\/])+";//title
$number_match="[0-9]+";//number
	

	 $allowedtags='<p><a><strong><em><code>';
	 

function validateInput($var, $input)
{
       if(preg_match("/^$var$/u", $input)===1) 
               return true; 
       return false;
}

function cleanUserTextTags($text)
{
	global $allowedtags;
	 return strip_tags(trim($text,$allowedtags));
}

?>
