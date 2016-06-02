<?php

$arrDca = &$GLOBALS['TL_DCA']['tl_page'];

/**
 * Palettes
 */
foreach ($arrDca['palettes'] as $strPalette => $arrPalette)
{
	$arrDca['palettes'][$strPalette] = str_replace(',protected', ',protected,ipProtected', $arrDca['palettes'][$strPalette]);
}

/**
 * Subpalettes
 */
$arrDca['subpalettes']['ipProtected'] = 'allowedIps';

/**
 * Selectors
 */
$arrDca['palettes']['__selector__'][] = 'ipProtected';

/**
 * Fields
 */
$arrFields = array(
	'ipProtected' => array(
		'label'                   => &$GLOBALS['TL_LANG']['tl_page']['ipProtected'],
		'exclude'                 => true,
		'inputType'               => 'checkbox',
		'eval'                    => array('submitOnChange' => true, 'tl_class' => 'w50'),
		'sql'                     => "char(1) NOT NULL default ''"
	),
	'allowedIps' => array(
		'label'                   => &$GLOBALS['TL_LANG']['tl_page']['allowedIps'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength' => 255, 'mandatory' => true, 'tl_class' => 'w50 clr'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	)
);

$arrDca['fields'] = array_merge_recursive($arrFields, $arrDca['fields']);