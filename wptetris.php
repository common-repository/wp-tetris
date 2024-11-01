<?php
/*
Plugin Name: WordPress Tetris
Plugin URI:  http://krisjaydesigns.com
Description: The Game of Tetris, Just To Pass The Time! Play Tetris in The WordPress User Pannel.
Author: Kris Jonasson
Version: 1.0

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
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/ 

// Addition To WordPress Functions
add_action('admin_menu', 'wp_tetris');

function wp_tetris() {
    // Adds Options Submenu:
    add_menu_page('<img src="../wp-content/plugins/wp-tetris/images/wptetrisicon.png"/> WP Tetris', '<img src="../wp-content/plugins/wp-tetris/images/wptetrisicon.png"/> WP Tetris', 0, 'wptetris', 'wordpress_tetris');
}

function wordpress_tetris() { ?>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/jquery.original.js'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/wptetris.js'></script>
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/wptetris.css" type="text/css" />
<div id="tetriswrap">
<div id="tetris">

<div id="grid">
<table>
<tr><td id="a1"></td><td id="a2"></td><td id="a3"></td><td id="a4"></td><td id="a5"></td><td id="a6"></td><td id="a7"></td><td id="a8"></td><td id="a9"></td><td id="a10"></td></tr>
<tr><td id="b1"></td><td id="b2"></td><td id="b3"></td><td id="b4"></td><td id="b5"></td><td id="b6"></td><td id="b7"></td><td id="b8"></td><td id="b9"></td><td id="b10"></td></tr>
<tr><td id="c1"></td><td id="c2"></td><td id="c3"></td><td id="c4"></td><td id="c5"></td><td id="c6"></td><td id="c7"></td><td id="c8"></td><td id="c9"></td><td id="c10"></td></tr>
<tr><td id="d1"></td><td id="d2"></td><td id="d3"></td><td id="d4"></td><td id="d5"></td><td id="d6"></td><td id="d7"></td><td id="d8"></td><td id="d9"></td><td id="d10"></td></tr>
<tr><td id="e1"></td><td id="e2"></td><td id="e3"></td><td id="e4"></td><td id="e5"></td><td id="e6"></td><td id="e7"></td><td id="e8"></td><td id="e9"></td><td id="e10"></td></tr>
<tr><td id="f1"></td><td id="f2"></td><td id="f3"></td><td id="f4"></td><td id="f5"></td><td id="f6"></td><td id="f7"></td><td id="f8"></td><td id="f9"></td><td id="f10"></td></tr>
<tr><td id="g1"></td><td id="g2"></td><td id="g3"></td><td id="g4"></td><td id="g5"></td><td id="g6"></td><td id="g7"></td><td id="g8"></td><td id="g9"></td><td id="g10"></td></tr>
<tr><td id="h1"></td><td id="h2"></td><td id="h3"></td><td id="h4"></td><td id="h5"></td><td id="h6"></td><td id="h7"></td><td id="h8"></td><td id="h9"></td><td id="h10"></td></tr>
<tr><td id="i1"></td><td id="i2"></td><td id="i3"></td><td id="i4"></td><td id="i5"></td><td id="i6"></td><td id="i7"></td><td id="i8"></td><td id="i9"></td><td id="i10"></td></tr>
<tr><td id="j1"></td><td id="j2"></td><td id="j3"></td><td id="j4"></td><td id="j5"></td><td id="j6"></td><td id="j7"></td><td id="j8"></td><td id="j9"></td><td id="j10"></td></tr>
<tr><td id="k1"></td><td id="k2"></td><td id="k3"></td><td id="k4"></td><td id="k5"></td><td id="k6"></td><td id="k7"></td><td id="k8"></td><td id="k9"></td><td id="k10"></td></tr>
<tr><td id="l1"></td><td id="l2"></td><td id="l3"></td><td id="l4"></td><td id="l5"></td><td id="l6"></td><td id="l7"></td><td id="l8"></td><td id="l9"></td><td id="l10"></td></tr>
<tr><td id="m1"></td><td id="m2"></td><td id="m3"></td><td id="m4"></td><td id="m5"></td><td id="m6"></td><td id="m7"></td><td id="m8"></td><td id="m9"></td><td id="m10"></td></tr>
<tr><td id="n1"></td><td id="n2"></td><td id="n3"></td><td id="n4"></td><td id="n5"></td><td id="n6"></td><td id="n7"></td><td id="n8"></td><td id="n9"></td><td id="n10"></td></tr>
<tr><td id="o1"></td><td id="o2"></td><td id="o3"></td><td id="o4"></td><td id="o5"></td><td id="o6"></td><td id="o7"></td><td id="o8"></td><td id="o9"></td><td id="o10"></td></tr>
<tr><td id="p1"></td><td id="p2"></td><td id="p3"></td><td id="p4"></td><td id="p5"></td><td id="p6"></td><td id="p7"></td><td id="p8"></td><td id="p9"></td><td id="p10"></td></tr>
<tr><td id="q1"></td><td id="q2"></td><td id="q3"></td><td id="q4"></td><td id="q5"></td><td id="q6"></td><td id="q7"></td><td id="q8"></td><td id="q9"></td><td id="q10"></td></tr>
<tr><td id="r1"></td><td id="r2"></td><td id="r3"></td><td id="r4"></td><td id="r5"></td><td id="r6"></td><td id="r7"></td><td id="r8"></td><td id="r9"></td><td id="r10"></td></tr>
</table>
</div>

<div id="next">

<table>

<tr><td id="x00"></td><td id="x10"></td><td id="x20"></td><td id="x30"></td></tr>
<tr><td id="x01"></td><td id="x11"></td><td id="x21"></td><td id="x31"></td></tr>
<tr><td id="x02"></td><td id="x12"></td><td id="x22"></td><td id="x32"></td></tr>
<tr><td id="x03"></td><td id="x13"></td><td id="x23"></td><td id="x33"></td></tr>
</table>
</div>

<div id="cmd">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/images/freeplay.png" alt=""/> &#x21AA; <input id="start" type="button" value="start"/>  |  <input id="stop" type="button" value="stop" disabled="disabled"/>
</div>


<div id="stats">
<div><h2><img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/images/level.png" alt=""/> : <span id="level">1</span></h2></div>
<div><h2><img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/images/lines.png" alt=""/> : <span id="lines">0</span></h2></div>
<div><h2><img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/images/score.png" alt=""/> : <span id="score">0</span></h2></div>
</div>



<div id="info">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-tetris/images/tetrisinstructions.png" alt=""/>

<p style="width:100%;">WP Tetris Plugin by <a href="http://krisjaydesigns.com">Kris Jay</a><br/>Copyright &copy; 2009-2010.</p>
</div>

</div>

<div id="overlay"></div>	
</div>

<? } ?>