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
 * TODO describe file index
 *
 * @package    local_jsexample
 * @copyright  2025 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');

require_login();

$url = new moodle_url('/local/jsexample/index.php', []);
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());

$PAGE->set_title(get_string('pluginname', 'local_jsexample'));
$PAGE->set_heading(get_string('pluginname', 'local_jsexample'));
echo $OUTPUT->header();

// Content from JavaScript here.
echo $OUTPUT->render_from_template('local_jsexample/jscontent', []);

echo $OUTPUT->footer();
