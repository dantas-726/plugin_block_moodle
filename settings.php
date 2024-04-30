<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     block_moodle_dev2024
 * @category    admin
 * @copyright   2024 Pedro_PluginDev <pedrodevpedro.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('block_moodle_dev2024_settings', new lang_string('pluginname', 'block_moodle_dev2024'));

    // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
    if ($ADMIN->fulltree) {
        $settings->add(new admin_setting_heading('block_moodle_dev2024/appearance', 
        get_string('appearance', 'block_moodle_dev2024'),
        ''));

        $settings->add(new admin_setting_configcheckbox('block_moodle_dev2024/displaycustomtitle', 
        get_string('displaycustomtitle', 'block_moodle_dev2024'),
        get_string('displaycustomtitle_help', 'block_moodle_dev2024'),
    0));

        $settings->add(new admin_setting_configtext('block_moodle_dev2024/customtitle', 
        get_string('customtitle', 'block_moodle_dev2024'),
        get_string('customtitle_help', 'block_moodle_dev2024'),
    ''));
    }
}
