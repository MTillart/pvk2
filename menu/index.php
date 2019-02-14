<?php
require_once 'conf.php';

//echo '<pre>';
//print_r($sess);
//echo '</pre>';

$mainTmp = new Template('main');

$mainTmp->set('title', 'Menu Application');
$mainTmp->set('page title', 'Tartu KHK Menu');
$mainTmpContent = $mainTmp->parse();

echo $mainTmpContent;

?>