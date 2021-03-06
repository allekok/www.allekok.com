<?php
include_once("../script/php/constants.php");
include_once(ABSPATH . "script/php/colors.php");
include_once(ABSPATH . "script/php/functions.php");

$title = $_TITLE . " &rsaquo; گۆڕانکاری";
$desc = "گۆڕینی ئاڵەکۆک";
$keys = $_KEYS;
$t_desc = "";

include(ABSPATH . "script/php/header.php");
?>
<style>
 #set_theme, #set_lang, #toggle_ajaxsave, #set_font
 {
	 border-bottom:1px solid;
 }
 #set_theme, #user_codes, #set_lang, #toggle_ajaxsave, #set_font
 {
	 text-align:right;
	 font-size:.7em;
	 padding:.7em 1em;
 }
 #set_theme button
 {
	 font-size:inherit;
	 margin:0 .5em 0 0;
 }
 #set_theme_custom_colors
 {
	 font-size: .9em;
	 padding-top: 1em;
	 <?php if(!$_theme_custom) echo "display:none"; ?>
 }
 #set_theme_custom_colors ._colors_c
 {
	 display:inline-block;
	 padding:0;
	 margin-right:1em;
	 box-sizing:initial;
	 border:0;
	 height:2em;
	 width:3em;
	 vertical-align:text-bottom;
 }
 #set_theme_custom_colors ._colors,
 #set_theme_custom_colors ._back_img,
 #set_theme_custom_colors ._back_img_op
 {
	 display: inline-block;
	 padding: .1em .5em;
	 max-width: 100px;
	 direction: ltr;
	 text-align: left;
	 margin-right: .5em;
	 font-size:.9em;
 }
 #set_theme_custom_colors ._back_img {
	 width: 60%;
	 max-width: 500px;
 }
 #set_theme_custom_colors ._back_img_op {
	 width: 60%;
	 max-width: 200px;
 }
 #set_theme_custom_colors_submit
 {
	 padding:.5em 1em;
 }
 #user_codes small
 {
	 font-size:.85em;
	 text-indent:1em;
	 display:block;
 }
 #user_codes_text
 {
	 direction:ltr;
	 text-align:left;
	 width:100%;
	 font-family:'kurd',monospace;
	 font-size:.8em;
	 height:15em;
 }
 #user_codes button
 {
	 display:block;
	 margin:1em auto 0;
	 padding:1em 2em;
	 font-size:.8em;
 }
 .dropdown
 {
	 position:relative;
 }
 .dd-label
 {
	 cursor:pointer;
	 display:inline-block;
 }
 .dd-label:hover
 {
	 color:<?php echo $_colors[2]; ?>;
 }
 .dd-frame
 {
	 display:none;
	 border:1px solid;
	 border-radius:1em;
	 z-index:999;
	 position:absolute;
 }
 .dd-frame ul
 {
	 margin:0;
	 padding:0;
 }
 .dd-frame ul li
 {
	 display:block;
	 padding:0 .5em;
	 font-size:.9em;
 }
 .dd-frame button
 {
	 font-size:inherit;
	 display:block;
	 width:100%;
 }
 #dd-lang .dd-frame
 {
	 min-width:90px;
 }
 .dd-frame img
 {
	 max-width:100%;
	 display:block;
 }
 .dd-frame img:hover
 {
	 opacity:.5;
 }
 #dd-font .dd-frame
 {
	 max-width:320px;
 }
 .fontOpt p
 {
	 text-align:center;
	 font-size:.9em;
 }
 .fontOpt
 {
	 border-bottom:1px solid;
	 padding:.5em 0;
	 font-family:none;
 }
 #toggle_ajaxsave button
 {
	 font-size:1em;
	 padding:.5em;
 }
</style>
<div id="poets" style="text-align:right">
	<h1 class="color-blue" style="font-size:1em">
		گۆڕینی شێوەی ئاڵەکۆک
	</h1>
	<!-- Theme -->
	<div id="set_theme">
		<span>
			گۆڕینی ڕەنگ: 
		</span>
		<button type="button" id="set_theme_light">
			<i class="material-icons">brightness_5</i>
			ڕووناک
		</button>
		<button type="button" id="set_theme_dark">
			<i class="material-icons">brightness_2</i>
			تاریک
		</button>
		<button type="button" id="set_theme_custom">
			<i class="material-icons">settings</i>
			ڕەنگی‌تر
		</button>
		<div id="set_theme_custom_colors">
			<p>
				ڕەنگی پەڕە: <input type="text" class="_colors"
						   value="<?php echo $_colors[0]; ?>"
					    ><input type="color" class="_colors_c"
						    value="<?php echo $_colors[0]; ?>">
			</p>
			<p>
				ڕەنگی نووسراوە: <input type="text" class="_colors"
						       value="<?php echo $_colors[1]; ?>"
						><input type="color" class="_colors_c"
							      value="<?php echo $_colors[1]; ?>">
			</p>
			<p>
				ڕەنگی تایبەت: <input type="text" class="_colors"
						     value="<?php echo $_colors[2]; ?>"
					      ><input type="color" class="_colors_c"
						      value="<?php echo $_colors[2]; ?>">
			</p>
			<p>
				ڕەنگی هەڵە: <input type="text" class="_colors"
						   value="<?php echo $_colors[3]; ?>"
					    ><input type="color" class="_colors_c"
						    value="<?php echo $_colors[3]; ?>">
			</p>
			<p>
				وێنەی پەڕە: <input type="text" class="_back_img"
						   value="<?php echo @$_back_img; ?>"
						   placeholder="نیشانی ئینتێرنێتی وێنە" />
			</p>
			<p>
				گەورەیی وێنە:
				<select class="_back_img_size">
					<?php
					$back_sizes = ["cover", "auto", "contain"];
					foreach($back_sizes as $back_size) {
						echo "<option value='$back_size'";
						if($back_size == @$_back_img_size)
							echo " selected";
						echo ">$back_size</option>";
					}
					?>
				</select>
			</p>
			<p>
				دووپات بوونەوەی وێنە: 
				<select class="_back_img_repeat">
					<?php
					$repeats = ["no-repeat", "repeat",
						    "repeat-x", "repeat-y",
						    "round", "space"];
					foreach($repeats as $repeat) {
						echo "<option value='$repeat'";
						if($repeat == @$_back_img_repeat)
							echo " selected";
						echo ">$repeat</option>";
					}
					?>
				</select>
			</p>
			<p>
				پێوەست بوونی وێنە:
				<select class="_back_img_attach">
					<?php
					$attachments = ["fixed", "scroll", "local"];
					foreach($attachments as $attachment) {
						echo "<option value='$attachment'";
						if($attachment == @$_back_img_attach)
							echo " selected";
						echo ">$attachment</option>";
					}
					?>
				</select>
			</p>
			<p>
				جێگەی وێنە: 
				<select class="_back_img_pos">
					<?php
					$positions = ["center center", "center left",
						      "center right","bottom center",
						      "bottom left", "bottom right",
						      "top center", "top left", "top right"];
					foreach($positions as $position) {
						echo "<option value='$position'";
						if($position == @$_back_img_pos)
							echo " selected";
						echo ">$position</option>";
					}
					?>
				</select>
			</p>
			<p>
				کاڵ بوونەوەی وێنە: <input type="text" class="_back_img_op"
							  value="<?php echo @$_back_img_op; ?>"
							  placeholder="ژمارەیەک بەینی ٠.٠ تا ١.٠" />
			</p>
			<p style="text-align:center;padding-top:.7em">
				<button type="button" class="button"
					      style="font-size:.9em"
					      id="set_theme_custom_colors_submit"
				>پاشەکەوت کردن</button>
			</p>
		</div>
	</div>
	<!-- Language -->
	<div id="set_lang">
		<div class="dropdown" id="dd-lang">
			<span style="padding-left:1em">
				<?php P("language"); ?>:
			</span>
			<div class="dd-label"
			><?php echo SITE_LANGS[$site_lang]["lit"]; ?>
				<span class='material-icons'
				>keyboard_arrow_down</span></div>
			<div class="dd-frame">
				<ul>
					<?php
					foreach(SITE_LANGS as $k => $v)
					{
						if($site_lang != $k)
							echo "<li><button type='button' class='langOpt' L='$k'>" .
							     $v["lit"] . "</button></li>";
						else
							echo "<li style='opacity:.75'>" . $v["lit"] . "</li>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!-- Toggle Ajax -->
	<div id="toggle_ajaxsave">
		<span style="padding-left:1em">
			پاشەکەوت‌کردنی لاپەڕەکان:
		</span>
		<button type="button" class="button material-icons back-blue color-white"
			id="toggle_ajaxsave_btn">
			check
		</button>
	</div>
	<!-- Font -->
	<div id="set_font">
		<div class="dropdown" id="dd-font">
			<span style="padding-left:1em">
				قەڵەم:
			</span>
			<div class="dd-label"
			><?php
			 if(!empty(@$_COOKIE["font"]) and
				 @$_COOKIE["font"]!="null") {
				 $font = filter_var($_COOKIE["font"], FILTER_SANITIZE_STRING);
				 $font_name = substr($font, 0, strrpos($font, "."));
				 echo $font_name;
			 }
			 else
				 echo "نەسخ";
			 ?>
				<span class='material-icons'
				>keyboard_arrow_down</span></div>
			<div class="dd-frame">
				<ul>
					<li style="margin:0 .5em;padding:1em 0;
						   border-bottom:1px solid">
						<p style="font-size:.8em">
							بەکارهێنانی قەڵەمێکی سەرهێڵ: 
						</p>
						<div style="display:flex">
							<input type="text" placeholder="نیشانی ئینتێرنێتی قەڵەم"
							       id="internet-font-txt"
							       style="direction:ltr;text-align:center;width:100%"
							       value="<?php echo @$_COOKIE["interfont"]; ?>" />
							<button type="button" id="internet-font-btn"
								style="text-align:center;width:20%;
								      font-size:.8em;border-radius:50%;
								      margin-right:.5em"
							>ناردن</button>
						</div>
					</li>
					<li>
						<button style="text-align:center;
							       border-bottom:1px solid;
							       padding:1em 0"
							       class="fontOpt" type="button" L=""
						>نەسخ</button>
					</li>
					<?php
					$fonts = json_decode(
						file_get_contents("fonts/list.txt"), true);
					foreach($fonts as $o)
					{
						echo "<li><button type='button' class='fontOpt' F='{$o[0]}.{$o[2]}'
><p>{$o[0]}</p><img lsrc='fonts/font-imgs/{$o[0]}.{$o[1]}'></button></li>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!-- User codes -->
	<div id="user_codes">
		<span>
			کۆدەکانی بەکارهێنەر:
		</span>
		<small>
			ئەم کۆدانە کە بە زمانی Javascript دەبێ بنووسرێن، لەکاتی هێنانی ئاڵەکۆک‌دا ئیجرا دەکرێن.
		</small>
		<textarea id="user_codes_text"
			  placeholder="/* Javascript Code */"></textarea>
		<button type="button" class="button" id="user_codes_button">
			پاشەکەوت کردن
		</button>
	</div>
</div>
<script>
 const themes = ['light' , 'dark' , 'custom'],
       user_codes_storage_name = 'user-codes',
       user_codes_storage = localStorage.getItem(user_codes_storage_name);
 
 function set_theme(kind)
 {
	 if(themes.indexOf(kind) === -1)
		 return false;
	 
	 const days = 1000;
	 let expires = new Date();
	 expires.setTime(expires.getTime() + (days*24*3600*1000));
	 expires = expires.toUTCString();
	 document.cookie = `theme=${kind};expires=${expires};path=/`;
	 document.getElementById(`set_theme_${kind}`).
		  querySelector(".material-icons").innerText = "sync";
	 button_select(kind);
	 window.location.reload();
 }
 function button_select(kind)
 {
	 const target = `set_theme_${kind}`;
	 
	 for(const i in themes)
	 {
		 const id = `set_theme_${themes[i]}`,
		       el = document.getElementById(id);
		 
		 if(id == target)
			 el.className = "selected";
		 else
			 el.className = "";
	 }
 }
 if(document.cookie)
 {
	 const cookies = document.cookie.split(';');
	 
	 for(const i in cookies)
	 {
		 const c = cookies[i].split('=');
		 if(c[0].trim() == "theme")
		 {
			 if(themes.indexOf(c[1]) !== -1)
				 button_select(c[1]);
			 break;
		 }
		 else
		 {
			 button_select("light");
		 }
	 }
 }
 else
 {
	 button_select("light");
 }
 function save_user_codes(text_id, submit_button)
 {
	 const user_codes = document.getElementById(text_id);
	 localStorage.setItem(user_codes_storage_name,
			      user_codes.value);
	 
	 submit_button.className = 'button btn-selected color-white';
	 submit_button.innerHTML = 'پاشەکەوت کرا.';
	 setTimeout(function ()
		 {
			 submit_button.className = 'button';
			 submit_button.innerHTML = 'پاشەکەوت کردن';
		 }, 3000);
 }
 function set_colors ()
 {
	 let colors = [];
	 document.getElementById('set_theme_custom_colors').
		  querySelectorAll('._colors').forEach((o) => {
			  colors.push(o.value);
		  });
	 set_cookie('colors', colors.join(','));
	 window.location.reload();
 }
 function set_back_img ()
 {
	 const parent = document.getElementById('set_theme_custom_colors');
	 let img = parent.querySelector('._back_img').value.trim(),
	     img_size = parent.querySelector('._back_img_size').value.trim(),
	     img_repeat = parent.querySelector('._back_img_repeat').value.trim(),
	     img_attach = parent.querySelector('._back_img_attach').value.trim(),
	     img_pos = parent.querySelector('._back_img_pos').value.trim(),
	     img_op = parent.querySelector('._back_img_op').value.trim();
	 set_cookie('backimg', encodeURIComponent(img));
	 set_cookie('backimgsize', img_size);
	 set_cookie('backimgrepeat', img_repeat);
	 set_cookie('backimgattach', img_attach);
	 set_cookie('backimgpos', img_pos);
	 set_cookie('backimgop', img_op);
	 window.location.reload();
 }
 if(user_codes_storage)
	 document.getElementById('user_codes_text').value = user_codes_storage;
 document.getElementById('set_theme_light').onclick = function(){set_theme('light')}
 document.getElementById('set_theme_dark').onclick = function(){set_theme('dark')}
 document.getElementById('set_theme_custom_colors_submit').onclick = () => {set_colors();set_back_img()};
 document.getElementById('set_theme_custom').onclick = () => {set_theme('custom')};
 document.getElementById('set_theme_custom_colors').
	  querySelectorAll('._colors_c').forEach((o) => {
		  o.addEventListener("input", () => {
			  o.parentNode.querySelector('._colors').value = o.value;
		  });
	  });
 const user_codes_button = document.getElementById('user_codes_button');
 user_codes_button.onclick = function(){save_user_codes('user_codes_text',user_codes_button)}

 function set_cookie (cookie_name, value, days=1000, path="/")
 {
	 let expires = new Date();
	 expires.setTime(expires.getTime() + (days*24*3600*1000));
	 expires = expires.toUTCString();
	 const cookie = `${cookie_name}=${value};expires=${expires};path=${path}`;
	 document.cookie = cookie;
	 return cookie;
 }
 function toggle (label, target)
 {
	 const icon = label.querySelector(".material-icons");
	 if(target.style.display != "block")
	 {
		 target.style.display = "block";
		 icon.innerText = "keyboard_arrow_up";
	 }
	 else
	 {
		 target.style.display = "none";
		 icon.innerText = "keyboard_arrow_down";
	 }
 }
 const dd_font = document.getElementById("dd-font");
 const dd_font_label = dd_font.querySelector(".dd-label");
 const dd_font_frame = dd_font.querySelector(".dd-frame");
 dd_font_label.addEventListener("click", function () {
	 dd_font_frame.querySelectorAll(".fontOpt img").forEach((img) => {
		 img.src = img.getAttribute("lsrc");
	 });
	 toggle(dd_font_label, dd_font_frame);
 });
 const dd_lang = document.getElementById("dd-lang");
 const dd_lang_label = dd_lang.querySelector(".dd-label");
 const dd_lang_frame = dd_lang.querySelector(".dd-frame");
 dd_lang_label.addEventListener("click", function () {
	 toggle(dd_lang_label, dd_lang_frame);
 });
 function set_interfont (font)
 {
	 set_cookie("interfont", encodeURIComponent(font));
	 window.location.reload();
	 toggle(dd_font_label, dd_font_frame);
	 dd_font_label.querySelector(".material-icons").innerText = "sync";
 }
 function set_font (font)
 {
	 set_cookie("interfont", "");
	 set_cookie("font", font);
	 window.location.reload();
	 toggle(dd_font_label, dd_font_frame);
	 dd_font_label.querySelector(".material-icons").innerText = "sync";
 }
 document.querySelectorAll(".fontOpt").forEach(function (o) {
	 o.addEventListener("click", function () {
		 set_font(o.getAttribute("F"));
	 });
 });
 document.querySelector("#internet-font-btn").
	  addEventListener("click", function () {
		  set_interfont(document.querySelector(
			  "#internet-font-txt").value.trim());
	  });
 function set_lang (lang)
 {
	 set_cookie("lang", lang);
	 window.location.reload();
	 toggle(dd_lang_label, dd_lang_frame);
	 dd_lang_label.querySelector(".material-icons").innerText = "sync";
 }
 document.querySelectorAll(".langOpt").forEach(function (o) {
	 o.addEventListener("click", function () {
		 set_lang(o.getAttribute("L"));
	 });
 });
 function get_cookie (key)
 {
	 if(document.cookie)
	 {
		 const cookies = document.cookie.split(';');
		 
		 for(const i in cookies)
		 {
			 const c = cookies[i].split('=');
			 if(c[0].trim() == key)
			 {
				 return c[1];
				 break;
			 }
		 }
	 }
	 return false;
 }
 const toggle_ajaxsave_btn = document.getElementById("toggle_ajaxsave_btn");
 toggle_ajaxsave_btn.addEventListener("click", toggle_ajaxsave);
 const _temp = (get_cookie("ajax_save_p") === "0");
 if(_temp)
 {
	 toggle_ajaxsave_btn.innerText = "close";
	 toggle_ajaxsave_btn.classList.remove("back-blue");
	 toggle_ajaxsave_btn.classList.remove("color-white");
 }
 function toggle_ajaxsave ()
 {
	 const state = get_cookie("ajax_save_p");
	 if(state === "0")
	 {
		 set_cookie("ajax_save_p", "1");
		 toggle_ajaxsave_btn.innerText = "check";
	 }
	 else
	 {
		 set_cookie("ajax_save_p", "0");
		 toggle_ajaxsave_btn.innerText = "close";
	 }
	 toggle_ajaxsave_btn.innerText = "sync";
	 window.location.reload();
 }
</script>
<?php
include_once(ABSPATH . "script/php/footer.php");
?>
