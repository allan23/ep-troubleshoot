<?php
/*
  Plugin Name: EP Troubleshoot
  Plugin URI:
  Description: Troubleshoot ElasticPress issues.
  Version: 0.0.1
  Author: Allan Collins
  Author URI: http://10up.com/
 */
/*
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

define( 'EPT_PATH', plugin_dir_path( __FILE__ ) . '/' );
define( 'EPT_URL', plugin_dir_url( __FILE__ ) );
require_once( EPT_PATH . '/vendor/autoload.php' );
$EP_Troubleshoot = new EP_Troubleshoot();
$EP_Troubleshoot->hooks();
unset( $EP_Troubleshoot );