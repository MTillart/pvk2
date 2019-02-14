<?php
require_once 'conf.php';

//echo '<pre>';
//print_r($sess);
//echo '</pre>';

$mainTmp = new Template('main');

$mainTmp->set('title', 'Menu Application');


$contentTmp = new Template('content');
$courseCardTmp = new Template('course_card');

$courseCardHeaderTmp = new Template('course_card_header');

$courseCardTmp->set('course_card_header', $courseCardHeaderTmp->parse());

$contentTmp->add('course_cards',$courseCardTmp->parse());
$contentTmp->add('course_cards',$courseCardTmp->parse());
$contentTmp->add('course_cards',$courseCardTmp->parse());
$contentTmp->add('course_cards',$courseCardTmp->parse());


$mainTmp->set('content', $contentTmp->parse());


$mainTmpContent = $mainTmp->parse();

echo $mainTmpContent;

?>