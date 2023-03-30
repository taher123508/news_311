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



    namespace local_news\event;
    defined('MOODLE_INTERNAL') || die();

    /**
     * @package     local_news
     * @author      Kristian
     * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */
    class event_news extends \core\event\base {

        /**
         * Initialise event parameters.
         */
        protected function init() {
            $this->data['crud'] = 'r';
            $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        }

        /**
         * Returns localised event name.
         *
         * @return string
         */
        public static function get_name() {
            return get_string('pluginname', 'local_news');
        }

        /**
         * Returns non-localised event description with id's for admin use only.
         *
         * @return string
         */
        public function get_description() {

            return "The user with id'{$this->userid} ' has create new news  with the id  {$this->$data['other']['idnews'] }";
        }


        /**
         * Returns relevant URL.
         *
         * @return moodle_url
         */
        public function get_url() {
            return new \moodle_url('/local/news/manage.php');
        }


    }