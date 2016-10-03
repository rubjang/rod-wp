<?php 
error_reporting( error_reporting() & ~E_NOTICE );
global $thaitheme_option;
$thaitheme_menu_color  =  $thaitheme_option['thaitheme_menu_color']['regular'];
$thaitheme_menu_font_color_regular =  $thaitheme_option['thaitheme_menu_font_color']['regular'];
$thaitheme_menu_font_color_hover  =  $thaitheme_option['thaitheme_menu_font_color']['hover'];
$thaitheme_menu_boder_color_regular =  $thaitheme_option['thaitheme_menu_boder_color']['regular'];
$thaitheme_menu_boder_color_hover  =  $thaitheme_option['thaitheme_menu_boder_color']['hover'];
$thaitheme_top_color  =  $thaitheme_option['thaitheme_top_color']['regular'];
if ( $thaitheme_menu_color) {
echo '.steps .present.setp2,.steps .past,.tt_head_aurtor,.form-submit input[type=submit],.tt_member.manage,.tt_user_link a.btn_link,.tt_user_link,#submit-h,.tt_head_content.tt_shows.tt_fixed .tt_btn_allmenu.activate,.tt_search_header #submit-from ,#tt_head_m,.sb-slidebar {background-color:'.$thaitheme_menu_color.';}';
} else {
echo '.steps .present.setp2,.steps .past,.tt_head_aurtor,.form-submit input[type=submit],.tt_member.manage,.tt_user_link a.btn_link,.tt_user_link,#submit-h,.tt_head_content.tt_shows.tt_fixed .tt_btn_allmenu.activate,#tt_head_m,.sb-slidebar {background-color:#F7AC4D;}';
}
if ( $thaitheme_menu_color) {
echo 'ul.category-parent li a,.steps .past.setp1,.steps .present,.tt_comment h2 span{color:'.$thaitheme_menu_color.';}';
} else {
echo 'ul.category-parent li a,.steps .past.setp1,.steps .present,.tt_comment h2 span{color:#326295;}';
}
if ( $thaitheme_menu_color) {
echo '.tt_ar:after {border-right:7px solid '.$thaitheme_menu_color.';}';
} else {
echo '.tt_ar:after {border-right:7px solid #326295;}';
}
if ( $thaitheme_menu_color) {
echo '.steps li.past + li > span::before{border-left-color:'.$thaitheme_menu_color.';}';
} else {
echo '.steps li.past + li > span::before{border-left-color:#326295;}';
}
if ( $thaitheme_menu_font_color_regular) {
echo '.tt_list_menu,.steps .present.setp2,.steps .past,.tt_id_aurtor,.tt_head_aurtor,.form-submit input[type=submit],.tt_user_name a,.tt_user_name,.tt_user_link a.btn_link,.tt_user_link,#submit-h,.tt_head_menu ul li .fa,.tt_head_menu ul li a{color:'.$thaitheme_menu_font_color_regular.';}';
} else {
echo '.tt_list_menu,.steps .present.setp2,.steps .past,.tt_id_aurtor,.tt_head_aurtor,.form-submit input[type=submit],.tt_user_name a,.tt_user_name,.tt_user_link a.btn_link,.tt_user_link,#submit-h,.tt_head_menu ul li .fa,.tt_head_menu ul li a{color:#fff;}';
}
if ( $thaitheme_menu_font_color_hover) {
echo '.tt_list_menu:hover,.tt_head_menu ul li:hover .fa,.tt_head_menu ul li:hover a{color:'.$thaitheme_menu_font_color_hover.';}';
} else {
echo '.tt_list_menu:hover,.tt_head_menu ul li:hover .fa,.tt_head_menu ul li:hover a{color:#333;}';
}
if ( $thaitheme_menu_boder_color_regular) {
echo '.tt_head_menu ul li,.tt_head_menu ul li.menu-item-has-children{border-top:3px solid '.$thaitheme_menu_boder_color_regular.';}';
} else {
echo '.tt_head_menu ul li,.tt_head_menu ul li.menu-item-has-children{border-top:3px solid #f7b360;}';
}

if ( $thaitheme_menu_boder_color_hover) {
echo '.tt_head_menu ul li:hover,.tt_head_menu ul li.menu-item-has-children:hover{border-top:3px solid '.$thaitheme_menu_boder_color_hover.';}';
} else {
echo '.tt_head_menu ul li:hover,.tt_head_menu ul li.menu-item-has-children:hover{border-top:3px solid #333;}';
}
if ( $thaitheme_menu_color) {
echo '.tt_list.thaitheme.post_news:hover h3,.tt-title-sec h2,.tt-title-sec h2  a {color:'.$thaitheme_menu_color.';}.tt-title-sec h2 {border-bottom:3px solid '.$thaitheme_menu_color.';}';
} else {
echo '.tt_list.thaitheme.post_news:hover h3,.tt-title-sec h2.tt-title-sec h2 {color:#326295;}.tt-title-sec h2.tt-title-sec h2 {border-bottom:3px solid #326295;}';
}

if ( $thaitheme_top_color) {
echo '.tt_btn_search_m,.tt_user_name a,.tt_btn_allmenu,.tt_head_top {background-color:'.$thaitheme_top_color.';}';
} else {
echo '.tt_btn_search_m,.tt_user_name a,.tt_btn_allmenu,.tt_head_top {background-color:#027CD5;}';
}