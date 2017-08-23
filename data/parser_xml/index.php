<?php
require_once('./ArrayToXml.php');
$arr = array(
    'id'=>'1',
    'name'=>'2',
    'da' => array(
        'a' =>1,
        'b' =>2
        ),
    'ca' =>array(12,12,2)
    );

$array = array(
	'node' => array(
		'name'  => 'unit 1',
		'book_unit_id' => '10289'
		)
	);
Response::getXml2(12, '12', $arr);