<?php
/*
Plugin Name: Twitter Link
Version: 0.2
Plugin URI: http://yoast.com/wordpress/
Description: Automatically convert mentions like @jdevalk into links.
Author: Joost de Valk
Author URI: http://yoast.com/

Copyright 2009  (email: joost@yoast.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function convert_twitter_link($content) {
	$pattern	= '/\@([a-zA-Z0-9_]+) /';
	$replace	= '<a rel="nofollow" target="_blank" href="http://twitter.com/'.strtolower('\1').'">@\1</a>';
	return preg_replace($pattern,$replace,$content);
}

add_filter('the_content','convert_twitter_link',10);
?>
