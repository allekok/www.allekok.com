<?php
require_once("../script/php/constants.php");
require_once(ABSPATH . "script/php/functions.php");
require_once(ABSPATH . "script/php/kurdish-calendar.php");

const comments_file = "comments.txt";
const comment_sign = "[comment]";

function calendar_kurdish_string ($date=NULL) {
	if(!$date)
		$date = calendarKurdishFromGregorian(
			explode("-", date("m-d-Y")));
	$year = calendarExtractYear($date);
	$month = calendarKurdishMonth(
		calendarExtractMonth($date));
	$day = calendarExtractDay($date);

	$str = "{$day}ی {$month}ی {$year}ی کوردی";
	return num_convert($str, "en", "ckb");
}
?>
