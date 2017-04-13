<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth_Spark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title(''); ?></title>  
<?php 
if (function_exists('ot_get_option'))
	{
	$upload_logo = ot_get_option('upload_logo');
	$top_left = ot_get_option('top_left');
	$logo = ot_get_option('logo');
	$icon = ot_get_option('favicon');
	}
if ($icon !="") {	
?>  
<link rel="shortcut icon" href="<?php echo $icon; ?>"/>
<link rel="apple-touch-icon" href="<?php echo $icon; ?>"/>
<?php } ?>




<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sagency/css/ionicons.min.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

<style>
.slick-prev:before, .slick-next:before {
    color: black;
}
</style>				

<!-- Js -->
<script src="<?php echo get_template_directory_uri(); ?>/sagency/js/vendor/modernizr-2.6.2.min.js"></script>


<!--link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/demo/css/animate.min.css' type='text/css' media='all' /-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
<!--link rel='stylesheet' id='growthspark-style-css'  href='http://spark.growthhit.com/wp-content/themes/growthspark/style.css?v=2222' type='text/css' media='all' /-->




















<style>
/*
Theme Name: Growth Spark
Theme URI: http://underscores.me/
Author: GrowthHit
Author URI: https://growthhit.com
Description: A Mobile first WordPress theme built for speed and conversion optimized.
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: growthspark
Tags:

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.

Growth Spark is based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc.
Underscores is distributed under the terms of the GNU GPL v2 or later.

Normalizing styles have been helped along thanks to the fine work of
Nicolas Gallagher and Jonathan Neal http://necolas.github.io/normalize.css/
*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Normalize
# Forms
# Navigation
	## Links
	## Menus
# Accessibility
# Alignments
# Clearings
# Widgets
# Content
	## Posts and pages
	## Comments
# Infinite scroll
# Media
	## Captions
	## Galleries
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# Normalize
--------------------------------------------------------------*/
html {
	font-family: sans-serif;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust:     100%;
}

body {
	margin: 0;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
	display: block;
}

audio,
canvas,
progress,
video {
	display: inline-block;
	vertical-align: baseline;
}

audio:not([controls]) {
	display: none;
	height: 0;
}

[hidden],
template {
	display: none;
}

a {
	background-color: transparent;
}

a:active,
a:hover {
	outline: 0;
}

abbr[title] {
	border-bottom: 1px dotted;
}

b,
strong {
	font-weight: bold;
}

dfn {
	font-style: italic;
}

h1 {
	font-size: 2em;
	margin: 0.67em 0;
}

mark {
	background: #ff0;
	color: #000;
}

small {
	font-size: 80%;
}

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sup {
	top: -0.5em;
}

sub {
	bottom: -0.25em;
}

img {
	border: 0;
}

svg:not(:root) {
	overflow: hidden;
}

figure {
	margin: 1em 40px;
}

hr {
	box-sizing: content-box;
	height: 0;
}

pre {
	overflow: auto;
}

code,
kbd,
pre,
samp {
	font-family: monospace, monospace;
	font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
	color: inherit;
	font: inherit;
	margin: 0;
}

button {
	overflow: visible;
}

button,
select {
	text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}

button[disabled],
html input[disabled] {
	cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input {
	line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
	box-sizing: border-box;
	padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

fieldset {
	border: 1px solid #c0c0c0;
	margin: 0 2px;
	padding: 0.35em 0.625em 0.75em;
}

legend {
	border: 0;
	padding: 0;
}

textarea {
	overflow: auto;
}

optgroup {
	font-weight: bold;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

td,
th {
	padding: 0;
}


/*--------------------------------------------------------------
## Links
--------------------------------------------------------------*/

a:focus {
	outline: thin dotted;
}

a:hover,
a:active {
	outline: 0;
}


/*--------------------------------------------------------------
## Links -> CTA
--------------------------------------------------------------*/

.cta-btn {
  position: absolute;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
}


.cta-btn {
	/*
    background: #27AE60;
    */
    background: #fff;
    color: #000;
    width: 200px;
    height: 30px;
    border: 0;
    font-size: 18px;
    border-radius: 4px;
    -webkit-transition: .6s;
    transition: .6s;
    overflow: hidden;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 13px;
}
.cta-btn:focus {
  outline: 0;
}
.cta-btn:before {
  content: '';
  display: block;
  position: absolute;
  background: rgba(255, 255, 255, 0.5);
  width: 60px;
  height: 100%;
  left: 0;
  top: 0;
  opacity: .5;
  -webkit-filter: blur(30px);
          filter: blur(30px);
  -webkit-transform: translateX(-100px) skewX(-15deg);
          transform: translateX(-100px) skewX(-15deg);
}
.cta-btn:after {
  content: '';
  display: block;
  position: absolute;
  background: rgba(255, 255, 255, 0.2);
  width: 30px;
  height: 100%;
  left: 30px;
  top: 0;
  opacity: 0;
  -webkit-filter: blur(5px);
          filter: blur(5px);
  -webkit-transform: translateX(-100px) skewX(-15deg);
          transform: translateX(-100px) skewX(-15deg);
}
.cta-btn:hover {
  background: #000;
  cursor: pointer;
  color:#fff;
}
.cta-btn:hover:before {
  -webkit-transform: translateX(300px) skewX(-15deg);
          transform: translateX(300px) skewX(-15deg);
  opacity: 0.6;
  -webkit-transition: .7s;
  transition: .7s;
}
.cta-btn:hover:after {
  -webkit-transform: translateX(300px) skewX(-15deg);
          transform: translateX(300px) skewX(-15deg);
  opacity: 1;
  -webkit-transition: .7s;
  transition: .7s;
}

.reverse {
  background-color: #E67E22;
  color:#fff;
}
.reverse p,  #service.reverse .service-item p, #service.reverse .service-item i, #service.reverse .service-item h4 {
  color:#fff;
}

#service h2 {
	font-size: 40px;
}
#service p {
	font-size: 22px;
}
#service h4 {
	font-size: 24px;
}
#service .service-item p {
	font-size: 16px;
}
.home-about-us h2 {
	font-size: 38px;
}
/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/
.main-navigation {
	clear: both;
	display: block;
	float: left;
	width: 100%;
}

.main-navigation ul {
	display: none;
	list-style: none;
	margin: 0;
	padding-left: 0;
}

.main-navigation li {
	float: left;
	position: relative;
}

.main-navigation a {
	display: block;
	text-decoration: none;
}


.main-navigation ul li {

}

.main-navigation ul ul {
	float: left;
	position: absolute;
	left: -999em;
	z-index: 99999;
}

.main-navigation ul ul ul {
	left: -999em;
	top: 0;
}

.main-navigation ul ul a {
	width: 175px;
}

.main-navigation ul ul li {
	width: 200px;
}

.main-navigation li:hover > a,
.main-navigation li.focus > a {
}

.main-navigation ul ul :hover > a,
.main-navigation ul ul .focus > a {
}

.main-navigation ul ul a:hover,
.main-navigation ul ul a.focus {
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
	left: auto;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
	left: 100%;
}

.main-navigation .current_page_item > a,
.main-navigation .current-menu-item > a,
.main-navigation .current_page_ancestor > a,
.main-navigation .current-menu-ancestor > a {
}

/* Small menu. */
.menu-toggle,
.main-navigation.toggled ul {
	display: block;
}

@media screen and (min-width: 769px) {
	.menu-toggle {
		display: none;
	}
	.main-navigation ul {
		display: block;
	}
}

.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
	float: left;
	width: 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}


.site-title  {
    display: block;
    padding: 10px 0 0 0;
    line-height: 60px;
    text-decoration: none;
}
/* 
======================
PURE CSS DROPDOWN 
credit: https://codepen.io/darklit/pen/yMpOEM
=======================
*/
nav {

}

nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
}

nav ul li {
  display: inline-block;
}

nav a {
  display: block;
  padding: 0 10px;
  font-size: 20px;
  line-height: 60px;
  text-decoration: none;
}


/* Hide Dropdowns by Default */

nav ul ul {
  display: none;
  position: absolute;
  top: 60px;
  /* the height of the main nav */
}

/* Display Dropdowns on Hover */

nav ul li:hover > ul {
  display: inherit;
}


/* First Tier Dropdown */

nav ul ul li {
  width: 200px;
  float: none;
  display: list-item;
  position: relative;
}


/* Second, Third and more Tiers	*/

nav ul ul ul li {
  position: relative;
}


/* Change this in order to change the Dropdown symbol 

li > a:after {
  content: ' +';
}

li > a:only-child:after {
  content: '';
}
*/


@media (max-width:768px) {
	.main-navigation li,  {
		float: left;
		width: 100%;
		height:22px;
	}
	.main-navigation ul ul, .main-navigation ul ul ul {
	    display: block;
	    float: left;
	    position: relative;
	    left: 0;
	    z-index: 99999;
	}	
	.main-navigation ul ul li:hover > ul,
	.main-navigation ul ul li.focus > ul {
		left: 0;
	}
	.main-navigation ul li, .main-navigation ul ul li, .main-navigation ul ul ul li {
	  width: 100%;
	  float: left;
	  display: block;
	  position: relative;
	}
	nav ul ul, nav ul ul ul {
		top:0px;
	}
}

/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
	height: 1px;
	width: 1px;
	overflow: hidden;
	word-wrap: normal !important; /* Many screen reader and browser combinations announce broken words as they would appear visually. */
}

.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	color: #21759b;
	display: block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000; /* Above WP toolbar. */
}

/* Do not show the outline on the skip link target. */
#content[tabindex="-1"]:focus {
	outline: 0;
}

/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}

.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}

.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
	content: "";
	display: table;
	table-layout: fixed;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
	clear: both;
}

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
.widget {
	margin: 0 0 1.5em;
}

/* Make sure select elements fit in widgets. */
.widget select {
	max-width: 100%;
}

/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
/*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/
.sticky {
	display: block;
}

.hentry {
	margin: 0 0 1.5em;
}

.byline,
.updated:not(.published) {
	display: none;
}

.single .byline,
.group-blog .byline {
	display: inline;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 1.5em 0 0;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}

/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/
.comment-content a {
	word-wrap: break-word;
}

.bypostauthor {
	display: block;
}

/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation, /* Older / Newer Posts Navigation (always hidden) */
.infinite-scroll.neverending .site-footer { /* Theme Footer (when set to scrolling) */
	display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
	display: block;
}

/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
	max-width: 100%;
}

/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
.wp-caption {
	margin-bottom: 1.5em;
	max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.wp-caption .wp-caption-text {
	margin: 0.8075em 0;
}

.wp-caption-text {
	text-align: center;
}

/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
	margin-bottom: 1.5em;
}

.gallery-item {
	display: inline-block;
	text-align: center;
	vertical-align: top;
	width: 100%;
}

.gallery-columns-2 .gallery-item {
	max-width: 50%;
}

.gallery-columns-3 .gallery-item {
	max-width: 33.33%;
}

.gallery-columns-4 .gallery-item {
	max-width: 25%;
}

.gallery-columns-5 .gallery-item {
	max-width: 20%;
}

.gallery-columns-6 .gallery-item {
	max-width: 16.66%;
}

.gallery-columns-7 .gallery-item {
	max-width: 14.28%;
}

.gallery-columns-8 .gallery-item {
	max-width: 12.5%;
}

.gallery-columns-9 .gallery-item {
	max-width: 11.11%;
}

.gallery-caption {
	display: block;
}
/*--------------------------------------------------------------
## Begin Skeleton
--------------------------------------------------------------*/

/*
* Skeleton V2.0.4
* Copyright 2014, Dave Gamache
* www.getskeleton.com
* Free to use under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
* 12/29/2014
*/


/* Table of contents
––––––––––––––––––––––––––––––––––––––––––––––––––
- Grid
- Base Styles
- Typography
- Links
- Buttons
- Forms
- Lists
- Code
- Tables
- Spacing
- Utilities
- Clearing
- Media Queries
*/


/* Grid
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.container {
  position: relative;
  width: 100%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box; }
.column,
.columns {
  width: 100%;
  float: left;
  box-sizing: border-box; }

/* For devices larger than 400px */
@media (min-width: 400px) {
  .container {
    width: 85%;
    padding: 0; }
}


@media (min-width: 769px) {
  .container {
    width: 80%; }
  .column,
  .columns {
    margin-left: 4%; }
  .column:first-child,
  .columns:first-child {
    margin-left: 0; }

  .one.column,
  .one.columns                    { width: 4.66666666667%; }
  .two.columns                    { width: 13.3333333333%; }
  .three.columns                  { width: 22%;            }
  .four.columns                   { width: 30.6666666667%; }
  .five.columns                   { width: 39.3333333333%; }
  .six.columns                    { width: 48%;            }
  .seven.columns                  { width: 56.6666666667%; }
  .eight.columns                  { width: 65.3333333333%; }
  .nine.columns                   { width: 74.0%;          }
  .ten.columns                    { width: 82.6666666667%; }
  .eleven.columns                 { width: 91.3333333333%; }
  .twelve.columns                 { width: 100%; margin-left: 0; }

  .one-third.column               { width: 30.6666666667%; }
  .two-thirds.column              { width: 65.3333333333%; }

  .one-half.column                { width: 48%; }

  /* Offsets */
  .offset-by-one.column,
  .offset-by-one.columns          { margin-left: 8.66666666667%; }
  .offset-by-two.column,
  .offset-by-two.columns          { margin-left: 17.3333333333%; }
  .offset-by-three.column,
  .offset-by-three.columns        { margin-left: 26%;            }
  .offset-by-four.column,
  .offset-by-four.columns         { margin-left: 34.6666666667%; }
  .offset-by-five.column,
  .offset-by-five.columns         { margin-left: 43.3333333333%; }
  .offset-by-six.column,
  .offset-by-six.columns          { margin-left: 52%;            }
  .offset-by-seven.column,
  .offset-by-seven.columns        { margin-left: 60.6666666667%; }
  .offset-by-eight.column,
  .offset-by-eight.columns        { margin-left: 69.3333333333%; }
  .offset-by-nine.column,
  .offset-by-nine.columns         { margin-left: 78.0%;          }
  .offset-by-ten.column,
  .offset-by-ten.columns          { margin-left: 86.6666666667%; }
  .offset-by-eleven.column,
  .offset-by-eleven.columns       { margin-left: 95.3333333333%; }

  .offset-by-one-third.column,
  .offset-by-one-third.columns    { margin-left: 34.6666666667%; }
  .offset-by-two-thirds.column,
  .offset-by-two-thirds.columns   { margin-left: 69.3333333333%; }

  .offset-by-one-half.column,
  .offset-by-one-half.columns     { margin-left: 52%; }

}


/* Base Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
/* NOTE
html is set to 62.5% so that all the REM measurements throughout Skeleton
are based on 10px sizing. So basically 1.5rem = 15px :) */
html {
  font-size: 62.5%; }
body {
  font-size: 1.5em; /* currently ems cause chrome bug misinterpreting rems on body element */
  line-height: 1.6;
  font-weight: 400;
  font-family: sans-serif;
  }


/* Typography
–––––––––––––––––––––––––––––––––––––––––––––––––– 
*/
p {
  margin-top: 0; }



/* Buttons
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  height: 38px;
  padding: 0 30px;
  text-align: center;
  font-size: 11px;
  font-weight: 600;
  line-height: 38px;
  letter-spacing: .1rem;
  text-transform: uppercase;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border-radius: 4px;
  cursor: pointer;
  box-sizing: border-box; }
.button:hover,
button:hover,
input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
.button:focus,
button:focus,
input[type="submit"]:focus,
input[type="reset"]:focus,
input[type="button"]:focus {
  color: #333;
  border-color: #888;
  outline: 0; }
.button.button-primary,
button.button-primary,
input[type="submit"].button-primary,
input[type="reset"].button-primary,
input[type="button"].button-primary {
  color: #FFF;
  background-color: #33C3F0;
  border-color: #33C3F0; }
.button.button-primary:hover,
button.button-primary:hover,
input[type="submit"].button-primary:hover,
input[type="reset"].button-primary:hover,
input[type="button"].button-primary:hover,
.button.button-primary:focus,
button.button-primary:focus,
input[type="submit"].button-primary:focus,
input[type="reset"].button-primary:focus,
input[type="button"].button-primary:focus {
  color: #FFF;
  background-color: #1EAEDB;
  border-color: #1EAEDB; }


/* Forms
–––––––––––––––––––––––––––––––––––––––––––––––––– */
input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea,
select {
  height: 38px;
  padding: 6px 10px; /* The 6px vertically centers text on FF, ignored by Webkit */
  background-color: #fff;
  border: 1px solid #D1D1D1;
  border-radius: 4px;
  box-shadow: none;
  box-sizing: border-box; }
/* Removes awkward default styles on some inputs for iOS */
input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none; }
textarea {
  min-height: 65px;
  padding-top: 6px;
  padding-bottom: 6px; }
input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="text"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
  border: 1px solid #33C3F0;
  outline: 0; }
label,
legend {
  display: block;
  margin-bottom: .5rem;
  font-weight: 600; }
fieldset {
  padding: 0;
  border-width: 0; }
input[type="checkbox"],
input[type="radio"] {
  display: inline; }
label > .label-body {
  display: inline-block;
  margin-left: .5rem;
  font-weight: normal; }


/* Lists
–––––––––––––––––––––––––––––––––––––––––––––––––– */
ul {
  list-style: circle inside; }
ol {
  list-style: decimal inside; }
ol, ul {
  padding-left: 0;
  margin-top: 0; }
ul ul,
ul ol,
ol ol,
ol ul {
  margin: 1.5rem 0 1.5rem 3rem;
  font-size: 90%; }
li {
  margin-bottom: 1rem; }


/* Code
–––––––––––––––––––––––––––––––––––––––––––––––––– */
code {
  padding: .2rem .5rem;
  margin: 0 .2rem;
  font-size: 90%;
  white-space: nowrap;
  background: #F1F1F1;
  border: 1px solid #E1E1E1;
  border-radius: 4px; }
pre > code {
  display: block;
  padding: 1rem 1.5rem;
  white-space: pre; }


/* Tables
–––––––––––––––––––––––––––––––––––––––––––––––––– */
th,
td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #E1E1E1; }
th:first-child,
td:first-child {
  padding-left: 0; }
th:last-child,
td:last-child {
  padding-right: 0; }


/* Spacing
–––––––––––––––––––––––––––––––––––––––––––––––––– */
button,
.button {
  margin-bottom: 1rem; }
input,
textarea,
select,
fieldset {
  margin-bottom: 1.5rem; }
pre,
blockquote,
dl,
figure,
table,
p,
ul,
ol,
form {
  margin-bottom: 2.5rem; }


/* Utilities
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.u-full-width {
  width: 100%;
  box-sizing: border-box; }
.u-max-full-width {
  max-width: 100%;
  box-sizing: border-box; }
.u-pull-right {
  float: right; }
.u-pull-left {
  float: left; }


/* Misc
–––––––––––––––––––––––––––––––––––––––––––––––––– */
hr {
  margin-top: 3rem;
  margin-bottom: 3.5rem;
  border-width: 0;
  border-top: 1px solid #E1E1E1; }


/* Clearing
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/* Self Clearing Goodness */
.container:after,
.row:after,
.u-cf {
  content: "";
  display: table;
  clear: both; }




#masthead {
	position: fixed;
	top:0;
	width:100%;
	z-index: 1;
	height:70px;
}

#content {
	margin-top: 70px;
}

/*
Bottom Right Slide Out
*/
#slidebox{
    width:400px;
    height:130px;
    padding:10px;
    background-color:#fff;
    border-top:3px solid #E28409;   
    position:fixed;
    z-index: 1;
    bottom:0px;
    right:-430px;
	-moz-box-shadow:-2px 0px 5px #aaa;
	-webkit-box-shadow:-2px 0px 5px #aaa;
	box-shadow:-2px 0px 5px #aaa;
}
#slidebox p, a.more{
    font-size:11px;
    text-transform:uppercase;
    font-family: Arial,Helvetica,sans-serif;
    letter-spacing:1px;
    color:#555;
}
a.more{
    cursor:pointer;
    color:#E28409;
}
a.more:hover{
    text-decoration:underline;
}
#slidebox h2{
    font-size:18px;
    margin:10px 20px 10px 0px;
}

a.close{
    color:#E28409; 
    width:13px;
    height:13px;
    position:absolute;
    cursor:pointer;
    top:10px;
    right:10px;
}
a.close:hover{
    background-position:0px -13px;
}

/*
full screen pop over
*/
#callModal {
	display: none;
}
.closebt {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
    cursor: pointer;
}

#animatedModal .modal-content {
	text-align:center;
	color: #fff;
}
#animatedModal .modal-content  h3 {
	font-size: 3.2em;
}
#animatedModal .modal-content  p {
	font-size: 2.2em;
}

#animatedModal input {
	border-color: #fff;
	color: #000;
}




/*--
	Header Start 
--*/
header {
  background: #fff;
}
header .navbar {
  margin-bottom: 0px;
  border: 0px;
}
header .navbar-brand {
  padding-top: 5px;
}
header .navbar-default {
  background: none;
  border: 0px;
}
header .navbar-default .navbar-nav {
  padding-top: 10px;
}
header .navbar-default .navbar-nav li a {
  color: #333333;
  padding: 10px 26px;
  font-size: 15px;
}
font header .navbar-default .navbar-nav li a:hover {
  color: #000;
}
/*---------------------------------------------
					Index Start 
-----------------------------------------------*/
/*--
	Slider Start 
--*/
#slider {
	/*
    background: url(http://spark.growthhit.com/wp-content/themes/growthspark/sagency/img/slider-bg.jpg) no-repeat;
    */
    background-color: cornflowerblue;
    background-size: cover;
    background-attachment: fixed;
    background-position: 0px -115px;
    /* padding: 200px 0 280px 0; */
    padding-top: 25px;
    height: 460px;
    position: relative;
}
#slider:before {
/*
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to left, #8b86a3, #322e40);
  opacity: 0.8;
*/
}
#slider .block {
  color: #fff;
}
#slider .block h1 {

  font-weight: 100;
  font-size: 45px;
  line-height: 60px;
  padding-bottom: 45px;
}
#slider .block p {
  font-size: 23px;
  line-height: 40px;
  font-weight: 300;
}
/*--
	wrapper Start 
--*/
#intro {
  padding: 100px 0;
}
#intro .block h2 {
  padding-top: 35px;
  line-height: 27px;
  margin: 0;
}
#intro .block p {
  color: #7B7B7B;
  padding-top: 20px;
}
#intro .block img {
  padding-left: 40px;
  width: 100%;
}
#intro .section-title {
  margin-bottom: 0px;
}
#intro .section-title p {
  padding-top: 20px;
}
/*--
	service Start 
--*/
#service {
  text-align: center;
  padding: 90px 0;
}
#service .service-item {
  padding-bottom: 30px;
}
#service .service-item i {
  font-size: 60px;
  color: #4A4656;
}
#service .service-item h4 {
  padding-top: 20px;
  margin: 0;
  color: #666;
}
#service .service-item p {
  color: #888;
  padding-top: 10px;
  margin: 0;
  font-size: 14px;
  line-height: 1.8;
}
/*--
	call-to-action Start 
--*/
#call-to-action {
  background: url(<?php echo get_template_directory_uri(); ?>/sagency/img/call-to-action-bg.jpg) no-repeat;
  background-size: cover;
  background-attachment: fixed;
  padding: 70px 0px;
  position: relative;
  text-align: center;
  color: #fff;
}
#call-to-action:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: #3D566E;
  opacity: 0.8;
}
#call-to-action h2 {
  padding-bottom: 20px;
  line-height: 33px;
  margin: 0;
  font-size: 30px;
}
#call-to-action p {
  font-size: 14px;
  line-height: 1.6;
}
#call-to-action .btn-call-to-action {
  padding: 15px 35px;
  border: none;
  background-color: #fff;
  font-size: 15px;
  color: #333333;
  margin-top: 30px;
}
/*--
	Feature Start 
--*/
#feature {
  background: url(<?php echo get_template_directory_uri(); ?>/sagency/img//featue-bg.jpg);
  background-position: 50% 94px;
  width: 100%;
  display: block;
  position: relative;
  overflow: visible;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #fff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  padding: 100px 0;
}
#feature h2 {
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 30px;
}
#feature p {
  color: #8d8f92;
  margin-bottom: 20px;
}
#feature .btn-view-works {
  background: #27AE60;
  color: #fff;
  padding: 10px 20px;
}
/*--
	content Start 
--*/
#testimonial {
  padding: 100px 0;
}
#testimonial .block h2 {
  line-height: 27px;
  color: #5C5C5C;
  padding-top: 110px;
}
#testimonial .block p {
  padding-top: 50px;
  color: #7B7B7B;
}
#testimonial .counter-box li {
  width: 50%;
  float: left;
  text-align: center;
  margin: 30px 0 30px;
}
#testimonial .counter-box li i {
  font-size: 35px;
}
#testimonial .counter-box li h4 {
  font-size: 30px;
  font-weight: bold;
}
#testimonial .counter-box li span {
  color: #555;
}
#testimonial .testimonial-carousel {
  text-align: center;
  width: 75%;
  border: 1px solid #DEDEDE;
  padding: 24px;
  margin: 0 auto;
}
#testimonial .testimonial-carousel img {
  padding-bottom: 38px;
}
#testimonial .testimonial-carousel p {
  line-height: 28px;
  font-weight: 300;
  padding-bottom: 20px;
}
#testimonial .testimonial-carousel .user img {
  padding-bottom: 0px;
  border-radius: 500px;
}
#testimonial .testimonial-carousel .user p {
  padding-bottom: 0;
  font-size: 12px;
  line-height: 20px;
  color: #353241;
}
#testimonial .testimonial-carousel .user p span {
  display: block;
  color: #353241;
  font-weight: 600;
}
#testimonial .testimonial-carousel .owl-carousel .owl-pagination div {
  border: 1px solid #1D1D1D;
  border-radius: 500px;
  display: inline-block;
  height: 10px;
  margin-right: 15px;
  width: 10px;
}
#testimonial .testimonial-carousel .owl-carousel .owl-pagination div.active {
  background: #5C5C5C;
  font-size: 30px;
  display: inline-block;
  border: 0px;
}
/*--
	features Start 
--*/
#clients-logo-section {
  padding-top: 30px;
  padding-bottom: 75px;
}
#clients-logo-section .clients-logo-img {
  padding: 0px 50px;
}
/*---------------------------------------------
					Work Start 
-----------------------------------------------*/
/*--
	Slider-work Start 
--*/
#global-header {
  background: url(<?php echo get_template_directory_uri(); ?>/sagency/img//slider-bg2.jpg) no-repeat;
  background-size: cover;
  padding-top: 150px;
  padding-bottom: 107px;
  position: relative;
  background-attachment: fixed;
}
#global-header:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to left, #928dab, #1f1c2c 70%);
  opacity: 0.8;
}
#global-header .block {
  color: #E3E3E4;
  margin: 0 auto;
  padding-left: 90px;
  text-align: center;
}
#global-header .block h1 {
  font-weight: 100;
  font-size: 45px;
  letter-spacing: 6px;
  padding-bottom: 15px;
  margin-top: 0;
  text-transform: capitalize;
}
#global-header .block p {
  font-size: 16px;
  font-weight: 300;
  letter-spacing: 1px;
  word-spacing: 3px;
}
/*--
	portfolio-work Start 
--*/
#portfolio-work {
  overflow: hidden;
  padding: 80px 0;
}
#portfolio-work .block .portfolio-menu {
  padding-bottom: 30px;
  text-align: center;
}
#portfolio-work .block .portfolio-menu ul {
  border: 1px solid #999999;
  display: inline-block;
  margin-bottom: 40px;
}
#portfolio-work .block .portfolio-menu ul li {
  display: inline-block;
  padding: 0px 25px;
  cursor: pointer;
  font-size: 15px;
  line-height: 40px;
  font-weight: 600;
  color: #333333;
  text-transform: capitalize;
  position: relative;
}
#portfolio-work .block .portfolio-menu ul .active {
  color: #27AE60;
  position: relative;
}
#portfolio-work .block .portfolio-menu ul .active:before {
  content: "\f0d7";
  position: absolute;
  font-family: 'FontAwesome';
  bottom: -18px;
  font-size: 30px;
  width: 20px;
  left: 0px;
  right: 0px;
  top: 23px;
  margin: 0 auto;
  color: #fff;
  text-shadow: 0 1px 0px rgba(0, 0, 0, 0.9);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
#portfolio-work .block .portfolio-menu ul li:hover:before {
  content: "\f0d7";
  position: absolute;
  font-family: 'FontAwesome';
  bottom: -18px;
  font-size: 30px;
  width: 20px;
  left: 0px;
  right: 0px;
  top: 24px;
  margin: 0 auto;
  color: #fff;
  text-shadow: 0 1px 0px rgba(0, 0, 0, 0.9);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
#portfolio-work .block .portfolio-contant ul li {
  float: left;
  width: 32.22%;
  overflow: hidden;
  margin: 6px;
  position: relative;
}
#portfolio-work .block .portfolio-contant ul li:hover .overly {
  opacity: 1;
}
#portfolio-work .block .portfolio-contant ul li:hover .position-center {
  position: absolute;
  top: 50%;
  -webkit-transform: translate(0%, -50%);
  -moz-transform: translate(0%, -50%);
  -ms-transform: translate(0%, -50%);
  transform: translate(0%, -50%);
}
#portfolio-work .block .portfolio-contant ul li a {
  display: block;
  color: #fff;
}
#portfolio-work .block .portfolio-contant ul li a h2 {
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
#portfolio-work .block .portfolio-contant ul li a p {
  font-size: 15px;
}
#portfolio-work .block .portfolio-contant ul li a span {
  font-style: italic;
  font-size: 13px;
  color: #27AE60;
}
#portfolio-work .block .portfolio-contant ul img {
  width: 100%;
  height: auto;
}
#portfolio-work .block .portfolio-contant .overly {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.9);
  opacity: 0;
  -webkit-transition: .3s all;
  -o-transition: .3s all;
  transition: .3s all;
  text-align: center;
}
#portfolio-work .block .portfolio-contant .position-center {
  position: absolute;
  top: 50%;
  left: 10%;
  -webkit-transform: translate(0%, 50%);
  -moz-transform: translate(0%, 50%);
  -ms-transform: translate(0%, 50%);
  transform: translate(0%, 50%);
  -webkit-transition: .5s all;
  -o-transition: .5s all;
  transition: .5s all;
}
#portfolio-work .block .mix {
  display: none;
}
/*--
	wrapper-work Start 
--*/
#wrapper-work {
  overflow: hidden;
  padding-top: 100px;
}
#wrapper-work ul li {
  width: 50%;
  float: left;
  position: relative;
}
#wrapper-work ul li img {
  width: 100%;
  height: 100%;
}
#wrapper-work ul li .items-text {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  background: rgba(0, 0, 0, 0.6);
  padding-left: 44px;
  padding-top: 140px;
}
#wrapper-work ul li .items-text h2 {
  padding-bottom: 28px;
  padding-top: 75px;
  position: relative;
}
#wrapper-work ul li .items-text h2:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 75px;
  height: 3px;
  background: #fff;
}
#wrapper-work ul li .items-text p {
  padding-top: 30px;
  font-size: 16px;
  line-height: 27px;
  font-weight: 300;
  padding-right: 80px;
}
/*--
	features-work Start 
--*/
#features-work {
  padding-top: 50px;
  padding-bottom: 75px;
}
#features-work .block ul li {
  width: 19%;
  text-align: center;
  display: inline-block;
  padding: 40px 0px;
}
/*---------------------------------------------
					Work Close 
-----------------------------------------------*/
/*=============================================*/
/*---------------------------------------------
					 Contact Start 
-----------------------------------------------*/
/*--
	slider-contact Start 
--*/
#slider-contact {
  background: url("<?php echo get_template_directory_uri(); ?>/sagency/img/slider-bg2.jpg") no-repeat;
  background-size: cover;
  padding-top: 150px;
  padding-bottom: 107px;
  position: relative;
}
#slider-contact:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to left, #928dab, #1f1c2c 70%);
  opacity: 0.8;
}
#slider-contact .block {
  color: #E3E3E4;
  margin: 0 auto;
  padding-left: 90px;
}
#slider-contact .block h1 {
  font-weight: 100;
  font-size: 45px;
  line-height: 60px;
  padding-bottom: 15px;
}
#slider-contact .block p {
  font-size: 23px;
  line-height: 40px;
  font-weight: 300;
  word-spacing: 3px;
}
/*--
	contact-form Start 
--*/
#contact-form {
  padding-top: 70px;
  padding-bottom: 35px;
}
#contact-form .block form .form-group {
  padding-bottom: 15px;
  margin: 0px;
}
#contact-form .block form .form-group .form-control {
  background: #F6F8FA;
  height: 60px;
  border: 1px solid #EEF2F6;
  box-shadow: none;
  width: 100%;
}
#contact-form .block form .form-group-2 {
  padding-bottom: 15px;
  margin: 0px;
}
#contact-form .block form .form-group-2 textarea {
  background: #F6F8FA;
  height: 135px;
  border: 1px solid #EEF2F6;
  box-shadow: none;
  width: 100%;
}
#contact-form .block button {
  width: 100%;
  height: 60px;
  background: #47424C;
  border: none;
  color: #fff;
  font-size: 18px;
}
/*--
	wrapper-contact Start 
--*/
.address-block li {
  margin-bottom: 20px;
}
.address-block li i {
  margin-right: 15px;
  font-size: 20px;
  width: 20px;
}
.social-icons {
  margin-top: 40px;
}
.social-icons li {
  display: inline-block;
  margin: 0 6px;
}
.social-icons a {
  display: inline-block;
}
.social-icons i {
  color: #2C2C2C;
  margin-right: 25px;
  font-size: 25px;
}
.google-map {
  position: relative;
}
.google-map #map {
  width: 100%;
  height: 300px;
  background-color: #ff432e;
}
#contact-box {
  padding-top: 35px;
  padding-bottom: 58px;
}
#contact-box .block img {
  width: 100%;
}
#contact-box .block h2 {
  font-weight: 300;
  color: #000;
  font-size: 28px;
  padding-bottom: 30px;
}
#contact-box .block p {
  color: #5C5C5C;
  display: block;
}
/*--
	features-contact Start 
--*/
#features-contact {
  padding-top: 50px;
  padding-bottom: 75px;
}
#features-contact .block ul li {
  width: 19%;
  text-align: center;
  display: inline-block;
  padding: 40px 0px;
}
/*---------------------------------------------
					Contact Close 
-----------------------------------------------*/
/*--------- Heading------------*/
.heading {
  padding-bottom: 60px;
  text-align: center;
}
.heading h2 {
  color: #000;
  font-size: 30px;
  line-height: 40px;
  font-weight: 400;
}
.heading p {
  font-size: 18px;
  line-height: 40px;
  color: #292929;
  font-weight: 300;
}
/*---------------------------*/
/*--
	footer Start 
--*/
footer {
  /* 
  background: #F5F5F5;
  */
  text-align: center;
  padding-top: 48px;
  padding-bottom: 55px;
}
footer p {
  font-size: 13px;
  line-height: 25px;
  color: #919191;
}
footer a {
  color: #595959;
}
footer .footer-manu {
  padding-bottom: 25px;
}
footer .footer-manu ul {
  margin: 0px;
  padding: 0px;
}
footer .footer-manu ul li {
  display: inline-block;
  padding: 0px 20px;
}
footer .footer-manu ul li a {
  display: inline-block;
  color: #494949;
}
footer .footer-manu ul li a:hover {
  color: #000;
}

.comments-link a {
	margin-right: 8px;
}

#social-proof {
    height: 100px;
    padding-top: 40px;
    background-color: #efefef;
    padding-left: 10%;
}
#social-proof .proof {
    
}

.blog article {
	width: 98%;
	float: left;
}

.blog .entry-header {
	text-align: center;
}
.readmore {
	display: block;
	float: right;
}

/* Media Queries


/* Larger than tablet */
@media (min-width: 769px) {
	.blog article {
	    width: 41%;
	    margin: 1%;
	    float: left;
	    border-radius: 3px;
	    border: 1px solid #ebebeb;
	    box-shadow: 0 1px 4px rgba(0,0,0,.2);
	    background: #fff;
	    position: relative;
	    padding: 20px;
	}
}
/*
Smaller than desktop
*/
@media (max-width: 1100px) {
	#slider .block h1 {
	    padding-bottom: 20px; 
	}	
}

/*
Tablet and smaller
*/
@media (max-width:768px) {
	.site-branding {
		width: 50%;
		float: left;
	}
	.site-branding img {
		max-height: 60px;
	}
	.menu-toggle {
	    float: right;
	    position: relative;
	    top: -87px;
	    display: block;
	    left: -20px;
	}
	#primary-menu {
		position: relative;
	    top: -72px;
	}
	#masthead .container {
		width: 100%;
	}
	.main-navigation ul li {
	    background: #333;
	}
	.main-navigation ul li a {
	    color: #fff;
	}
	#slider .block p {
	    font-size: 18px;
	    line-height: 1.5em;
	    font-weight: 300;
	}
	#slider .block h1 {
	    font-weight: 100;
	    font-size: 35px;
	    line-height: 60px;
	    padding-bottom: 0px; 
	}
	#social-proof {
	    padding-left: 20%;
	}
}



</style>







































<style>

/*--------------------------------------------------------------
# Typography
----------------------------------------------------------------
font-family: 'Oswald', sans-serif;
font-family: 'Montserrat', sans-serif;
*/
body,
button,
input,
select,
textarea {
	font-family: 'Montserrat', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Oswald', sans-serif;
	text-transform: uppercase;
}
/*--------------------------------------------------------------
# Colors
----------------------------------------------------------------
*/
a {
	color: #000;
}
a:visited {
	color: #000;
}
a:hover,
a:focus,
a:active {
	color: #333;
}
/*
=============
Main Menu
=============
*/
.main-navigation li a {
    color: #333333;
    padding: 0px 26px;
    font-size: 12px;
    text-transform: uppercase;
}
@media (min-width:768px) and (max-width:800px) {
	.main-navigation li a {
	    padding: 0px 8px;
	    font-size: 14px;
	}
}
@media (min-width:801px) and (max-width:1300px) {
	.main-navigation li a {
		padding: 0px 6px;
	    font-size: 12px;
	}
}
.main-navigation li {
    margin-bottom: 0rem;
}
.main-navigation li a:hover {
  color: #000;
}
.sub-menu {
	background: #fff;
}
/*
=============
=============
*/
body {
  color: #222; 
}
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  color: #555;
  border: 1px solid #bbb;
}
#masthead {
	background: #fff;
}
/*
Bottom Right Slide Out
*/
#slidebox{
    background-color:#fff;
    border-top:3px solid #27AE60;   
}
#slidebox p, a.more{
    color:#555;
}
a.more{
    color:#27AE60;
}
#slidebox h2{
    color:#27AE60;
}

a.close{
    color:#27AE60; 
}




img {
    max-width: 100%;
}
ul.counter-box li {
    list-style-type: none;
}


.slick-slide {
	text-align: center;
}





/*!
 * Hamburgers
 * @description Tasty CSS-animated hamburgers
 * @author Jonathan Suh @jonsuh
 * @site https://jonsuh.com/hamburgers
 * @link https://github.com/jonsuh/hamburgers
 */.hamburger{font:inherit;display:inline-block;overflow:visible;margin:0;padding:15px;cursor:pointer;transition-timing-function:linear;transition-duration:.15s;transition-property:opacity,filter;text-transform:none;color:inherit;border:0;background-color:transparent}.hamburger:hover{opacity:.7}.hamburger-box{position:relative;display:inline-block;width:40px;height:24px}.hamburger-inner{top:50%;display:block;margin-top:-2px}.hamburger-inner,.hamburger-inner:after,.hamburger-inner:before{position:absolute;width:40px;height:4px;transition-timing-function:ease;transition-duration:.15s;transition-property:transform;border-radius:4px;background-color:#000}.hamburger-inner:after,.hamburger-inner:before{display:block;content:""}.hamburger-inner:before{top:-10px}.hamburger-inner:after{bottom:-10px}.hamburger--3dx .hamburger-box{perspective:80px}.hamburger--3dx .hamburger-inner{transition:transform .15s cubic-bezier(.645,.045,.355,1),background-color 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dx .hamburger-inner:after,.hamburger--3dx .hamburger-inner:before{transition:transform 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dx.is-active .hamburger-inner{transform:rotateY(180deg);background-color:transparent}.hamburger--3dx.is-active .hamburger-inner:before{transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--3dx.is-active .hamburger-inner:after{transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--3dx-r .hamburger-box{perspective:80px}.hamburger--3dx-r .hamburger-inner{transition:transform .15s cubic-bezier(.645,.045,.355,1),background-color 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dx-r .hamburger-inner:after,.hamburger--3dx-r .hamburger-inner:before{transition:transform 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dx-r.is-active .hamburger-inner{transform:rotateY(-180deg);background-color:transparent}.hamburger--3dx-r.is-active .hamburger-inner:before{transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--3dx-r.is-active .hamburger-inner:after{transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--3dy .hamburger-box{perspective:80px}.hamburger--3dy .hamburger-inner{transition:transform .15s cubic-bezier(.645,.045,.355,1),background-color 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dy .hamburger-inner:after,.hamburger--3dy .hamburger-inner:before{transition:transform 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dy.is-active .hamburger-inner{transform:rotateX(-180deg);background-color:transparent}.hamburger--3dy.is-active .hamburger-inner:before{transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--3dy.is-active .hamburger-inner:after{transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--3dy-r .hamburger-box{perspective:80px}.hamburger--3dy-r .hamburger-inner{transition:transform .15s cubic-bezier(.645,.045,.355,1),background-color 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dy-r .hamburger-inner:after,.hamburger--3dy-r .hamburger-inner:before{transition:transform 0s cubic-bezier(.645,.045,.355,1) .1s}.hamburger--3dy-r.is-active .hamburger-inner{transform:rotateX(180deg);background-color:transparent}.hamburger--3dy-r.is-active .hamburger-inner:before{transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--3dy-r.is-active .hamburger-inner:after{transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--arrow.is-active .hamburger-inner:before{transform:translate3d(-8px,0,0) rotate(-45deg) scaleX(.7)}.hamburger--arrow.is-active .hamburger-inner:after{transform:translate3d(-8px,0,0) rotate(45deg) scaleX(.7)}.hamburger--arrow-r.is-active .hamburger-inner:before{transform:translate3d(8px,0,0) rotate(45deg) scaleX(.7)}.hamburger--arrow-r.is-active .hamburger-inner:after{transform:translate3d(8px,0,0) rotate(-45deg) scaleX(.7)}.hamburger--arrowalt .hamburger-inner:before{transition:top .1s ease .1s,transform .1s cubic-bezier(.165,.84,.44,1)}.hamburger--arrowalt .hamburger-inner:after{transition:bottom .1s ease .1s,transform .1s cubic-bezier(.165,.84,.44,1)}.hamburger--arrowalt.is-active .hamburger-inner:before{top:0;transition:top .1s ease,transform .1s cubic-bezier(.895,.03,.685,.22) .1s;transform:translate3d(-8px,-10px,0) rotate(-45deg) scaleX(.7)}.hamburger--arrowalt.is-active .hamburger-inner:after{bottom:0;transition:bottom .1s ease,transform .1s cubic-bezier(.895,.03,.685,.22) .1s;transform:translate3d(-8px,10px,0) rotate(45deg) scaleX(.7)}.hamburger--arrowalt-r .hamburger-inner:before{transition:top .1s ease .1s,transform .1s cubic-bezier(.165,.84,.44,1)}.hamburger--arrowalt-r .hamburger-inner:after{transition:bottom .1s ease .1s,transform .1s cubic-bezier(.165,.84,.44,1)}.hamburger--arrowalt-r.is-active .hamburger-inner:before{top:0;transition:top .1s ease,transform .1s cubic-bezier(.895,.03,.685,.22) .1s;transform:translate3d(8px,-10px,0) rotate(45deg) scaleX(.7)}.hamburger--arrowalt-r.is-active .hamburger-inner:after{bottom:0;transition:bottom .1s ease,transform .1s cubic-bezier(.895,.03,.685,.22) .1s;transform:translate3d(8px,10px,0) rotate(-45deg) scaleX(.7)}.hamburger--boring .hamburger-inner,.hamburger--boring .hamburger-inner:after,.hamburger--boring .hamburger-inner:before{transition-property:none}.hamburger--boring.is-active .hamburger-inner{transform:rotate(45deg)}.hamburger--boring.is-active .hamburger-inner:before{top:0;opacity:0}.hamburger--boring.is-active .hamburger-inner:after{bottom:0;transform:rotate(-90deg)}.hamburger--collapse .hamburger-inner{top:auto;bottom:0;transition-delay:.13s;transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:.13s}.hamburger--collapse .hamburger-inner:after{top:-20px;transition:top .2s cubic-bezier(.33333,.66667,.66667,1) .2s,opacity .1s linear}.hamburger--collapse .hamburger-inner:before{transition:top .12s cubic-bezier(.33333,.66667,.66667,1) .2s,transform .13s cubic-bezier(.55,.055,.675,.19)}.hamburger--collapse.is-active .hamburger-inner{transition-delay:.22s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--collapse.is-active .hamburger-inner:after{top:0;transition:top .2s cubic-bezier(.33333,0,.66667,.33333),opacity .1s linear .22s;opacity:0}.hamburger--collapse.is-active .hamburger-inner:before{top:0;transition:top .1s cubic-bezier(.33333,0,.66667,.33333) .16s,transform .13s cubic-bezier(.215,.61,.355,1) .25s;transform:rotate(-90deg)}.hamburger--collapse-r .hamburger-inner{top:auto;bottom:0;transition-delay:.13s;transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:.13s}.hamburger--collapse-r .hamburger-inner:after{top:-20px;transition:top .2s cubic-bezier(.33333,.66667,.66667,1) .2s,opacity .1s linear}.hamburger--collapse-r .hamburger-inner:before{transition:top .12s cubic-bezier(.33333,.66667,.66667,1) .2s,transform .13s cubic-bezier(.55,.055,.675,.19)}.hamburger--collapse-r.is-active .hamburger-inner{transition-delay:.22s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:translate3d(0,-10px,0) rotate(45deg)}.hamburger--collapse-r.is-active .hamburger-inner:after{top:0;transition:top .2s cubic-bezier(.33333,0,.66667,.33333),opacity .1s linear .22s;opacity:0}.hamburger--collapse-r.is-active .hamburger-inner:before{top:0;transition:top .1s cubic-bezier(.33333,0,.66667,.33333) .16s,transform .13s cubic-bezier(.215,.61,.355,1) .25s;transform:rotate(90deg)}.hamburger--elastic .hamburger-inner{top:2px;transition-timing-function:cubic-bezier(.68,-.55,.265,1.55);transition-duration:.275s}.hamburger--elastic .hamburger-inner:before{top:10px;transition:opacity .125s ease .275s}.hamburger--elastic .hamburger-inner:after{top:20px;transition:transform .275s cubic-bezier(.68,-.55,.265,1.55)}.hamburger--elastic.is-active .hamburger-inner{transition-delay:75ms;transform:translate3d(0,10px,0) rotate(135deg)}.hamburger--elastic.is-active .hamburger-inner:before{transition-delay:0s;opacity:0}.hamburger--elastic.is-active .hamburger-inner:after{transition-delay:75ms;transform:translate3d(0,-20px,0) rotate(-270deg)}.hamburger--elastic-r .hamburger-inner{top:2px;transition-timing-function:cubic-bezier(.68,-.55,.265,1.55);transition-duration:.275s}.hamburger--elastic-r .hamburger-inner:before{top:10px;transition:opacity .125s ease .275s}.hamburger--elastic-r .hamburger-inner:after{top:20px;transition:transform .275s cubic-bezier(.68,-.55,.265,1.55)}.hamburger--elastic-r.is-active .hamburger-inner{transition-delay:75ms;transform:translate3d(0,10px,0) rotate(-135deg)}.hamburger--elastic-r.is-active .hamburger-inner:before{transition-delay:0s;opacity:0}.hamburger--elastic-r.is-active .hamburger-inner:after{transition-delay:75ms;transform:translate3d(0,-20px,0) rotate(270deg)}.hamburger--emphatic{overflow:hidden}.hamburger--emphatic .hamburger-inner{transition:background-color .125s ease-in .175s}.hamburger--emphatic .hamburger-inner:before{left:0;transition:transform .125s cubic-bezier(.6,.04,.98,.335),top .05s linear .125s,left .125s ease-in .175s}.hamburger--emphatic .hamburger-inner:after{top:10px;right:0;transition:transform .125s cubic-bezier(.6,.04,.98,.335),top .05s linear .125s,right .125s ease-in .175s}.hamburger--emphatic.is-active .hamburger-inner{transition-delay:0s;transition-timing-function:ease-out;background-color:transparent}.hamburger--emphatic.is-active .hamburger-inner:before{top:-80px;left:-80px;transition:left .125s ease-out,top .05s linear .125s,transform .125s cubic-bezier(.075,.82,.165,1) .175s;transform:translate3d(80px,80px,0) rotate(45deg)}.hamburger--emphatic.is-active .hamburger-inner:after{top:-80px;right:-80px;transition:right .125s ease-out,top .05s linear .125s,transform .125s cubic-bezier(.075,.82,.165,1) .175s;transform:translate3d(-80px,80px,0) rotate(-45deg)}.hamburger--emphatic-r{overflow:hidden}.hamburger--emphatic-r .hamburger-inner{transition:background-color .125s ease-in .175s}.hamburger--emphatic-r .hamburger-inner:before{left:0;transition:transform .125s cubic-bezier(.6,.04,.98,.335),top .05s linear .125s,left .125s ease-in .175s}.hamburger--emphatic-r .hamburger-inner:after{top:10px;right:0;transition:transform .125s cubic-bezier(.6,.04,.98,.335),top .05s linear .125s,right .125s ease-in .175s}.hamburger--emphatic-r.is-active .hamburger-inner{transition-delay:0s;transition-timing-function:ease-out;background-color:transparent}.hamburger--emphatic-r.is-active .hamburger-inner:before{top:80px;left:-80px;transition:left .125s ease-out,top .05s linear .125s,transform .125s cubic-bezier(.075,.82,.165,1) .175s;transform:translate3d(80px,-80px,0) rotate(-45deg)}.hamburger--emphatic-r.is-active .hamburger-inner:after{top:80px;right:-80px;transition:right .125s ease-out,top .05s linear .125s,transform .125s cubic-bezier(.075,.82,.165,1) .175s;transform:translate3d(-80px,-80px,0) rotate(45deg)}.hamburger--slider .hamburger-inner{top:2px}.hamburger--slider .hamburger-inner:before{top:10px;transition-timing-function:ease;transition-duration:.15s;transition-property:transform,opacity}.hamburger--slider .hamburger-inner:after{top:20px}.hamburger--slider.is-active .hamburger-inner{transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--slider.is-active .hamburger-inner:before{transform:rotate(-45deg) translate3d(-5.71429px,-6px,0);opacity:0}.hamburger--slider.is-active .hamburger-inner:after{transform:translate3d(0,-20px,0) rotate(-90deg)}.hamburger--slider-r .hamburger-inner{top:2px}.hamburger--slider-r .hamburger-inner:before{top:10px;transition-timing-function:ease;transition-duration:.15s;transition-property:transform,opacity}.hamburger--slider-r .hamburger-inner:after{top:20px}.hamburger--slider-r.is-active .hamburger-inner{transform:translate3d(0,10px,0) rotate(-45deg)}.hamburger--slider-r.is-active .hamburger-inner:before{transform:rotate(45deg) translate3d(5.71429px,-6px,0);opacity:0}.hamburger--slider-r.is-active .hamburger-inner:after{transform:translate3d(0,-20px,0) rotate(90deg)}.hamburger--spring .hamburger-inner{top:2px;transition:background-color 0s linear .13s}.hamburger--spring .hamburger-inner:before{top:10px;transition:top .1s cubic-bezier(.33333,.66667,.66667,1) .2s,transform .13s cubic-bezier(.55,.055,.675,.19)}.hamburger--spring .hamburger-inner:after{top:20px;transition:top .2s cubic-bezier(.33333,.66667,.66667,1) .2s,transform .13s cubic-bezier(.55,.055,.675,.19)}.hamburger--spring.is-active .hamburger-inner{transition-delay:.22s;background-color:transparent}.hamburger--spring.is-active .hamburger-inner:before{top:0;transition:top .1s cubic-bezier(.33333,0,.66667,.33333) .15s,transform .13s cubic-bezier(.215,.61,.355,1) .22s;transform:translate3d(0,10px,0) rotate(45deg)}.hamburger--spring.is-active .hamburger-inner:after{top:0;transition:top .2s cubic-bezier(.33333,0,.66667,.33333),transform .13s cubic-bezier(.215,.61,.355,1) .22s;transform:translate3d(0,10px,0) rotate(-45deg)}.hamburger--spring-r .hamburger-inner{top:auto;bottom:0;transition-delay:0s;transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:.13s}.hamburger--spring-r .hamburger-inner:after{top:-20px;transition:top .2s cubic-bezier(.33333,.66667,.66667,1) .2s,opacity 0s linear}.hamburger--spring-r .hamburger-inner:before{transition:top .1s cubic-bezier(.33333,.66667,.66667,1) .2s,transform .13s cubic-bezier(.55,.055,.675,.19)}.hamburger--spring-r.is-active .hamburger-inner{transition-delay:.22s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:translate3d(0,-10px,0) rotate(-45deg)}.hamburger--spring-r.is-active .hamburger-inner:after{top:0;transition:top .2s cubic-bezier(.33333,0,.66667,.33333),opacity 0s linear .22s;opacity:0}.hamburger--spring-r.is-active .hamburger-inner:before{top:0;transition:top .1s cubic-bezier(.33333,0,.66667,.33333) .15s,transform .13s cubic-bezier(.215,.61,.355,1) .22s;transform:rotate(90deg)}.hamburger--stand .hamburger-inner{transition:transform 75ms cubic-bezier(.55,.055,.675,.19) .15s,background-color 0s linear 75ms}.hamburger--stand .hamburger-inner:before{transition:top 75ms ease-in 75ms,transform 75ms cubic-bezier(.55,.055,.675,.19) 0s}.hamburger--stand .hamburger-inner:after{transition:bottom 75ms ease-in 75ms,transform 75ms cubic-bezier(.55,.055,.675,.19) 0s}.hamburger--stand.is-active .hamburger-inner{transition:transform 75ms cubic-bezier(.215,.61,.355,1) 0s,background-color 0s linear .15s;transform:rotate(90deg);background-color:transparent}.hamburger--stand.is-active .hamburger-inner:before{top:0;transition:top 75ms ease-out .1s,transform 75ms cubic-bezier(.215,.61,.355,1) .15s;transform:rotate(-45deg)}.hamburger--stand.is-active .hamburger-inner:after{bottom:0;transition:bottom 75ms ease-out .1s,transform 75ms cubic-bezier(.215,.61,.355,1) .15s;transform:rotate(45deg)}.hamburger--stand-r .hamburger-inner{transition:transform 75ms cubic-bezier(.55,.055,.675,.19) .15s,background-color 0s linear 75ms}.hamburger--stand-r .hamburger-inner:before{transition:top 75ms ease-in 75ms,transform 75ms cubic-bezier(.55,.055,.675,.19) 0s}.hamburger--stand-r .hamburger-inner:after{transition:bottom 75ms ease-in 75ms,transform 75ms cubic-bezier(.55,.055,.675,.19) 0s}.hamburger--stand-r.is-active .hamburger-inner{transition:transform 75ms cubic-bezier(.215,.61,.355,1) 0s,background-color 0s linear .15s;transform:rotate(-90deg);background-color:transparent}.hamburger--stand-r.is-active .hamburger-inner:before{top:0;transition:top 75ms ease-out .1s,transform 75ms cubic-bezier(.215,.61,.355,1) .15s;transform:rotate(-45deg)}.hamburger--stand-r.is-active .hamburger-inner:after{bottom:0;transition:bottom 75ms ease-out .1s,transform 75ms cubic-bezier(.215,.61,.355,1) .15s;transform:rotate(45deg)}.hamburger--spin .hamburger-inner{transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:.22s}.hamburger--spin .hamburger-inner:before{transition:top .1s ease-in .25s,opacity .1s ease-in}.hamburger--spin .hamburger-inner:after{transition:bottom .1s ease-in .25s,transform .22s cubic-bezier(.55,.055,.675,.19)}.hamburger--spin.is-active .hamburger-inner{transition-delay:.12s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:rotate(225deg)}.hamburger--spin.is-active .hamburger-inner:before{top:0;transition:top .1s ease-out,opacity .1s ease-out .12s;opacity:0}.hamburger--spin.is-active .hamburger-inner:after{bottom:0;transition:bottom .1s ease-out,transform .22s cubic-bezier(.215,.61,.355,1) .12s;transform:rotate(-90deg)}.hamburger--spin-r .hamburger-inner{transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:.22s}.hamburger--spin-r .hamburger-inner:before{transition:top .1s ease-in .25s,opacity .1s ease-in}.hamburger--spin-r .hamburger-inner:after{transition:bottom .1s ease-in .25s,transform .22s cubic-bezier(.55,.055,.675,.19)}.hamburger--spin-r.is-active .hamburger-inner{transition-delay:.12s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:rotate(-225deg)}.hamburger--spin-r.is-active .hamburger-inner:before{top:0;transition:top .1s ease-out,opacity .1s ease-out .12s;opacity:0}.hamburger--spin-r.is-active .hamburger-inner:after{bottom:0;transition:bottom .1s ease-out,transform .22s cubic-bezier(.215,.61,.355,1) .12s;transform:rotate(90deg)}.hamburger--squeeze .hamburger-inner{transition-timing-function:cubic-bezier(.55,.055,.675,.19);transition-duration:75ms}.hamburger--squeeze .hamburger-inner:before{transition:top 75ms ease .12s,opacity 75ms ease}.hamburger--squeeze .hamburger-inner:after{transition:bottom 75ms ease .12s,transform 75ms cubic-bezier(.55,.055,.675,.19)}.hamburger--squeeze.is-active .hamburger-inner{transition-delay:.12s;transition-timing-function:cubic-bezier(.215,.61,.355,1);transform:rotate(45deg)}.hamburger--squeeze.is-active .hamburger-inner:before{top:0;transition:top 75ms ease,opacity 75ms ease .12s;opacity:0}.hamburger--squeeze.is-active .hamburger-inner:after{bottom:0;transition:bottom 75ms ease,transform 75ms cubic-bezier(.215,.61,.355,1) .12s;transform:rotate(-90deg)}.hamburger--vortex .hamburger-inner{transition-timing-function:cubic-bezier(.19,1,.22,1);transition-duration:.2s}.hamburger--vortex .hamburger-inner:after,.hamburger--vortex .hamburger-inner:before{transition-delay:.1s;transition-timing-function:linear;transition-duration:0s}.hamburger--vortex .hamburger-inner:before{transition-property:top,opacity}.hamburger--vortex .hamburger-inner:after{transition-property:bottom,transform}.hamburger--vortex.is-active .hamburger-inner{transition-timing-function:cubic-bezier(.19,1,.22,1);transform:rotate(765deg)}.hamburger--vortex.is-active .hamburger-inner:after,.hamburger--vortex.is-active .hamburger-inner:before{transition-delay:0s}.hamburger--vortex.is-active .hamburger-inner:before{top:0;opacity:0}.hamburger--vortex.is-active .hamburger-inner:after{bottom:0;transform:rotate(90deg)}.hamburger--vortex-r .hamburger-inner{transition-timing-function:cubic-bezier(.19,1,.22,1);transition-duration:.2s}.hamburger--vortex-r .hamburger-inner:after,.hamburger--vortex-r .hamburger-inner:before{transition-delay:.1s;transition-timing-function:linear;transition-duration:0s}.hamburger--vortex-r .hamburger-inner:before{transition-property:top,opacity}.hamburger--vortex-r .hamburger-inner:after{transition-property:bottom,transform}.hamburger--vortex-r.is-active .hamburger-inner{transition-timing-function:cubic-bezier(.19,1,.22,1);transform:rotate(-765deg)}.hamburger--vortex-r.is-active .hamburger-inner:after,.hamburger--vortex-r.is-active .hamburger-inner:before{transition-delay:0s}.hamburger--vortex-r.is-active .hamburger-inner:before{top:0;opacity:0}.hamburger--vortex-r.is-active .hamburger-inner:after{bottom:0;transform:rotate(-90deg)}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growthspark' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="two columns">
				<div class="site-branding">
					<a class="site-title" href="<?php echo site_url(); ?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/sagency/img/logo.png?v2" alt="Logo">	                
					<?php/*
					if ($top_left == "logo"){ ?><img id="top-left-logo" src="<?php
						echo $upload_logo; ?>" alt="Logo for <?php
						echo get_bloginfo('name'); ?>">
						<?php } else
						{
						echo get_bloginfo('name');
					} */?>
					</a>
				</div><!-- .site-branding -->
			</div>
			<div class="ten columns">
				<nav id="site-navigation" class="main-navigation main_menu " role="navigation">
					<div class="av-main-nav-wrap ">
						<div class="av-main-nav">
							<div class="menu-toggle">
							<!--button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'growthspark' ); ?></button-->
								<button class=" hamburger hamburger--spring" aria-controls="primary-menu" aria-expanded="false" type="button">
								  <span class="hamburger-box">
								    <span class="hamburger-inner"></span>
								  </span>
								</button>
							</div>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- container -->
	</header><!-- #masthead -->

<div class="clear clearfix"></div>

	<div id="content" class="site-content">
		<div class="row">
