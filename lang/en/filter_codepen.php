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
 * plugin details
 *
 * @package filter
 * @subpackage codepen
 * @copyright 2014 Danny Wahl www.iyWare.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['filtername'] = 'CodePen';
$string['settingformats'] = 'Apply to formats';
$string['settingformats_desc'] = 'The filter will be applied only if the original text was inserted in one of the selected formats.';
$string['settingheading'] = 'Information';
$string['settingheading_info'] = '<p>This is a text filter to embed a CodePen from <a href="http://codepen.io">codepen.io</a> into a text area in Moodle.  Simply enable the plugin and paste the direct URL to a Pen in your content (or heading if enabled). A standard URL looks like this: <pre>http://codepen.io/[username]/pen/[Pen ID]</pre> For example: <pre>http://codepen.io/thedannywahl/pen/Gbdaj</pre></p><h4>Notes</h4><ul><li>CodePen does not have an API so we cannot manipulate the appearance of embeds on a per-Pen basis, so settings here are global.</li><li>If a user does not have javascript enabled a text fallback is provided with a link to the Pen.</li><li>Links to Pens are escaped if you do not want to embed. E.g.:<br/><code>&lt;a href="http://codepen.io/thedannywahl/pen/Gbdaj"&gt;http://codepen.io/thedannywahl/pen/Gbdaj&lt;/a&gt;</code></li><li>Make sure that if you have the "urltolink" filter enabled that the CodePen filter is listed first because links are escaped.</li><li>Do not use http, www. or cdpn.io short-link, these are not valid pen URLs.  Visiting them in a browser always redirects to the full Pen URL path (as exampled above).</li><li>This filter only works with the /pen/ URL.  It will not embed from other views like /full/ /live/ etc...</li></ul>';
$string['settingheight'] = 'Pen height';
$string['settingheight_desc'] = 'Set the height of all embedded Pens.';
$string['settingcredits'] = 'Credits';
$string['settingcredits_desc'] = '<p style="text-align:center;"><a href="http://iyware.com"><img width="334" height="123" title="iyWare Logo" alt="iyWare.com" src="data:image/png;base64,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" /></a><br/>This text filter was written by Danny Wahl @ iyWare.com</p>';
$string['settingembedversion'] = 'Embed version';
$string['settingembedversion_desc'] = 'Embed Pen version';