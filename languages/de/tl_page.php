<?php

$arrLang = &$GLOBALS['TL_LANG']['tl_page'];

/**
 * Fields
 */
$arrLang['ipProtected'] = array('Seite anhand von IP-Adressen schützen', 'Den Seiten-Zugriff auf bestimmte IP-Adressen bzw. -bereiche beschränken.');
$arrLang['allowedIps'] = array('Erlaubte IP-Adressen bzw. -bereiche', 'Geben Sie hier kommagetrennt die IP-Adressen bzw. -bereiche an. Es wird die Servervariable $_SERVER[\'REMOTE_ADDR\'] ausgewertet. Beispiel: 217.34.191.120,217.20.123.121,217.34.191.[0..255]');