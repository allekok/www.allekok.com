<?php
$no_head = isset($_GET['nohead']);
if(!$no_head) {
?>
    <!DOCTYPE html>
    <?php
    if(@$ath)
	$ogimg = _SITE.get_poet_image($ath,false);
    else 
	$ogimg = _SITE.'logo/logo-128.jpg';
    ?>
    <html dir='<?php echo $site_dir; ?>' lang='<?php echo $site_lang_cc; ?>'>
	<head>
	    <script>	 
             if ('serviceWorker' in navigator)
		 navigator.serviceWorker.register('<?php echo _R; ?>sw.js');
	    </script>
	    <link rel='stylesheet'
		  href='<?php echo _R;
			?>style/css/<?php
				    echo $_theme_dark ? 
					 'main-dark-comp.css' :
					 'main-comp.css';
				    ?>?v49'/>
	    <title>
		<?php echo $title; ?>
	    </title>
	    <style>
	     @font-face{font-family:'Material Icons';font-display:swap;font-style:normal;font-weight:400;src:url('<?php echo _R; ?>style/font/Material-Icons.woff2') format('woff2')}
	     <?php if(!empty(@$_COOKIE["font"]) and
		 @$_COOKIE["font"]!="null") {
		 $font = filter_var($_COOKIE["font"], FILTER_SANITIZE_STRING);
		 $fname_ = substr($font, 0, strrpos($font, "."));
		 $fformat = substr($font, strrpos($font, ".")+1);
		 if($fformat == "ttf") $fformat = "truetype";
		 elseif($fformat == "otf") $fformat = "opentype";
		 echo "@font-face{font-family:'{$fname_}';font-display:swap;font-style:normal;src:url('"._R."customize/fonts/font-files/{$font}') format('{$fformat}')}
body{font-family:'{$fname_}'}";
	     } else { ?>
	     @font-face{font-family:'kurd';font-display:swap;font-style:normal;font-weight:400;src:url('<?php echo _R; ?>style/font/DroidNaskh-Regular.woff2') format('woff2')}
	     <?php } ?>
	     <?php if($_theme_custom) {
		 echo "body,.dd-frame,.search-main .dropdown-content{background:{$_colors[0]}}.button:hover,.fontsize button:hover,.toolbar a:hover,.icon-round,.color-white{color:{$_colors[0]}}body,input,textarea,button,a,.color-black,#hon sup:hover{color:{$_colors[1]}}.icon-round{background:{$_colors[1]}}.button:hover,.fontsize button:hover,.toolbar a:hover,.btn-selected,.back-blue,.loader,.loader-round{background:{$_colors[2]}}#hon sup,.poet:hover,.color-blue,.selected,.link-color,.link:hover,a:hover,button:hover,.search-main .cb:hover,.bks p,.poetdesc p,#search-res #bhon,.bhoh-newdaq,#main-contributing h1,#main-contributing h2,#main-contributing h3,#main-manual h1,#main-manual h2,#main-manual h3{color:{$_colors[2]}}.border-blue,input:focus,textarea:focus,.link-underline,#main-contributing a{border-color:{$_colors[2]}}.color-red{color:${$_colors[3]}}.back-red{background:{$_colors[3]}}";
	     }
	     ?>
	    </style>
	    <meta charset='utf-8'>
	    <meta name='viewport' content='width=device-width, initial-scale=1'>
	    <meta name='description' content='<?php echo $desc; ?>'>
	    <meta name='keywords' content='<?php echo $keys; ?>'>
	    <meta property='og:title' content='<?php echo $desc; ?>' />
	    <meta property='og:description' content='' />
	    <meta property='og:type' content='website' />
	    <meta property='og:image' content='<?php echo $ogimg; ?>' />
	    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo _R; ?>favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo _R; ?>favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo _R; ?>favicon/favicon-16x16.png">
	    <link rel="manifest" href="<?php echo _R; ?>favicon/site.webmanifest">
	    <link rel="mask-icon" href="<?php echo _R; ?>favicon/safari-pinned-tab.svg" color="#5bbad5">
	    <link rel="shortcut icon" href="<?php echo _R; ?>favicon/favicon.ico">
	    <meta name="msapplication-TileColor" content="#2d89ef">
	    <meta name="msapplication-config" content="<?php echo _R; ?>favicon/browserconfig.xml">
	    <meta name="theme-color" content="#ffffff">
	</head>
	<body>
	    <!-- Header -->
	    <header>
		<!-- Title -->
		<a href='<?php echo _R; ?>'>
		    <h1><?php echo SP("title"); ?></h1>
		</a>
		<?php if(@!$is_it_search) { ?>
		    <!-- Search Icon -->
		    <button id='tS' class='header-icon material-icons'
			    style='<?php echo $site_anti_align; ?>:0'>search</button>
		<?php } // @!$is_it_search ?>
		<!-- Bookmarks Icon -->
		<button id='tL' class='header-icon material-icons'
			style='<?php echo $site_anti_align; ?>:1.3em;display:none'
		>bookmark</button>
	    </header>
	    <?php if(@!$is_it_search) { ?>
		<!-- Search Section -->
		<div id='search'>
		    <form id='search-form' action='<?php echo _R; ?>' method='GET'
		    ><input type='text'
			    id='search-key'
			    onkeyup='search(event)'
			    placeholder='<?php P("search for"); ?>' name='q'
		     ><button type='submit'
			      id='search-btn'
			      class='material-icons'
		      >search</button></form>
		    <div id='search-res'></div>
		</div>
	    <?php } // @!$is_it_search ?>
	    <!-- Bookmarks -->
	    <div id='tL-res' style='display:none'>
		<div id='tL-res-res'></div>
	    </div>
<?php
} // no-head
?>
<main id="MAIN">
    <?php
    if($no_head) {
    ?>
	<script>
	 document.title = `<?php echo html_entity_decode($title); ?>`;
	</script>
    <?php
    }
    ?>
