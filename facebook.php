<?php 
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Trigger workflow settings.
 *
 * @package    tool_trigger
 * @copyright  Matt Porritt <mattp@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once('lib.php');
require_once('fb_form.php');

global $DB, $PAGE;

admin_externalpage_setup('admin_facebook', '', null, '', array('pagelayout' => 'report'));

$fb_form = new fb_form();

$PAGE->set_url('/local_facebook/manage.php');
$PAGE->requires->js( new moodle_url($CFG->wwwroot . '/local/facebook/js/dashboard.js'));



echo $OUTPUT->header();

$fb_form->display();

echo $OUTPUT->footer();