<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'ego_stripwhitespaces',
    'title'       => 'EGO_IST HTML Optimierung',
    'description' => array(
        'de' => 'Modul zur Optimierung des HTML-Outputs',
        'en' => '...',
    ),
    'thumbnail'   => 'egoist-logo.png',
    'version'     => '0.1',
    'author'      => 'EGO_IST GmbH | Steve Schütze',
    'email'       => 'technik@egoist.de',
    'url'         => 'http://www.egoist.de',
    'extend'      => array(
        'oxoutput' => 'EGOIST/ego_stripwhitespaces/core/ego_stripwhitespaces_oxoutput',
    ),
    'files'       => array(),
    'templates'   => array(),
    'blocks'      => array(),
    'events'      => array()
);
