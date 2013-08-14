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
        'de' => '<i>Inhalte des Merkzettels bleiben auch nach der Bestellung erhalten.</i><br><br>
        <strong style="font-size: 14px;">Besuchen Sie auch unseren Internetshop unter http://ecomstyle.de/ </strong><br> Folgende Leistungen bieten wir Ihnen an:<br><br>
        - Shopthemes- und Templates<br>
        - Shopmodule<br>
        - Shopupdates<br>
        - Individuelle Templateanpasssungen<br>
        - Theme- und Modulinstallationen<br>
        - Shopinstallationen<br>
        - Anbindung an Warenwirtschaftsysteme<br>
        - Beratung und Support<br> ',
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