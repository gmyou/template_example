<?php
include 'Template_.class.php';
$tpl = new Template_;
$tpl->define('index', 'index.tpl');
$tpl->assign(array(
    'title'  =>'First Template_',
    'content'=>'Fill me in',
));
$tpl->print_('index');
?>
