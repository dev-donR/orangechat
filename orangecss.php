<?php
header("Content-type: text/css");
include 'common.php';
?>
@import url("http://<?php echo $_SERVER['HTTP_HOST'] ?>/orangechat/css/screen.css");

<?php if(preg_match('/MSIE 7/', $_SERVER['HTTP_USER_AGENT'])): ?>
@import url("http://<?php echo $_SERVER['HTTP_HOST'] ?>/orangechat/css/screen_ie.css");
<?php endif; ?>

@import url("http://<?php echo $_SERVER['HTTP_HOST'] ?>/orangechat/css/chat.css");

<?php if(file_exists('themes/'.THEME.'/style.css')): ?>
@import url("http://<?php echo $_SERVER['HTTP_HOST'] ?>/orangechat/themes/<?php echo THEME; ?>/style.css");
<?php endif; ?>