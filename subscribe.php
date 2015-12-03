<?php
function captcha_verify($id) {
  $ip = $_SERVER['REMOTE_ADDR'];
  $get = file_get_contents("http://captcha.one/captcha/verify/?method=captcha_verify&id={$id}&ip={$ip}");
  if ($get && $get = @json_decode($get, true)) {
    if ( isset($get['response']['verify']) && isset($_COOKIE[$id])
        && $get['response']['verify'] && $_COOKIE[$id]==$get['response']['captcha_callback'])
      return true;
  }
  return false;
}

if (!captcha_verify('e6298e99ec4f0f84073e983387de9fc4')) 
	die('captcha_invalid');
else
	echo 'Form submitted Successfully. Check your email for the confirmation link.';

// $_POST['email']