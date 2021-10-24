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
 * Form for handling workflow cloning
 *
 * @package   block_workflow
 * @copyright 2011 Lancaster University Network Services Limited
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');


class fb_form extends moodleform {
    protected function definition() {
        $mform = $this->_form;

        $mform->addElement('header', 'general', 'FB_DASHBOARD');

        // userid.
        $mform->addElement('text', 'userid', "USER ID", array('id' => 'userid','size' => 120, 'maxlength' => 255));
        $mform->setType('userid', PARAM_TEXT);
        //$mform->addRule('userid', null, 'required', null, 'client');
        $mform->addRule('userid', null, 'maxlength', 255);

        // user_acces_token.
        $mform->addElement('text', 'user_acces_token', "USER ACCESS TOKEN", array('id' => 'token', 'size' => 120, 'maxlength' => 255));
        $mform->setType('user_acces_token', PARAM_TEXT);
        //$mform->addRule('user_acces_token', null, 'required', null, 'client');
        $mform->addRule('user_acces_token', null, 'maxlength', 255);

        // Description_editor.
        $mform->addElement('text', 'cookie', 'User Cookie', array('id' => 'cookie','size' => 120));
		
		$mform->addElement('header', 'general', 'ACTION');
		
		$mform->addElement('html', '<input type="button" id="getlistpage" class="btn btn-success" value="Load Fan Page" />');
		$mform->addElement('html', '<input type="button" id="getlistgroup" class="btn btn-info" value="Load Group" />');
		
		$mform->addElement('header', 'general', "PAGE / GROUP");
		$mform->addElement('html', '<table>
			<tr>
				<th>ID</th>
				<th>Fanpage/Group</th>
			</tr>
			<tr>
				<td>1</td>
				<td>aaa</td>
			/<tr>	
		</table>');

    }

    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        return $errors;
    }
}
