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

namespace block_moodledev2024;

/**
 * moodledev generic class.
 *
 * @package     block_moodle_dev2024
 * @copyright   2024 Pedro_PluginDev <pedrodevpedro.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class moodledev {

  public static function add ($data) { 

    global $DB;
    $data->timecreated = time();
    
    return $DB->insert_record('block_moodledev2024', $data);
  }

}