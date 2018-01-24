<?php

/**
 * A login page layout for the Focal Point theme.
 *
 * @package   theme_focalpoint
 * @copyright 2018 Peter Moricz - SPACEGOAT Interactive (peter.moricz@spacegoat.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$bodyattributes = $OUTPUT->body_attributes();

$templatecontext = [
    'sitename'       => format_string($SITE->shortname, true, [
        'context' => context_course::instance(SITEID),
        "escape"  => false
    ]),
    'output'         => $OUTPUT,
    'bodyattributes' => $bodyattributes
];

echo $OUTPUT->render_from_template('theme_focalpoint/login', $templatecontext);
