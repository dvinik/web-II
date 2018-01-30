<?php


function format_date($string_date){
	$date = "";
	if(!empty($string_date)){
		$date = date_format(date_create($string_date), 'd-m-Y');
	}
	return $date;
}