<?php
/* Download a list of PDFs and 
   save it into pdfs.txt */

$list_url = "https://allekok.github.io/diwan/list.txt?".time();
while(!($list = @file_get_contents($list_url)))
    sleep(3);
file_put_contents("pdfs.txt", $list);

echo $list_url;
?>
