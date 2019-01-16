<?php

	require_once("../script/php/colors.php");
	require_once("../script/php/constants.php");
	require_once("../script/php/functions.php");

$dsk = 1;
$title = _TITLE . " &raquo; چۆنیەتی بەکارهێنانی ئاڵەکۆک";
$desc = "ڕێنوومایی چۆنیەتی بەکارهێنانی ئاڵەکۆک";
$keys = _KEYS;
$t_desc = "";
$t_class = "ltitle";
$color_num = 0;

	require('../script/php/header.php');
?>

<div id="poets" style="max-width:950px">

    <h1 style="display: inline-block;padding: 0.1em 0.8em 0;border-radius: 5px;margin: 1em 0 0;font-size:1.2em;color: #555;">
        <i class='material-icons' style='font-size:inherit; vertical-align:middle;color:rgb(0,210,50);'>help</i>
        چۆنیەتی بەکارهێنانی ئاڵەکۆک
    </h1>
    <style>
        .pitewsec a {
            color:#000;
            font-size:1.2em;
            line-height:2.8;
            border-bottom:1px solid #ccc;
        }
        #QAtxt {
            font-size: 0.65em;
            padding: 0.6em 3% 0.6em 2%;
            text-align: right;
            max-width: 90%;
            width: 90%;
            min-height: 8em;
            display: block;
            border-top: 3px solid rgb(221, 221, 221);
            box-shadow: rgb(221, 221, 221) 0px 5px 10px -5px;
            box-sizing: border-box;            
            margin: 1em auto 0;
            height: 155px;
        }
        .btn {
            font-size: 0.65em;
            width: 50%;
            padding: 0.8em 0;
            max-width: 150px;
            cursor: pointer;
            margin-top: 0.5em;
        }
        .hr {
            border-top:3px dashed #ccc;
        }
        main pre {
            white-space: pre-wrap;       /* Since CSS 2.1 */
            white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
            white-space: -pre-wrap;      /* Opera 4-6 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
            font-family: inherit;
        }
        main code {
            font-family:inherit;
        }
        main h1 {
            font-size:1.5em;
            color:rgb(0,210,50);
        }
        main h2 {
            font-size:1.3em;
            color:rgb(0,210,50);
            margin-top:1em;
        }
        main h3 {
            font-size:1.1em;
            color:rgb(0,210,50);
            margin-top:1em;
        }
        main h1, main h2, main h3 {
            text-align:right;
        }
        main ul, ol {
            padding-right:2em;
            color:#333;
        }
        main p {
            text-indent: 1em;
        }
        main img {
            display:block;
            margin: 1em auto;
            max-width:100%;
            cursor:pointer;
        }
        main .material-icons {
            display: inline;
            vertical-align: middle;
            font-size: 1.5em;
        }
    </style>
    
    <main style="font-size:.65em;text-align:justify;padding:1em;">

    </main>
    
    <script src="https://cdn.rawgit.com/showdownjs/showdown/1.9.0/dist/showdown.min.js"></script>
    <script>
        var converter = new showdown.Converter(),
        text = `# چۆنیەتی بەکارهێنانی تایبەتمەندیەکانی ئاڵەکۆک
ئاڵەکۆک، کۆمەڵێک تایبەتمەندی هەیە بۆ وەی کە شێعری مەبەست‌تان ئاسان‌تر وەدۆزن، وەیخوێنن، پێداچوونەوەی بەسەردا بکەن و بۆ هاوڕێکان‌تانی بنێرن.  
لەم لاپەڕەدا بە تەسەلی باس لەم چوار بەشە گرینگە دەکەیین.  
- ۱. دۆزینەوەی شێعر
- ۲. خوێندنەوەی شێعر
- ۳. پێداچوونەوەی شێعر
- ۴. بڵاوکردنەوەی شێعر

## ۱. دۆزینەوەی شێعر
بە دوو جۆر دەتوانن ئەو شێعرەی مەبەست‌تانە وەیدۆزن:  
- بۆخۆتان بەدووی شێعرەکەدا بگەڕێن.
- بەشی گەڕانی ئاڵەکۆک بەکار بهێنن.

### بۆخۆتان بەدووی شێعرەکەدا بگەڕێن.
ئەگەر کات‌و هەیە، باشترین ڕێ ئەوەیە کە لە لاپەڕەی یەکەمی ماڵپەڕ را دەست پێ بکەن، لەسەر شاعیری ئەو شێعرەی بۆی دەگەڕێن، کرتە بکەن، دوایە لە بەشی بەرهەمەکان دا، ئەم کتێبەی داگری ئەم شێعرەیە هەڵبژێرن و لە کۆتاییش دا بەدوای سەرناوی شێعری مەبەست‌تان بگەڕێن هەتا دەی‌دۆزنەوە.  
ئاگاداری: ئامێرێک کە دەتوانێ بۆ دۆزینەوەی سەرناوی شێعر یارمەتیو بدا، "بەڕیزکردنی شێعرەکان لە ئاڕا"یە کە شێعرەکان بە ئەلفوبێ لەڕوی یەکەم پیتیان‌، بەڕیز دەکات‌و ئێوە ئاسا‌ن‌تر دەتوانن شێعرەکەو وەبینن.

### بەشی گەڕانی ئاڵەکۆک بەکار بهێنن.
بە کرتە کردن لەسەر "<i class='material-icons'>search</i>" کە لە گۆشەی سەرەوە لای چەپە، بەشی گەڕان دەهێنرێت. لێرەدا دەتوانن بۆو وشە، یان سەرناو یان هەربەشێک لەشێعر بگەڕێن. تەنانەت دەتوانن بەدوای ڕێکەوتی نووسینی شێعریش‌دا بگەڕێن.  
ئاگاداری: لەکاتی گەڕان‌دا بەخەیاڵی ئاسوودە بنووسن‌و زۆر تامەزرۆی نووسینی ڕێنووسی دروست مەبن. چوونکی:  
- لە بەشی گەڕان‌دا هیچ جیاوازیەک نییە بەینی ("وو" و "و")، ("یی" و "ی")، ("لل" و "ل")، ("مم" و "م")، ("ل" و "ڵ")، ("و" و "ۆ")، ("ـە" و "هـ")، ("ر" و "ڕ") و زۆری تر. بەم جۆرە تەنانەت ئەگەر تەختەکلیلی کوردیش‌و نەبێت دەتوانن شێعری مەبەست‌تان وەدۆزن. بۆ نموونە هیچ جیاوازیەک بەینی ئەم سێ ڕێنووسەی خوارەوە نییەو هەر سێکیان دەتوانن بەکار بهێنن:  
- ئەرێ ئەی بە زولف و ڕوخسار
- ئەری ئەی بە زوڵف و روخسار
- ئه ری ئه ی بە زوولف و روخسار  
تکایە بە خەیاڵی ئاسوودە بگەڕێن و متمانەو هەبێ کە ئاڵەکۆک شێعری مەبەست‌تان دەدۆزێتەوە. ئەگەریش گەڕانەکەو هیچ ئەنجامێکی نەبوو، ڕێنووسەکەو بگۆڕن یان بەشێکی تری شێعرەکە(وشەیەکی تر، بەیتێکی تر، ...) بۆ گەڕان بەکار بهێنن.  

## ۲. خوێندنەوەی شێعر
ئاسان‌ترین بەشی ئاڵەکۆک، خوێندنەوەی شێعرە. و کۆمەڵێک ئامێریشمان بۆ یارمەتی‌دانی ئێوە لە خوێندنەوەی شێعردا ئامادە کردوە.  
بەشی ئامێرەکان، ئەم بەشەیە کە لە وێنەی خوارەوەدا نیشان دراوە. کاری ئامێرەکان بە پێی ژمارە لە ژێر وێنەکە شی کراوەتەوە.  
![ئامێرەکانی ئاڵەکۆک](toolbar.png "ئامێرەکانی ئاڵەکۆک")
- ۱. ئەمە ئەندازەی خەتی شێعر، گەورەتر دەکات.  
- ۲. ئەمە ئەندازەی خەتی شێعر، چووک‌تر دەکاتەوە.  
- ۳. نیشان‌کردنی شێعر. ئەگەر لەسەر ئەم دوکمەیە کرتە بکەن، ئەو شێعرە نیشانە دەکرێ و لەسەر کامپیوتێڕەکەتان پاشەکەوت دەکرێ و لەوەی بەدواوە هەر کات لەسەر ئەم کامپیوتێڕە سەردانی ئاڵەکۆک بکەن، شێعرە نیشان کراوەکانتان لە سەرەوە لای ڕاست بۆ دەهێنێت.  
ئەگەر لەمەو پێش شێعرێک‌و نیشانە کردووە، بۆ لابردنی نیشانەکە دەتوانن بچنە ناو لاپەڕەی شێعر و لەسەر ئەم دوکمە کرتە بکەن.  
- ۴. ئەم بەشە بۆخۆی پێک‌هاتووە لە چەند ئامێر. ئەو بەشە داگری ئەم ئامێرانەیە کە کەمتر لە ئامێرەکانی‌تر بەکار دێن هەر بۆیە بۆ پێش‌گرتن لە قەرەباڵغی، لێرە داندراون. ئامێرەکان پێک‌هاتوون لە:  
	- ۱.۴. لینک بۆ وەشانی ئەسڵی یان وەشانەکانی‌تری ئەم شێعرە لەسەر ماڵپەڕەکانی‌تر. ئەم وەشانانە لەوانەیە لەگەڵ وەشانی ئاڵەکۆک جیاوازیان هەبێت، لەوانەشە یەکسان بن.  
(ئەم تایبەتمەندیە بۆ هەموو شێعرەکان نییە و بۆ ئەوانەی کە هەشە لەوانەیەی لینکی هەڵەیان تێدابێت.)  
	- ۲.۴. گۆڕینی ئەلفوبێ بۆ لاتین.  
(لەوانەیە ئەم گۆڕانکارییە بێ‌هەڵە نەبێت. لەکاتی بەکارهێنانی دا وشیار بن.)  
	- ۳.۴. گەڕان بۆ واتای وشە لە "تەوار"دا.  
(تەوار، ئامێرێکە بۆ گەڕان بەدوای واتای وشە لە فەرهەنگە ئانلاینەکان‌دا(وەکوو: ئەناهیتا، کاوە و... .)  
(ئەم ئامێرە لێرەدا تەنیا لەفەرهەنگەکانی ئەناهیتا و کاوە بەدوای مانای وشە دەگەڕێ، ئەگەر تامەزرۆی دیتنی واتا لە فەرهەنگەکانی دیکەش دان، لەسەر "گەڕانی زیاتر لە 'تەوار'دا" کرتە بکەن.)  
بە خەیاڵێکی ئاسوودە شێعر وەخوێنن‌و لە ئامێرەکانیش کۆمەک وەرگرن.  

# ۳. پێداچوونەوەی شێعر
بەشی پێداچوونەوە، بەشی ژێرەوەی هەر شێعرەیە.  
لەوانەیە شێعرێک‌و زۆر بەلاوە جوان بێت یان هیچ خۆشی‌و لێ نەیە، لە بیرو بێ بیروڕای ئێوە هەمیشە بەنرخەو ئێوە ئازادن بیروبۆچوونی خۆتان لە خوارەوەی هەر شێعرێک‌دا بنووسن.  
شایەدیش لە کاتی خوێندنەوەی شێعردا، ڕەخنەیەکی تەکنیکی یان ئەدەبی‌ یان هەر جۆرێکی‌ترو پێ شک بێت. لەو کاتەش دا دەتوانن ڕەخنەکەتان لە بەشی ژێرەوەی شێعردا بنووسن و شی کەنەوە، تا لە زووترین کات‌دا لە لایەن ئێمە پێداچوونەوەی بەسەردا بکرێت.  
سەرنج بدەن نووسراوەکەتان بۆ هەمیشە لەسەر ئاڵەکۆک دەمێنێتەوە و هیچ کات بێ‌ئیزنی ئێوە پاک ناکرێتەوە. تەنیا یەک مەرج هەیە بۆ پاک کردنەوەی بیروڕا، ئەویش ئەوەیە کە بیروڕاکەتان بەنێوی کەسێکی ڕاستەقینەی‌تر نووسیبێ‌و ئەو داوامان لێ بکات پاکی کەینەوە.  
کەوایە نیگەران مەبن‌و بە ئاسوودەیی بیر و ڕای خۆتان بنووسن.  

# ۴. بڵاوکردنەوەی شێعر
لە لاپەڕەی هەر شێعرێک‌دا دەتوانن دەقی ئەم شێعرە کۆپی بکەن‌و بۆ هاوڕێکانتانی بنێرن. یان دەتوانن لەسەر دوکمەی "کۆپی کردن" لەسەرەوەی هەر شێعرەوە کرتە بکەن و تەواوی دەقی شێعرەکە کۆپی بکەن.   
(سەرنج بدەن، دوکمەی "کۆپی کردن" سەرناو و پەراوێزی شێعرەکە کۆپی ناکات، تەنیا دەقی شێعرەکە کۆپی دەکات.)  
ڕێگایەکی دیکەش ئەوەیە کە لینکی ئەو لاپەڕەی ئێستا خەریکی سەیر کردنین، بۆ هاوڕێکانتان بنێرن. کە بە بڕوای ئێمە ڕێگایەکی باش‌ترە لە ڕێگای سەرەوە. چون ئاڵەکۆک، بێجگە لەوەی کە کۆمەڵە ئامێرێکی زۆری هەیە بۆ یارمەتی‌دانی خوێنەر، شێعرەکان دروست‌تر و جوان‌تر و بە خێرایەکی زیاتر نیشان دەدا. بەڵام لە کۆتایی‌دا ئیختیار بەخۆتانە.  

ئەم دەقە، دەقێکی تەکنیکی نییە. دەقی تەکنیکی لە دەستی نووسین دایە، تکایە چاوەڕێ بن.  

`,
        html = converter.makeHtml(text);
        document.querySelector("main").innerHTML = html;
        var imgs = document.querySelectorAll("img");
        imgs.forEach( function (e) {
            e.onclick = function() {
                window.location = e.src;
            } 
        });
    </script>
    
    <div style="border-top:1px solid #ddd;margin:1em 0 0.8em;"></div>
    
    <div style="max-width:800px; margin:auto; padding:0 .2em;">
        <h3 style="font-size: .7em;">
            ئەگەر پرسیارێک‌و سەبارەت بە "چۆنیەتی بەکارهێنانی ئاڵەکۆک" هەیە دەتوانن لێرە بیپرسن.
        </h3>
        <small style="color:#555; font-size:.5em; display:block;">
            بۆ وەرگرتنی وەڵامی پرسیارەکەتان، سەردانی ئەم لاپەڕە بکەنەوە.
        </small>
        <form id="frmQA" action="save.php" method="POST">
            <textarea id="QAtxt" placeholder="پرسیارەکەو لێرە بنووسن..."></textarea>
            <div id="QAres"></div>
            <button type="submit" class='button btn' style="background:rgb(0,210,50); color:#fff;">ناردن</button>
        </form>
        
        <div>
            <?php
                if(filesize("QA.txt") > 0) {
                    
                    $f = fopen("QA.txt", "r");
                    $cc = fread($f, filesize("QA.txt"));
                    $cc = explode("\nend\n", $cc);
                    
                    echo "<h3 style='border-top: 1px solid #ddd;margin-top: 2em;font-size: .7em;padding: 1em;'>پرسیار و وەڵامەکان</h3>";
                    
                    foreach($cc as $c) {
                        if(!empty($c)) {
                            $c = str_replace(['[code]', '[/code]'], ['<code>', '</code>'], $c);
                            echo "<div class='comment'><div class='comm-body'>".$c."</div></div>";
                        }
                    }
                    
                    fclose($f);
                }
            
            ?>
        </div>
        
        <script>
        
            document.querySelector("#frmQA").addEventListener("submit", function(e) {
                e.preventDefault();
                
                var txt = document.querySelector("#QAtxt");
                var t = document.querySelector("#QAres");
                var loader = "<div class='loader'></div>";
                
                if(txt.value == "") {
                    txt.focus();
                    return;
                }
                
                t.innerHTML = loader;
                
                var x = new XMLHttpRequest();
                x.onload = function() {
                    if(this.responseText == "1") {
                        t.innerHTML = "<span style='background:rgba(0,255,0,.08); color:green;display:block;padding:1em; font-size:.6em;'>زۆرسپاس. تکایە بۆ وەرگرتنی وەڵامەکەتان سەردانی ئەم لاپەڕە بکەنەوە.</span>";
                        txt.value = "";
                    }
                }
                x.open("POST", "save.php", true);
                x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                x.send(`txt=${encodeURIComponent(txt.value)}`);
            });
        </script>
    </div>
    
</div>

<?php
	require_once("../script/php/footer.php");
?>