<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'merkzettel',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>Merkzettel</i>',
    'description'  => array(
        'de' => '<i>Inhalte des Merkzettels bleiben auch nach der Bestellung erhalten.</i>
                <br><iframe frameborder="no" width="600px" height="400px" src="http://tinyurl.com/m23ozfo"></iframe>',
    ),
    'thumbnail'    => '',
    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'          => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
    'extend'       => array(
        'oxorder'     => 'ecomstyle.de/ecs_merkzettel/merkzettel',
    ),

);
?>