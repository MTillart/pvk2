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
$courseCardDataTmp= new Template('course_card_data');


$courseNames = array(
    'praed' =>'fa-utensils',
    'supid'=>'fa-utensil-spoon',
    'magustoidud'=>'fa-cookie-bite',
    'joogid'=>'fa-glass-whiskey',
);
foreach ($courseNames as $courseName=>$courseIcon){
    $courseCardHeaderTmp->set('course_name', $courseName );
    $courseCardHeaderTmp->set('icon', $courseIcon );
    $courseCardTmp->set('course_card_header', $courseCardHeaderTmp->parse());
    $courseCardDataTmp->set('course_name', $courseName);
    $courseCardTmp->set('course_card_data', $courseCardDataTmp->parse());
    $contentTmp->add('course_cards',$courseCardTmp->parse());
}



$mainTmp->set('content', $contentTmp->parse());


$mainTmpContent = $mainTmp->parse();

echo $mainTmpContent;

?>