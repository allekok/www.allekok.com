<?php
/*
 * Input: REQUEST:q
 */
function redirect ($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

$q = isset($_REQUEST['q']) ?
     strtolower(trim(
	 filter_var($_REQUEST['q'],
		    FILTER_SANITIZE_STRING))) :
     die();

$assoc = [
    "کوردی" => "https://allekok.github.io/diwan/%DA%A9%D9%88%D8%B1%D8%AF%DB%8C%20-%20%D8%AF%DB%8C%D9%88%D8%A7%D9%86%D8%8C%20%D8%A8%DB%95%D8%B1%DA%AF%DB%8C%20%DB%8C%DB%95%DA%A9%DB%95%D9%85.pdf",
    "kurdi" => "https://allekok.github.io/diwan/%DA%A9%D9%88%D8%B1%D8%AF%DB%8C%20-%20%D8%AF%DB%8C%D9%88%D8%A7%D9%86%D8%8C%20%D8%A8%DB%95%D8%B1%DA%AF%DB%8C%20%DB%8C%DB%95%DA%A9%DB%95%D9%85.pdf",
];

if(@$assoc[$q])
    redirect($assoc[$q]);
?>