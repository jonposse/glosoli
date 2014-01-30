<?php

$pages = array(
    'index.php' => 'Me-sida',
    'assignment.php' => 'Redovisning',
    '../source.php' => 'Source',

) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>

<div id="menu">
    <ul id="menuList">
        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <li class="current"><?php echo $pageTitle ; ?></li>
            <?php } else { ?>
        <li><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
            <?php
            } //if 
         } //foreach 
            ?>
    </ul>
</div>