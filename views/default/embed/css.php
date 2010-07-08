<?php
/**
 * Elgg embed CSS - standard across all themes
 * 
 * @package embed
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider <info@elgg.com>
 * @copyright Curverider Ltd 2008-2010
 * @link http://elgg.org/
 */
?>

#facebox {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 10000;
	text-align: left;
}
#facebox .popup {
	position: relative;
}
#facebox .body {
	padding: 10px 15px 20px 15px;
	background-color: white;
	width: 730px;
	min-height:400px;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
}
#facebox .loading {
	text-align: center;
	padding: 100px 10px 100px 10px;
}
#facebox .image {
	text-align: center;
}
#facebox .footer {
	float: right;
	width:22px;
	height:22px;
	margin:0;
	padding:0;
}
#facebox .footer img.close_image {
	background: url(<?php echo $vars['url']; ?>mod/embed/images/close_button.gif) no-repeat left top;
}
#facebox .footer img.close_image:hover {
	background: url(<?php echo $vars['url']; ?>mod/embed/images/close_button.gif) no-repeat left -31px;
}
#facebox_overlay {
	position: fixed;
	top: 0px;
	left: 0px;
	height:100%;
	width:100%;
}
.facebox_hide {
	z-index:-100;
}
.facebox_overlayBG {
	background-color: #000000;
	z-index: 9999;
}
* html #facebox_overlay { /* ie6 hack */
	position: absolute;
	height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');
}

#facebox .body .content h2 {
	color:#333333;
}


/* embeded content links */
.embeded_file.link {
	display: inline;
	margin-right: 5px;
	background-repeat:no-repeat;
	-webkit-background-size: 12px 16px;
	-moz-background-size: 12px 16px; 
	padding-left:14px;
}

/* entity listings */
.embed_data .entity_listing_icon img {
	cursor: pointer;
}
.embed_data .entity_listing  {
	border-bottom:none;
}
.embed_data:last-child {
	border-bottom:1px dotted #CCCCCC;
}
.embed_modal_videolist .entity_listing_icon img {
	width:75px;
	height:auto;
}
.embed_modal_document .embed_data .entity_listing_info {
	margin-top:0;
	margin-left:7px;
}
.embed_modal_tidypics .embed_data .entity_listing_info {
	margin-top:11px;
}
.embed_data .entity_listing_info {
	width:auto;
	margin-top:15px;
	margin-left:15px;
	float:left;
}
.embed_data .entity_listing {
	cursor:pointer;
}


/* navigation overrides */
.elgg_horizontal_tabbed_nav .selected a.embed_section,
.elgg_horizontal_tabbed_nav a.embed_section:hover {
	color:#333333;
}


/* Pagination (override core elgg css defaults) */
#facebox .body .pagination {
	float:right;	
}
#facebox .body .pagination .pagination_number {
	border:1px solid #999999; 
	color:#666666;
}
#facebox .body .pagination .pagination_number:hover {
	background-color:#aaaaaa; 
	color:black;
}
#facebox .body .pagination .pagination_previous,
#facebox .body .pagination .pagination_next {
	border:1px solid #999999; 
	color:#666666;
}
#facebox .body .pagination .pagination_previous:hover,
#facebox .body .pagination .pagination_next:hover {
	background-color:#aaaaaa; 
	color:black;
}
#facebox .body .pagination .pagination_currentpage {
	background-color:#666666; 
	border:1px solid #666666; 
	color:white;
}

/* embed web services */
.embed_disabled {
	background-color: red;
}

.embed_warning {
	background-color: yellow;
}

.embed_good {
	background-color: green;
}