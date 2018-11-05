<div id="poets" class="poetarticle">

<div class='poet'<?php if($row['kind']=='bayt') echo " style='margin-bottom:0;'"; ?>>

<?php
    $imgsrc = get_poet_image($ath, "pro-460", 1);
?>
<div class='poetimg'>
    <div style='position:relative'>
<img alt="<?php echo $row['profname']; ?>" class='pro-460' src="<?php echo $imgsrc; ?>"/>
<a href='/pitew/poet-image.php?poet=<?php echo $row['takh']; ?>' style="position: absolute;bottom: 0;right: 0;padding: .2em;border-radius: .2em 0 0 0;font-size: 1.15em;opacity:.7;" class="material-icons button" title="ناردنی وێنەی تازە">add_a_photo</a>
</div>
<?php 

    function make_list($_dir, $id) {
      if(! is_dir($_dir) )
        return 0;
    
      $d = opendir($_dir);
      $_list = array();
    
      while( false !== ($entry = readdir($d))) {
        if(_unlist($entry)) {
            $uri = "/style/img/poets/gallery/{$id}/".$entry;
            $e = $entry;
            $entry=array();
            $entry["uri"] = $uri;
            $entry["name"] = $e;
            $e = str_replace("jpg", "jpeg", $e);
            $entry["origin"] = "/style/img/poets/new/{$e}";
            if(file_exists("/home/allekokc/public_html" . $entry["origin"])) {
                $e = str_replace("jpeg", "png", $e);
            $entry["origin"] = "/style/img/poets/new/{$e}";
            }
            array_unshift($entry, filemtime("/home/allekokc/public_html" . $uri));
            $_list[] = $entry;
        }
      }
    
      if(sort($_list))  return $_list;
    }
    
    function _unlist($v) {
      $_Vs = array(".", "..");
      if(! in_array($v, $_Vs) ) return $v;
    }
    
    $_list = make_list(ABSPATH."style/img/poets/gallery/{$row['id']}/", $row['id']);

    if(!empty($_list)) {
        ?>
        
        <div class='gallery'>
            <img src="<?php echo $imgsrc; ?>"><?php

                foreach($_list as $_l) {
                    echo "<img src='{$_l['uri']}'>";
                }
            ?>
        </div>
        <script>
            var imgs = document.querySelectorAll(".gallery img");
            var p460 = document.querySelector('.pro-460');
            var imgW = window.innerWidth / imgs.length; // ?px
            var maximgW = 60; // px
            var imgW = (imgW<maximgW) ? imgW : maximgW;
            
            imgs.forEach(function(e) {
                e.addEventListener("click",function() {
                    p460.src = e.src;
                    p460.style.borderRadius = "0";
                    document.querySelector(".poetimg").style.borderRadius = "0";
                });
                if(imgW<maximgW) {
                    e.style.width = imgW + "px";
                }
            });
        </script>
        
        <?php
    }
    ?>
</div>
<div id='adrs'>
<div id="current-location">
<?php
    echo $row['profname'];
?>
</div>
</div>
<div class='bks'<? if($row['kind']=='bayt') { echo " style='padding:0;width:100%;display:block;'";} ?>>
<p style="background-color: <?php echo($colors[$row['id']][0]) ?>;color: <?php echo($colors[$row['id']][1]) ?>;"><?php if($row['kind'] != "bayt") { ?> بەرهەمەکانی <?php echo $row['profname']; } else { echo "بەیتەکان"; }?></p>
<?php
$rbks = explode(',',$row['bks']);
$rbkscomp = explode(',',$row['bks_completion']);
for($i=0;$i<count($rbks);$i++) {

$rbks[$i] = explode("/", $rbks[$i]);

$rbks[$i] = !$rbks[$i][1] ? $rbks[$i][0] : "<i style='font-style: normal;font-size: .8em;color: #444;'>{$rbks[$i][0]}</i><i style='color: {$colors[$row['id']][3]};font-size: .9em;padding: 0 .1em;'>/</i>{$rbks[$i][1]}";

$b = $i+1;
echo("<a href='/poet:" . $row['id'] . "/book:" . $b . "'>" . 
$rbks[$i] . '</a>');
}
?>

</div>
<?php
    if($row['kind'] != "bayt") {
        
?>

<div class="poetdesc">
    
<?php 
//echo $row['hdesc'];

if(strlen($row['hdesc'])>0) {
    $_hd = explode("[n]",$row['hdesc']);
    foreach($_hd as $__hd) {
        $__hd = explode("[t]",$__hd);
        
        echo "<h3 class='poetnm'>";
        echo "<span style='color:#555'>";
        echo $__hd[0];
        echo "</span>";
        echo " : ";
        echo $__hd[1];
        echo "</h3>";
    }
    

}

?>

<div style="text-align:right;">
    <?php
          $edit_uri = "/pitew/edit-poet.php?poet={$row['takh']}";  
        ?>
    <a style="font-size:0.53em;color:#444;padding:1em;display:block" href="<?php echo $edit_uri; ?>">
        زانیاری زیاترتان سەبارەت بە 
        &laquo;
        <?php echo $row['takh']; ?>
        &raquo;
        هەیە؟ دەتوانن لێرە کرتە بکەن و بینووسن.
    </a>
</div>
</div>

<?php
    }
    ?>

</div>
</div>

