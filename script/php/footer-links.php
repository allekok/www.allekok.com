<?php
if(@$fbody)
{
    if(isset($_GET['new']))
	echo '<a href="/">شاعیرانی کۆچ‌کردوو</a>';
    else
	echo '<a href="/?new">شاعیرانی نوێ</a>';

    echo '<a href="/poet:73">بەیتی کوردی</a>';
}

echo '<a title="سەبارەت بە ئاڵەکۆک" href="/about/">ئاڵەکۆک؟</a><a title="تازەکانی ئاڵەکۆک" href="/pitew/news.php">تازەکان</a><a title="پتەوکردنی ئاڵەکۆک" href="/pitew/first.php">پتەوکردن</a><a title="سپاس و پێزانین" href="/thanks/">سپاس</a><a title="کۆد" href="/dev/tools/"><i class="material-icons">code</i></a><a title="چۆنیەتی بەکارهێنانی ئاڵەکۆک" href="/manual/"><i class="material-icons">help</i></a><a title="دابەزاندنی بەرنامەی ئاڵەکۆک" href="/desktop/"><i class="material-icons">laptop</i><i class="material-icons">phone_iphone</i></a><a title="گۆڕانکاری" href="/customize/"><i class="material-icons">settings</i></a>';
?>