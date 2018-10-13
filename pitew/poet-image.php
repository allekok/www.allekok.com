<?php

if(! defined('ABSPATH'))    define('ABSPATH', '/home/allekokc/public_html/');

	require_once("../script/php/colors.php");
	require_once("../script/php/constants.php");
	require_once("../script/php/functions.php");
	
	// check for uploads
	
	if(! empty($_GET['name']) ) $_name1 = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
	if(! empty($_GET['poet']) ) $_poet1 = filter_var($_GET['poet'], FILTER_SANITIZE_STRING);
    
    if(isset($_FILES['profile']) && isset($_COOKIE['poet'])) {
        
        $_profile = $_FILES["profile"];
        $_poet = filter_var($_COOKIE['poet'], FILTER_SANITIZE_STRING);
        $_name = filter_var($_COOKIE['name'], FILTER_SANITIZE_STRING);
        $_poet = str_replace("/","",$_poet);
        $_name = str_replace("/","",$_name);
        $t = time();
        
        $_cnn = $_name ? $_name : $_SERVER['REMOTE_ADDR'];
        
        $_profile_dist = "../style/img/poets/new/{$_poet}_{$_cnn}_{$t}.".substr($_profile['type'], 6);
        
        $_frmts = array("image/jpeg", "image/png");
        

        if(! ( file_exists($_profile_dist) ) && $_profile['size']<=5242880 && in_array($_profile['type'], $_frmts)) {
            
            if( move_uploaded_file($_profile['tmp_name'], $_profile_dist) ) {
                
                $uploaded = "<i style='font-size:0.7em;color:#444;background:rgba(0,250,0,0.1);padding:.3em;display: block;margin-top: .8em;'>زۆر سپاس بۆ ئێوە. ئەو وێنە دوای پێداچوونەوە لەسەر ئاڵەکۆک دادەندرێ.</i><img src='{$_profile_dist}' onclick=\"window.location='{$_profile_dist}';\" id='profilepic' style='width:100%;margin:auto;display:block;min-width:70px;max-width:200px;cursor:pointer;'>";
            }
        }
    }
    // //////////

$title = _TITLE . " &raquo; پتەوکردنی ئاڵەکۆک &raquo; ناردنی وێنەی شاعیران";
$desc = "ناردنی وێنەی شاعیران بۆ ئاڵەکۆک";
$keys = _KEYS;
$t_desc = "";
$t_class = "ltitle";
$color_num = 0;

	require('../script/php/header.php');
	
?>

<div id="poets">
    
<p id='adrs'>
    <?php
        $__allekok_url = _SITE;
    ?>
<a href="<?php echo $__allekok_url; ?>" style='background-image:url(/style/img/allekok.png);background-repeat:no-repeat;background-position: 3.7em 0.1em;padding-right: 1.8em;background-size: 1.6em;'>ئاڵەکۆک</a>
<i style='vertical-align:middle;' class='material-icons'>keyboard_arrow_left</i>

<a href="first.php">
    <i style='vertical-align:middle;color:transparent;border-radius:100%;border:2px dashed #aaa;' class='material-icons'>person</i> پتەوکردنی ئاڵەکۆک
</a>
<i style='vertical-align:middle;' class='material-icons'>keyboard_arrow_left</i>

<i style='vertical-align:middle;' class='material-icons'>image</i>
    ناردنی وێنەی شاعیران
</p>

    <h1 style="background: rgba(128, 0, 128, 0.05);color: rgb(128, 0, 128);display: inline-block;padding: 0.1em 0.8em 0;border-radius: 5px;margin: 1em 0;">
        ناردنی وێنەی شاعیران
    
    </h1>
    <br>
    
    <script>
    function check() {
        var poet = document.querySelector("#poetTxt");
        
        if(poet.value == "") {
            poet.style.borderTopColor = "rgb(128, 0, 128)";
            poet.style.background = "";
            return;
        }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                var res = JSON.parse(this.responseText);
                
                if(res.id != "0") {
                    poet.style.borderTopColor = colors[res.id][0];
                    poet.style.backgroundColor = colors[res.id][2];
                    poet.style.backgroundImage = `url(/style/img/poets/profile/profile_${res.img}.jpg`;
                    poet.style.backgroundRepeat = "no-repeat";
                    poet.style.backgroundSize = "auto 100%";
                    poet.style.backgroundPosition = "left center";
                } else {
                    poet.style.borderTopColor = "rgb(128, 0, 128)";
                    poet.style.background = "";
                }
            }
            xmlhttp.open("get", "isitnew.php?poet="+poet.value, true);
            xmlhttp.send();
    }
    </script>
    
    <div style='font-size:.75em'>
        <?php echo $uploaded; ?>
        </div>
    <!-- file upload sec -->
    <form id="frmUpload" method="POST" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding-top:1em;font-size:0.7em">
        <input type="text" id="cntriTxt" name="cntri" style="font-size:1em;padding:0.6em 3% 0.6em 2%;text-align:right;max-width:94%;min-width:94%;min-height:2.5em;border-top:3px solid rgb(128, 0, 128);display:block;margin:0.5em auto 1.5em;box-shadow: 0 5px 10px -5px #ddd;" value="<?php echo $_name1; ?>" placeholder="نێوی خۆتان لێرە بنووسن.">
        <input onblur="check()" type="text" id="poetTxt" name="poet" style="font-size:1em;padding:0.6em 3% 0.6em 2%;text-align:right;max-width:94%;min-width:94%;min-height:2.5em;border-top:3px solid rgb(128, 0, 128);display:block;margin:0.5em auto 1.5em;box-shadow: 0 5px 10px -5px #ddd;" value="<?php echo $_poet1; ?>" placeholder="نێوی شاعیر *">
        <?php if(isset($_poet1)) { ?>
            <script>check()</script>
        <?php } ?>
        <div class='file-btn button' role='button' onclick="document.querySelector('input[name=profile]').click()" style="display:inline-block;font-size: 1.7em;">
            هەڵبژاردنی وێنە
            </div><br>
            <div style='font-size:.7em; color:#555;'>
                &bull; فۆرمەتی وێنەکەتان دەبێ JPG, JPEG, PNG بێت.
                <br>
                &bull; گەورەیی وێنەکە نابێ لە 5MB زیاتر بێت.
            </div>
        <input type="file" style='display:none;' name="profile">
        <div id="frmUploadMess"></div>
        <button class='button bth' type="submit" style="width: 45%;max-width: 150px;background-color:rgb(128, 0, 128);color:white;margin-top:1em;font-size: 1em;">ناردن</button>
    </form>
    
    <div style="margin-top:2em;">
        <a class='button' href="image-list.php">
             ئەو وێنانەی کە ناردووتانە
        </a>
    </div>
    
    <script>
        // localStorage
            
        if(localStorage.getItem("contributor") !== null) {
            document.querySelector("#cntriTxt").value = JSON.parse(localStorage.getItem("contributor")).name || "";
        }
        
        ///
        document.querySelector("#frmUpload").addEventListener("submit", function(e) {
           
            e.preventDefault();
            
            var poetTxt = document.querySelector("#poetTxt");
            var nameTxt = document.querySelector("#cntriTxt");
            var fl = document.querySelector("input[name=profile]");
            var flbtn = document.querySelector(".file-btn");
            if(poetTxt.value == "") {
                poetTxt.style.borderTopColor = "rgb(204,51,0)";
                poetTxt.style.background = "rgba(204,51,0,0.1)";
                poetTxt.focus();
                setTimeout(function() {
                    poetTxt.style.borderTopColor = "rgb(128, 0, 128)";
                    poetTxt.style.background = "";
                }, 2000);
                return;
            }
            if(fl.value == "") {
                flbtn.style.background = "rgba(204,51,0,0.2)";
                
                setTimeout(function() {
                    flbtn.style.background = "";
                }, 2000);
                return;
            }
            
            var frmts = ["image/jpeg", "image/png"];
            if(frmts.indexOf(fl.files[0].type) ==-1) {
                document.querySelector("#frmUploadMess").innerHTML = "<i style='background:rgba(204,51,0,0.1);color:#444;font-size:.7em;display:block;padding:0.3em'>ئەو شتەی هەڵتانبژاردووە وێنە نییە، وێنەیەک هەڵبژێرن.</i>";
                return;
            }
            if(fl.files[0].size > 5242880) {
                document.querySelector("#frmUploadMess").innerHTML = "<i style='background:rgba(204,51,0,0.1);color:#444;font-size:.7em;display:block;padding:0.3em'>نابێ گەورەیی وێنەکەتان لە 5MB زیاتر بێت.</i>";
                return;
            }
            
            //localStorage
                var email = "";
                if(localStorage.getItem("contributor") !== null) {
                    var email = JSON.parse(localStorage.getItem("contributor")).ID || "";
                }
                localStorage.setItem("contributor", JSON.stringify({name: nameTxt.value, ID: email}));
            ///
            
            document.cookie = "poet="+poetTxt.value;
            document.cookie = "name="+nameTxt.value;
            
            document.querySelector("#frmUpload").submit();
            document.querySelector("#frmUploadMess").innerHTML="<div class='loader' style='border-top:1px solid rgb(128, 0, 128)'></div>";
            
        });
    </script>
    
</div>

<?php
	require_once("../script/php/footer.php");
?>