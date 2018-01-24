<?php

/**
 * Focal Point Custom theme.
 *
 * @package    theme_focalpoint
 * @copyright  2018 Peter Moricz - SPACEGOAT Interactive (peter.moricz@spacegoat.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is the version of the plugin.
$plugin->version = 2018012400;

// This is the version of Moodle this plugin requires.
$plugin->requires = 2016112900;

// This is the component name of the plugin - it always starts with 'theme_'
// for themes and should be the same as the name of the folder.
$plugin->component = 'theme_focalpoint';

// This is a list of plugins, this plugin depends on (and their versions).
$plugin->dependencies = [
    'theme_boost' => 2016102100
];

// This is a stable release.
$plugin->maturity = MATURITY_STABLE;

// This is the named version.
$plugin->release = 1.0;
