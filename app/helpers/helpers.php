<?php

if( ! function_exists('say')) 
{
	function say($something = 'Hello') 
	{
    $message = 'Eeeeeh, '.$something;
    return $message;
  }
}

if( ! function_exists('awesome_icon')) 
{
	function awesome_icon($name = 'plus')
	{
		return '<i class="fa fa-'.$name.'"></i>';
	}
}
    
