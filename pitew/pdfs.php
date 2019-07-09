<?php
include_once("../script/php/constants.php");
include_once(ABSPATH . "script/php/colors.php");
include_once(ABSPATH . "script/php/functions.php");

$title = _TITLE . " &raquo; پتەوکردنی ئاڵەکۆک &raquo; داگرتنی دیوانی شاعیران";
$desc = "داگرتنی دیوانی شاعیران بە فۆڕمەتی PDF";
$keys = _KEYS;
$t_desc = "";
$color_num = 0;

include(ABSPATH . 'script/php/header.php');
?>
<div id="poets" style="max-width:1000px">
    
    <div id='adrs'>
        <a href="first.php">
            پتەوکردنی ئاڵەکۆک
        </a>
        <i> &rsaquo; </i>
	<a href="index.php">
            <i class='material-icons'>note_add</i>
            نووسینی شێعر
        </a>
        <i> &rsaquo; </i>
	<div id="current-location" class="color-555">
            <i class='material-icons'>cloud_download</i>
            داگرتنی دیوانی شاعیران
        </div>
    </div>
    
    <style>
     .eee {
         text-align:right;
         font-size:.6em;
         padding:.2em 1em;
     }
     .eee-nfo {
	 font-size:.65em;
         font-family:monospace;
     }
     .eee span {
	 font-size:.85;
     }
     .eee-desc {
	 font-size:.85em;
         padding:0 1em 1em;
         margin-right:1em;
         display:none;
     }
     .eee .material-icons {
	 vertical-align: middle;
         font-size: 1.5em;
         margin-right: .1em;
         cursor:pointer;
     }
     .eee .material-icons:hover {
         opacity:.7;
     }
     #filter-txt {
	 max-width: 1200px;
	 width: 100%;
	 font-size: .65em;
	 margin-bottom:.5em;
     }
    </style>
    
    <div>
	<input type="text" id="filter-txt" onkeyup="_filter()"
	       placeholder="گەڕان لە کتێبەکان‌دا...">
    </div>
    
    <main id="main">
<?php
$base = "https://allekok.github.io/diwan/";
$list_uri = "pdfs.txt";
$list = file_exists($list_uri) ?
	explode("\n\n",
		file_get_contents($list_uri)) : [];
$list[] = "فەقێ تەیران - دیوان\t\t277.9MB";
$list[] = "سافی هیرانی - دیوان ۲\t\t234.1MB\t\tلەلایان \"کەماڵ ڕەحمانی\".";
sort($list);

for($i = 0; $i<count($list); $i++)
{
    $num = num_convert($i+1, "en", "ckb");
    $list[$i] = explode("\t\t", $list[$i]);
    $name = str_replace(".pdf", "", strtolower($list[$i][0]));
    if($name === "فەقێ تەیران - دیوان")
    {
        echo "<div class='eee'><span class='color-555'>$num.</span> <a href='https://archive.org/download/sarabia_20160323/%D8%AF%DB%8C%D9%88%D8%A7%D9%86%DB%8C%20%D9%81%DB%95%D9%82%DB%8E%20%D8%AA%DB%95%DB%8C%D8%B1%D8%A7%D9%86.pdf'>$name</a> <i class='eee-nfo color-555'>({$list[$i][1]} ,PDF)</i></div>";
    }
    elseif($name == "سافی هیرانی - دیوان ۲")
    {
        echo "<div class='eee'><span class='color-555'>$num.</span> <a href='https://archive.org/download/safi_hirani_diwan/%D8%B3%D8%A7%D9%81%DB%8C%20%D9%87%DB%8C%D8%B1%D8%A7%D9%86%DB%8C%20-%20%D8%AF%DB%8C%D9%88%D8%A7%D9%86.pdf'>$name</a> <i class='eee-nfo color-555'>({$list[$i][1]} ,PDF)</i>";
        echo "<i class='material-icons' onclick='roll(this)'>info_outline</i>";
        $list[$i][2] = str_replace("\n", "<br>", $list[$i][2]);
        echo "<div class='eee-desc color-555'>{$list[$i][2]}</div></div>";
    }
    else
    {
        echo "<div class='eee'><span class='color-555'>$num.</span> <a href='$base{$list[$i][0]}'>$name</a> <i class='eee-nfo color-555'>({$list[$i][1]} ,PDF)</i>";
        if(@$list[$i][2])
	{
            echo "<i class='material-icons' onclick='roll(this)'>info_outline</i>";
            $list[$i][2] = str_replace("\n", "<br>", $list[$i][2]);
            echo "<div class='eee-desc color-555'>{$list[$i][2]}</div>";
        }
        echo "</div>";
    }
}
?>
    </main>
    <script>
     function roll(obj)
     {
	 const desc = obj.parentNode.querySelector(".eee-desc");
	 if(desc.style.display == "block")
	 {
             desc.style.display = "none";
             obj.innerHTML = "info_outline";
	 }
	 else
	 {
             desc.style.display = "block";
             obj.innerHTML = "keyboard_arrow_up";
	 }
     }

     const needle = document.getElementById("filter-txt"),
	   context = document.getElementById("main").querySelectorAll(".eee");
     function _filter()
     {
	 filterp(needle.value, context);
     }     
    </script>
</div>
<?php
include_once(ABSPATH . "script/php/footer.php");
?>
