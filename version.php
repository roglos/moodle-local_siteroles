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
 * Database local plugin Site Roles.
 *
 * @package    local_siteroles
 * @copyright  2017 RMOelmann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * This is designed as a template to enable creation of local plugins reading from
 * an external database table. The external database and table are set in a settings
 * page for each plugin create - ie can each point at different Db/tables etc if
 * required. By default this template reads all fields in the set table (SELECT * FROM).
 **/

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2018100100;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2016120504;        // Requires this Moodle version.
$plugin->component = 'local_siteroles';  // Full name of the plugin (used for diagnostics).
