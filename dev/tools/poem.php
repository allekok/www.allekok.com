<?php
/*
 * Input: REQUEST:(poet,book,poem,html)
 * Output: JSON, Header:(x-con-len)
 */
require_once("../../script/php/constants.php");
require(ABSPATH . "script/php/functions.php");

header("Content-type:application/json; charset=UTF-8");

$null = json_encode(null);
$_pt = isset($_REQUEST['poet']) ?
       filter_var($_REQUEST['poet'], FILTER_SANITIZE_STRING) :
       die($null);
if(empty($_pt)) die($null);
$_bk = isset($_REQUEST['book']) ?
       filter_var($_REQUEST['book'], FILTER_SANITIZE_STRING) :
       die($null);
if(empty($_bk)) die($null);
$_pm = isset($_REQUEST['poem']) ?
       filter_var($_REQUEST['poem'], FILTER_SANITIZE_STRING) :
       die($null);
if(empty($_pm)) die($null);

$where = filter_var($_pt, FILTER_VALIDATE_INT) ?
	 "id=$_pt" :
	 "takh='$_pt' or profname='$_pt' or name='$_pt'";
$q = "SELECT * FROM auth WHERE $where";
require(ABSPATH . "script/php/condb.php");
if(! $query) die($null);

$poet = mysqli_fetch_assoc($query);
$poet['bks'] = explode(",", $poet['bks']);

$_pms = explode(",", $_pm);
$poems = [];

foreach($_pms as $_pm)
{    
	if(! filter_var($_bk, FILTER_VALIDATE_INT))
	{
		$_bk = array_search($_bk, $poet['bks']);        
		if($_bk === false) die($null);        
		$_bk++;
	}
	elseif($_bk > count($poet['bks']))
		die($null);
	
	$_tbl = "tbl{$poet['id']}_{$_bk}";
	if($_pm == "all")
		$where = "";
	else
		$where = filter_var($_pm, FILTER_VALIDATE_INT) ?
			 "WHERE id=$_pm" : "WHERE name='$_pm'";
	$q = "SELECT * FROM $_tbl $where ORDER BY id";
	$query = mysqli_query($conn, $q);
	
	while($_ = mysqli_fetch_assoc($query))
		$poems[] = $_;
}
mysqli_close($conn);
if(empty($poems)) die($null);

if(! isset($_REQUEST['html']))
{
	foreach($poems as $k => $p)
	{
		$p['hon'] = str_replace(["\r","&#39;","&#34;","&laquo;","&raquo;","<sup>","</sup>"],
					["","'","\"","«","»"," [","] "], $p['hon']);
		$p['hon'] = preg_replace("/\n\n+/", "\n\n", $p['hon']);
		$p['hon'] = trim(filter_var($p['hon'],
					    FILTER_SANITIZE_STRING));
		
		$poems[$k]['hon'] = $p['hon'];
	}
}

$reses = [
	"poet" => $poet['takh'],
	"poetID" => $poet['id'],
	"book" => $poet['bks'][$_bk-1],
	"bookID" => $_bk,
	"poems" => $poems,
];
$reses_str = json_encode($reses);

$content_length = mb_strlen($reses_str);
header("x-con-len:$content_length");

echo $reses_str;
?>
