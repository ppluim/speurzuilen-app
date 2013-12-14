<?php

if( ! function_exists('say')) 
{
	function say($something = 'Hello') 
	{
    $message = 'Eeeeeh, '.$something;
    return $message;
  }
}

if( ! function_exists('awesome_button')) 
{
	function awesome_button($route, $parameters = array(), $buttonClass, $icon = 'plus', $buttonText)
	{
		return '<a href="'.route($route).'" class="'.$buttonClass.'"><i class="'.$icon.'"></i> '.$buttonText.'</a>';
	}
}

if( ! function_exists('google_webfont')) 
{
	function google_webfont($webfont = 'Open+Sans')
	{
		return "<link href='http://fonts.googleapis.com/css?family='".$webfont."' rel='stylesheet' type='text/css'>";
	}
}
    
