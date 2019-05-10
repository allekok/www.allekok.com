<?php
/*
 * Input: $_GET['q'] -> $s
 * Output: HTML
 */
/* Header */
//$timer_start = microtime(true);
require("functions.php");
$s = isset($_GET['q']) ? $_GET['q'] : die();
$s_sanitized = san_data($s);
if($s_sanitized=="") die();

$s_len = strlen($s_sanitized);
$selected_poet = isset($_GET['selPT']) ?
		 filter_var($_GET['selPT'], FILTER_SANITIZE_STRING) : false;
$selected_poet_query = $selected_poet ? "and rtakh='$selected_poet'" : "";
$poets_max = 4;
$books_max = 4;
$poems_max = 7;

/* Load Data From Search Database */
$sql_connection = mysqli_connect(_HOST,_USER,_PASS) or die();
mysqli_select_db($sql_connection, _DB_PREFIX."search");
mysqli_set_charset($sql_connection,"utf8");
if($poets_max !== 0 and $selected_poet === false)
{
    $q = "SELECT id,rtakh,takh,profname,name,hdesc FROM 
poets WHERE len>=$s_len";
    $query = mysqli_query($sql_connection,$q);
    $poets = [];
    $res_poets_html = "";
    while($poet = mysqli_fetch_assoc($query))
    {
	if($poets_max === 0) break;
	
	if(false !== strpos($poet['takh'],$s_sanitized) or
	    false !== strpos($poet['profname'],$s_sanitized))
	{
	    $poet_image = get_poet_image($poet['id'], true);
	    $res_poets_html .= "<section><a href='/poet:{$poet['id']}'
><img src='$poet_image'><h3>{$poet['rtakh']}</h3></a></section>";
	    $poets_max--;
	}
	else
	{
	    $poets[] = $poet;
	}
    }
    if($poets_max !== 0)
    {
	foreach($poets as $poet)
	{
	    if($poets_max === 0) break;
	    
	    if(false !== strpos($poet['name'],$s_sanitized) or
		false !== strpos($poet['hdesc'],$s_sanitized))
	    {
		$poet_image = get_poet_image($poet['id'], true);
		$res_poets_html .= "<section><a href='/poet:{$poet['id']}'
><img src='$poet_image'><h3>{$poet['rtakh']}</h3></a></section>";
		$poets_max--;
	    }
	}
    }
}
if($books_max !== 0)
{
    $q = "SELECT book,book_desc,poet_address,book_address,rbook,rtakh FROM
 books WHERE len>=$s_len $selected_poet_query";
    $query = mysqli_query($sql_connection, $q);
    $books = [];
    $res_books_html = "";
    while($book = mysqli_fetch_assoc($query))
    {
	if($books_max === 0) break;

	if(false !== strpos($book['book'],$s_sanitized))
	{
	    $res_books_html .= "<a 
href='/{$book['poet_address']}/{$book['book_address']}'
><i>{$book['rtakh']}</i> › {$book['rbook']}</a>";
	    $books_max--;
	}
	else
	{
	    $books[] = $book;
	}
    }
    if($books_max !== 0)
    {
	foreach($books as $book)
	{
	    if($books_max === 0) break;

	    if(false !== strpos($book['book_desc'],$s_sanitized))
	    {
		$res_books_html .= "<a 
href='/{$book['poet_address']}/{$book['book_address']}'
><i>{$book['rtakh']}</i> › {$book['rbook']}</a>";
		$books_max--;
	    }
	}
    }
}
if($poems_max !== 0)
{
    $q =  "SELECT name,hdesc,poet_address,book_address,poem_address,
poem,rbook,rname,rtakh FROM poems WHERE len>=$s_len $selected_poet_query";
    $query = mysqli_query($sql_connection,$q);
    $poems = [];
    $res_poems_html = "";
    while($poem = mysqli_fetch_assoc($query))
    {
	if($poems_max === 0) break;

	if(false !== strpos($poem['name'],$s_sanitized))
	{
	    $res_poems_html .= "<div style='display:flex'><button 
style='background:none;padding:0 .5em' onclick='ss(this)' type='button' 
><i class='material-icons' style='font-size:1.5em'
>keyboard_arrow_down</i></button><a href='/script/php/update-cipi.php?uri=
{$poem['poet_address']}/{$poem['book_address']}/{$poem['poem_address']}'
><i>{$poem['rtakh']}</i> › <i>{$poem['rbook']}</i
> › {$poem['rname']}</a></div>";
	    $poems_max--;
	}
	else
	{
	    $poems[] = $poem;
	}
    }
    if($poems_max !== 0)
    {
	$res_poems_context_html = "";
	foreach($poems as $poem)
	{
	    if($poems_max === 0) break;

	    if(false !== strpos($poem['hdesc'],$s_sanitized) or
		false !== strpos($poem['poem'],$s_sanitized))
	    {
		$res_poems_context_html .= "<div style='display:flex'><button 
style='background:none;padding:0 .5em' onclick='ss(this)' type='button' 
><i class='material-icons' style='font-size:1.5em'
>keyboard_arrow_down</i></button><a href='/script/php/update-cipi.php?uri=
{$poem['poet_address']}/{$poem['book_address']}/{$poem['poem_address']}'
><i>{$poem['rtakh']}</i> › <i>{$poem['rbook']}</i
> › {$poem['rname']}</a></div>";
		$poems_max--;
	    }
	}
	if($res_poems_context_html != "")
	{
	    $res_poems_html .= "<h3 class='bhoh-newdaq'>گەڕانی نێو دەق: </h3>" .
			       $res_poems_context_html;
	}
    }
}
mysqli_close($sql_connection);

/* Print the result */
if($res_poets_html != "")
    echo "<div class='search-poet' id='poets'><h3 id='bhon'>شاعیر</h3>$res_poets_html</div>";
if($res_books_html != "")
    echo "<div class='search-book'><h3 id='bhon'>کتێب و بەرهەم</h3>$res_books_html</div>";
if($res_poems_html != "")
    echo "<div class='search-hon'><h3 id='bhon'>شێعر</h3>$res_poems_html</div>";
else
    echo "<h3 class='search-notfound'>هیچ شێعرێکم بۆ نەدۆزرایەوە</h3>";

/* Timer */
//$timer_end = microtime(true);
//echo "<div style='position:fixed;top:0;left:0'>".
//     number_format($timer_end-$timer_start,5)."</div>";
?>
