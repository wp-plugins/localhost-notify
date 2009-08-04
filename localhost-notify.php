<?php
/*
Plugin Name: Localhost Notify
Plugin URI: http://netweblogic.com/wordpress/plugins/localhost-notify/
Description: Simple plugin for developers. Adds "local |" to the start of page titles if you're working on a local WP copy.
Author: NetWebLogic
Version: 1.0
Author URI: http://netweblogic.com/
Tags: localhost, developers, local

Copyright (C) 2009 NetWebLogic LLC

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

function localhost_notify($title='', $show=''){		
	if($_SERVER['SERVER_ADDR']=='127.0.0.1' && in_array($show, array('','name', 'blogname'))){
		return "local | ".$title;
	}
	return $title;
}
add_filter('wp_title', 'localhost_notify');
add_filter('bp_page_title', 'localhost_notify');
add_filter('bloginfo', 'localhost_notify', 1, 2);
?>