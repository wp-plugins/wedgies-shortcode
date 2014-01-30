<?php
/**
 * @package Wedgies_Shortcode
 * @version 1.0
 */
/*
Plugin Name: Wedgies Shortcode
Plugin URI: http://wedgies.com
Description: Wedgies are polls you can embed on your Wordpress page. Engage your audience by asking them a question via Wedgies.
Version: 1.0
Author: Brendan Nee
Author URI: http://bn.ee
*/
/*
Wedgies (Wordpress Plugin)
Copyright (C) 2013 Wedgies
Contact me at http://wedgies.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

add_shortcode("wedgie", "wedgie_handler");

function wedgie_handler($attrs) {
  $attrs = shortcode_atts(array(
    "id" => "52dc9862da36f6020000000c"
  ), $attrs);
  $wedgie_output = '<script src="https://www.wedgies.com/js/widgets.js"></script><noscript><a href="https://www.wedgies.com/question/' . $attrs['id'] . '">Vote on our poll!</a></noscript><div class="wedgie-widget" wd-pending wd-type="embed" wd-version="v1" id="' . $attrs['id'] . '" style="max-width: 720px;"></div>';
  return $wedgie_output;
}

?>
