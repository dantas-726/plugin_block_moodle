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
 * Plugin upgrade steps are defined here.
 *
 * @package     block_moodle_dev2024
 * @category    upgrade
 * @copyright   2024 Pedro_PluginDev <pedrodevpedro.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/upgradelib.php');

/**
 * Execute block_moodle_dev2024 upgrade from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_block_moodle_dev2024_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    // For further information please read {@link https://docs.moodle.org/dev/Upgrade_API}.
    //
    // You will also have to create the db/install.xml file by using the XMLDB Editor.
    // Documentation for the XMLDB Editor can be found at {@link https://docs.moodle.org/dev/XMLDB_editor}.
        if ($oldversion < 20240502001) {

            // Define table block_moodle_dev2024 to be created.
            $table = new xmldb_table('block_moodle_dev2024');
    
            // Adding fields to table block_moodle_dev2024.
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
            $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
            $table->add_field('name', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
    
            // Adding keys to table block_moodle_dev2024.
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_key('userid', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
    
            // Adding indexes to table block_moodle_dev2024.
            $table->add_index('name', XMLDB_INDEX_NOTUNIQUE, ['name']);
    
            // Conditionally launch create table for block_moodle_dev2024.
            if (!$dbman->table_exists($table)) {
                $dbman->create_table($table);
            }
        }
    return true;
}
