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
 * Block moodle_dev2024 is defined here.
 *
 * @package     block_moodle_dev2024
 * @copyright   2024 Pedro_PluginDev <pedrodevpedro.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_moodle_dev2024 extends block_base {

    /**
     * Initializes class member variables.
     */
    public function init() {
        // Needed by Moodle to differentiate between blocks.
        $this->config = get_config('block_moodle_dev2024');
        $this->title = get_string('pluginname', 'block_moodle_dev2024');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content() {

        global $USER;

        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = get_string('footer', 'block_moodle_dev2024');

        $a = (object) [ 
            'url' => (new moodle_url ('/blocks/moodle_dev2024/manage.php'))->out(),
            'link'=> get_string('link', 'block_moodle_dev2024')
        ];
        $this->content->text = get_string('blockcontent', 'block_moodle_dev2024', $a);
        $data = ( object ) [ 
            'userid'=> $USER->id,
            'name'=>'Nome fixo'
        ];
        
        // $this->content->text .=  ': '. \block_moodledev2024\moodledev::add($data);


        return $this->content;
    }   

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization() {

        if (($this->config->displaycustomtitle == 1) && !empty($this->config->customtitle)) {
            $this->title = format_string($this->config->customtitle);
        } else {
            $this->title = get_string('pluginname', 'block_moodle_dev2024');
        }
    }

    /**
     * Allow multiple instances in a single course?
     *
     * @return bool True if multiple instances are allowed, false otherwise.
     */
    public function instance_allow_multiple() {
        return true;
    }

    /**
     * Enables global configuration of the block in settings.php.
     *
     * @return bool True if the global configuration is enabled.
     */
    public function has_config() {
        return true;
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    public function applicable_formats() {
        return array(
            'all' => true,
        );
    }
}
