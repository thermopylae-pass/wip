<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
		'db'=>array(
			'connectionString' => 'mysql:host=172.16.68.129;dbname=trackstar_test',
			'emulatePrepare' => true,
			'username' => 'woody',  /* root */
			'password' => 'q1w2E#R$',       /* '' */
			'charset' => 'utf8',
		),		),
	)
);
