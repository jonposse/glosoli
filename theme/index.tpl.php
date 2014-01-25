<!doctype html>
<html lang='<?=$lang?>'>
<html class='no-js'> <!-- Modernizr will replace the class 'no-js' with a list of features supported by the browser -->

<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'/>
<!-- Here is the rest of the <head> code -->
<script src='<?=$modernizr?>'></script>
</head>

<body>
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>

<?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>

</body>

</html>
