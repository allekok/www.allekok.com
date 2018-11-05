<?php

    if(! defined('ABSPATH'))    define('ABSPATH', '/home/allekokc/public_html/');

	require_once("../script/php/colors.php");
	require_once("../script/php/constants.php");
	require_once("../script/php/functions.php");
	
$dev = 1;
$title = _TITLE . " &raquo; کۆد &raquo; داگرتنی کۆد";
$desc = "داگرتنی کۆدەکانی ئاڵەکۆک";
$keys = _KEYS;
$t_desc = "";
$t_class = "ltitle";
$color_num = 0;

	require('../script/php/header.php');
?>
<div id="poets">
    
    <h1 style="font-size:1.2em;"><a style="background: #222;color: #19e31b;display: inline-block;padding: 0.3em 0.8em 0;border-radius: 5px;margin: 1em 0 0.5em;text-decoration:none;" href='/dev/tools/'>
        ئاڵەکۆک 
    <sup style="font-size:0.55em; vertical-align:top;">
        єv∂
    </sup></a>
    </h1>
    
    <div style="line-height:2.3">
        <p style="font-size:0.6em; text-indent: 2em; text-align:right; max-width: 800px; margin:auto;padding:0 0.6em;">
            ئەو لاپەڕە بە تایبەتی بۆ ئەو کەسانەیە کە شارەزان لە نووسینی کۆدی کامپیوتێڕی دا. ئێوە دەتوانن کۆدەکانی ئاڵەکۆک، داگرن بۆ سەر کامپیوتێڕ یان سێروێری خۆتان.
            <p style="font-size:0.6em; font-weight:bold;">
            خوێندنەوە، گۆڕین و بڵاوکردنەوەی کۆدەکانی ئاڵەکۆک ئازادە.
            </p>
            
        </p>
    </div>
    
    <div style="border-top:1px solid #ddd;margin:0.4em 0 0.8em;"></div>
    
    <div>
        <h2 style="font-size:0.85em;">
            داگرتنی کۆدەکانی ئاڵەکۆک
        </h2>
        <br>
        <a style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;" href="https://github.com/allekok/www.allekok.com/archive/v2.0.0.zip">&rsaquo;
            کۆدەکانی ئاڵەکۆک / 2018-October
        </a>
        <div style="font-size:.5em;padding-bottom:2em;"></div>
        <a style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;" href="https://github.com/allekok/www.allekok.com/releases/download/v2.0.0/allekok.com_2018September.zip">&rsaquo;
            کۆدەکانی ئاڵەکۆک / 2018-September
        </a>
        <div style="font-size:.5em;padding-bottom:2em;"></div>
        <a style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;" href="https://github.com/allekok/www.allekok.com/releases/download/v2.0.0/allekok.com_2018August.zip">&rsaquo;
            کۆدەکانی ئاڵەکۆک / 2018-August
        </a>
        <div style="font-size:.5em;padding-bottom:2em;"></div>
        <a style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;" href="https://github.com/allekok/www.allekok.com/releases/download/v2.0.0/allekok.com_2018June.zip">&rsaquo;
            کۆدەکانی ئاڵەکۆک / 2018-June
        </a>
        <div style="font-size:.5em;padding-bottom:2em;"></div>
        <a style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;" href="https://github.com/allekok/www.allekok.com/releases/download/v2.0.0/allekok.com_2018May.zip">&rsaquo;
            کۆدەکانی ئاڵەکۆک / 2018-May
        </a>
        <div style="font-size:.5em;padding-bottom:2em;"></div>
        <a target="_blank" rel="noopener noreferrer nofollow" href="https://github.com/allekok/www.allekok.com" style="font-size: .6em;background: #222;padding: 1em 1em .75em;display: inline-block;color: #19e31b;font-weight: bold;margin-bottom: .3em;border-radius: 10px;box-shadow: 0 5px 10px -9px #000;letter-spacing:-1px;">
            <svg style="width:32px; vertical-align:middle;fill:#19e31b;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
        گیت‌هاب
    </a>
    </div>
    
</div>

<?php
	require_once("../script/php/footer.php");
?>