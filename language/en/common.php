<?php

/*
 * phpBB Extension - Social Links
 * Copyright (C) 2015 Matthew Vanderende <matthew@vanderende.ca>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_BIZBINK_SOCIALLINKS_TITLE' => 'Social Links Module',
    'ACP_BIZBINK_SOCIALLINKS' => 'Settings',
    'ACP_BIZBINK_SOCIALLINKS_TWITTER' => 'Twitter:',
    'ACP_BIZBINK_SOCIALLINKS_GOOGLE_PLUS' => 'Google+:',
    'ACP_BIZBINK_SOCIALLINKS_SETTING_SAVED' => 'Settings have been saved successfully!',
        ));