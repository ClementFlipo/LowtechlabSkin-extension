<?php
# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}
 
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'LowtechlabSkin',
	'author' => 'Clément Flipo',
	'descriptionmsg' => 'LowtechlabSkin-desc',
	'version' => '0.1.0',
);

//surcharge of all trad from Lowtechlab footer :
$wgMessagesDirs['LowtechlabSkin'] = __DIR__ . "/i18n";