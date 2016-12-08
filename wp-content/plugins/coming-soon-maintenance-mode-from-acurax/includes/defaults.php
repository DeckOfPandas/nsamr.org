<?php
function acx_csma_appearence_array_default_value_setting($acx_csma_appearence_array_default)
{
	//set default values to database
	//******************template 1**********************
	$acx_csma_background_image1= ACX_CSMA_BASE_LOCATION . 'templates/1/images/body_bg.jpg';
	$acx_csma_logo1=ACX_CSMA_BASE_LOCATION . 'templates/1/images/logo.png';
	$acx_csma_logo_choice1="image";
	$acx_csma_logo_text1=get_bloginfo('name');
	$acx_csma_logo_text_color1="#ffffff";
	$acx_csma_title1=__("Something New Is Coming","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_title_color1="#ffffff";
	$acx_csma_subtitle_text1=__("We are Working on Our Website","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subtitle_color1="#fffaa9";
	$acx_csma_custom_html_top_temp1="";
	$acx_csma_inside_bg_color1="#ff7800";
	$acx_csma_inside_title1=__("Estimate Time Before Launching","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_custom_html_top_temp1_title="";
	$acx_csma_inside_title_color1="#ffffff";
	$acx_csma_custom_html_bottom_temp1="";
	$acx_csma_show_timer1 = 1;
	$acx_csma_timer_bg_color1="#ffffff";
	$acx_csma_timer_iptext_color1="#ffffff";
	$acx_csma_timer_head_color1="#ff7800";
	$acx_csma_timer_input_bg_color1="#0b1c2c";
	$acx_csma_show_subscription = 1;
	$acx_csma_show_subscription_name = 1;
	$acx_csma_custom_html_top_sub1 = "";
	$acx_csma_custom_html_bottom_sub1= "";
	$acx_csma_subscribe_bg_color1="#0b1c2c";
	$acx_csma_subscribe_btn_text1=__("submit","coming-soon-maintenance-mode-from-acurax");;
	$acx_csma_subscribe_btn_text_color1="#ffffff";
	$acx_csma_subscribe_btn_color1="#ff7800";
	$acx_csma_subscribe_btn_hover_color1="#0b1c2c";
	$acx_csma_subscribe_btn_hover_bgcolor1="#ff881e";
	$acx_csma_subscribe_title1=__("Subscribe For Updates","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_title_color1="#ff7800";
	$acx_csma_subscribe_success1=__("Successfully Subscribed","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_invalid1=__("Invalid Email","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_footer_bgcolor1="#ff7800";
	$acx_csma_footer_text1="&copy;". date("Y").__(" All rights reserved","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_footer_text_color1="#ffffff";
	$acx_csma_custom_css_temp1= "";
	// *******************template2*********************
	$acx_csma_bg_color2="#e4e4e4";
	$acx_csma_logo2= ACX_CSMA_BASE_LOCATION . 'templates/2/images/logo.png';
	$acx_csma_logo_choice2="image";
	$acx_csma_logo_text2=get_bloginfo('name');
	$acx_csma_logo_text_color2="#ffffff";
	$acx_csma_title2=__("Hello","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_title_color2="#000000";
	$acx_csma_subtitle_text2=__("We are Coming Very Soon","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subtitle_color2="#000000";
	$acx_csma_inside_bg_color2="#ffd800";
	$acx_csma_custom_html_above_timer="";
	$acx_csma_custom_html_top_timer="";
	$acx_csma_show_subscription2 = 1;
	$acx_csma_show_subscription_name2 = 1;
	$acx_csma_subscribe_btn_text2 = __("Submit","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_show_timer2 = 1;
	$acx_csma_timer_title2=__("Estimate time for launching","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_timer_title_color2="#000000";
	$acx_csma_subscribe_btn_color2="#ffd800";
	$acx_csma_subscribe_success2=__("Successfully Subscribed","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_invalid2=__("Invalid Email","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_timer_input_bg_color2="#ffffff";
	$acx_csma_timer_iptext_color2="#000000";
	$acx_csma_timer_head_color2="#000000";
	$acx_csma_custom_html_top_temp2="";
	$acx_csma_desc_title2=__("What is Coming","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_desc_subtitle2=stripslashes(trim(__("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.","coming-soon-maintenance-mode-from-acurax")));
	$acx_csma_desc_text_color2="#000000";
	$acx_csma_social_link_color2="#ffffff";
	$acx_csma_desc_content_color2="#000000";
	$acx_csma_social_link_title2=__("Follow Us ON","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_fb_link2="";
	$acx_csma_twitter_link2="";
	$acx_csma_linkedin_link2="";
	$acx_csma_custom_css_temp2="";
	//*******************template 3*******************
	$acx_csma_logo3= ACX_CSMA_BASE_LOCATION . 'templates/3/images/logo.png';
	$acx_csma_logo_choice3="image";
	$acx_csma_logo_text3=get_bloginfo('name');
	$acx_csma_logo_text_color3="#ffffff";
	$acx_csma_title3=__("Hello","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_title_color3="#ffffff";
	$acx_csma_subtitle_text3=__("We are Coming Very Soon","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subtitle_color3="#ffffff";
	$acx_csma_primary_color3="#ffffff";
	$acx_csma_secondary_color3="#fe7e01";
	$acx_csma_left_bar_color3="#000000";
	$acx_csma_timer_color3="#ffffff";
	$acx_csma_subscribe_title3=__("Subscribe  Now","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_title_color3="#fe7e01";
	$acx_csma_show_subscription3 = 1;
	$acx_csma_show_subscription_name3 = 1;
	$acx_csma_show_timer3 = 1;
	$acx_csma_subscribe_btn_text3=__("submit","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_btn_text_color3="#ffffff";
	$acx_csma_subscribe_btn_color3="#fe7e01";
	$acx_csma_subscribe_btn_hover_color3="#0b1c2c";
	$acx_csma_subscribe_btn_hover_bgcolor3="#fe6001";
	$acx_csma_subscribe_success3=__("Successfully Subscribed","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_invalid3=__("Invalid Email","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_inside_title3=__("Estimate Time Before Launching","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_inside_title_color3="#ffffff";
	$acx_csma_timer_iptext_color3="#000000";
	$acx_csma_timer_head_color3="#000000";
	$acx_csma_custom_html_top_temp3="";
	$acx_csma_custom_html_top_timer_temp3="";
	$acx_csma_custom_html_bottom_temp3="";
	$acx_csma_desc_title3=__("What is Coming","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_desc_subtitle3=stripslashes(trim(__("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.","coming-soon-maintenance-mode-from-acurax")));
	$acx_csma_desc_text_color3="#000000";
	$acx_csma_desc_content_color3="#000000";
	$acx_csma_footer_text3="&copy;". date("Y").__(" All rights reserved","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_footer_color3="#000000";
	$acx_csma_social_link_title3=__("Follow Us ON","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_social_link_title_color3="#000000";
	$acx_csma_fb_link3="";
	$acx_csma_twitter_link3="";
	$acx_csma_linkedin_link3="";
	$acx_csma_custom_css_temp3="";
	// ******************template 4*******************
	$acx_csma_background_image4 = ACX_CSMA_BASE_LOCATION . 'templates/4/images/body_bg.jpg';
	$acx_csma_logo4 = ACX_CSMA_BASE_LOCATION . 'templates/4/images/logo.png';
	$acx_csma_logo_choice4="image";
	$acx_csma_logo_text4=get_bloginfo('name');
	$acx_csma_logo_text_color4="#ffffff";
	$acx_csma_inside_bg_color4="#ebebeb";
	$acx_csma_title4=__("Our Website is Under Construction","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_custom_html_top_temp4="";
	$acx_csma_title_color4="#717171";
	$acx_csma_show_timer4=1;
	$acx_csma_timer_iptext_color4="#717171";
	$acx_csma_timer_head_color4="#717171";
	$acx_csma_show_progressbar4=1;
	$acx_csma_progress_bar_color4="#717171";
	$acx_csma_progress_bar_bg_color4="#000000";
	$acx_csma_progress_bar_text_color4="#ffffff";
	$acx_csma_custom_html_bottom_temp4="";
	$acx_csma_subscription_title4=__("Subscribe For Updates","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscription_title_color4 = "#666666";
	$acx_csma_subscribe_success4 = __("Successfully Subscribed","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_invalid4 = __("Invalid Email","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_custom_html_subscrpt_below_sub4 = "";
	$acx_csma_subscription_btn_text4 = __("Subscribe","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscription_btn_color4 = "#ffffff";
	$acx_csma_subscription_btn_bg_color4 = "#333333";
	$acx_csma_show_subscription4 = 1;
	$acx_csma_show_subscription_name4 = 1;
	$acx_csma_fb_link4="";
	$acx_csma_twitter_link4="";
	$acx_csma_linkedin_link4="";
	$acx_csma_custom_css_temp4= "";
	//*******************template 5********************
	$acx_csma_bgcolor5="#e9eaec";
	$acx_csma_logo5= ACX_CSMA_BASE_LOCATION . 'templates/5/images/logo.png';
	$acx_csma_logo_choice5="image";
	$acx_csma_logo_text5=get_bloginfo('name');
	$acx_csma_logo_text_color5="#000000";
	$acx_csma_inside_bg_color5="#f5f5f5";
	$acx_csma_title5=__("Our Website is Under Construction","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_custom_html_top_temp5="";
	$acx_csma_title_color5="#4b4b4b";
	$acx_csma_show_timer5=1;
	$acx_csma_timer_iptext_color5="#000000";
	$acx_csma_timer_head_color5="#000000";
	$acx_csma_show_progressbar5=1;
	$acx_csma_progress_bar_color5="#717171";
	$acx_csma_progress_bar_bg_color5 = "#000000";
	$acx_csma_progress_bar_text_color5 = "#ffffff";
	$acx_csma_custom_html_bottom_temp5="";
	$acx_csma_show_subscription5 = 1;
	$acx_csma_show_subscription_name5 = 1;
	$acx_csma_subscribe_btn_text5 = __("Submit","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_custom_html_top_sub = "";
	$acx_csma_custom_html_bottom_sub= "";
	$acx_csma_subscribe_bg_color5="#2f2f2f";
	$acx_csma_launch_title_color5="#4b4b4b";
	$acx_csma_subscribe_main_title5 = __("Want to know when we launch?","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_title5=__("Subscribe by entering your email below","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_success5=__("Successfully Subscribed","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_subscribe_invalid5=__("Invalid Email","coming-soon-maintenance-mode-from-acurax");
	$acx_csma_fb_link5="";
	$acx_csma_twitter_link5="";
	$acx_csma_linkedin_link5="";
	$acx_csma_custom_css_temp5= "";

$acx_csma_appearence_array_default['1'] = array(
						'acx_csma_background_image1'=>$acx_csma_background_image1,
						'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice1),
						'acx_csma_logo1'=>$acx_csma_logo1,
						'acx_csma_logo_text1' =>sanitize_text_field($acx_csma_logo_text1),
						'acx_csma_logo_text_color1' =>sanitize_text_field($acx_csma_logo_text_color1),
						'acx_csma_title1'=>sanitize_text_field($acx_csma_title1),
						'acx_csma_title_color1'=>sanitize_text_field($acx_csma_title_color1),
						'acx_csma_subtitle_text1'=>sanitize_text_field($acx_csma_subtitle_text1),
						'acx_csma_subtitle_color1'=>sanitize_text_field($acx_csma_subtitle_color1),
						'acx_csma_custom_html_top_temp1'=>$acx_csma_custom_html_top_temp1,
						'acx_csma_inside_bg_color1'=>sanitize_text_field($acx_csma_inside_bg_color1),
						'acx_csma_inside_title1'=>sanitize_text_field($acx_csma_inside_title1),
						'acx_csma_custom_html_top_temp1_title'=>$acx_csma_custom_html_top_temp1_title,
						'acx_csma_inside_title_color1'=>sanitize_text_field($acx_csma_inside_title_color1),
						'acx_csma_custom_html_bottom_temp1'=>$acx_csma_custom_html_bottom_temp1,
						'acx_csma_show_timer1'=>sanitize_text_field($acx_csma_show_timer1),
						'acx_csma_timer_bg_color1'=>sanitize_text_field($acx_csma_timer_bg_color1),
						'acx_csma_timer_iptext_color1'=>sanitize_text_field($acx_csma_timer_iptext_color1),
						'acx_csma_timer_head_color1'=>sanitize_text_field($acx_csma_timer_head_color1),
						'acx_csma_timer_input_bg_color1'=>sanitize_text_field($acx_csma_timer_input_bg_color1),
						'acx_csma_show_subscription'=>sanitize_text_field($acx_csma_show_subscription),
						'acx_csma_show_subscription_name'=>sanitize_text_field($acx_csma_show_subscription_name),
						'acx_csma_custom_html_top_sub1'=>sanitize_text_field($acx_csma_custom_html_top_sub1),
						'acx_csma_custom_html_bottom_sub1'=>sanitize_text_field($acx_csma_custom_html_bottom_sub1),
						'acx_csma_subscribe_bg_color1'=>sanitize_text_field($acx_csma_subscribe_bg_color1),
						'acx_csma_subscribe_btn_text1'=>sanitize_text_field($acx_csma_subscribe_btn_text1),
						'acx_csma_subscribe_btn_text_color1'=>sanitize_text_field($acx_csma_subscribe_btn_text_color1),
						'acx_csma_subscribe_btn_color1'=>sanitize_text_field($acx_csma_subscribe_btn_color1),
						'acx_csma_subscribe_btn_hover_color1'=>sanitize_text_field($acx_csma_subscribe_btn_hover_color1),
						'acx_csma_subscribe_btn_hover_bgcolor1'=>sanitize_text_field($acx_csma_subscribe_btn_hover_bgcolor1),
						'acx_csma_subscribe_title1'=>sanitize_text_field($acx_csma_subscribe_title1),
						'acx_csma_subscribe_title_color1'=>sanitize_text_field($acx_csma_subscribe_title_color1),
						'acx_csma_subscribe_success1'=>sanitize_text_field($acx_csma_subscribe_success1),
						'acx_csma_subscribe_invalid1'=>sanitize_text_field($acx_csma_subscribe_invalid1),
						'acx_csma_footer_bgcolor1'=>sanitize_text_field($acx_csma_footer_bgcolor1),
						'acx_csma_footer_text1'=>sanitize_text_field($acx_csma_footer_text1),
						'acx_csma_footer_text_color1'=>sanitize_text_field($acx_csma_footer_text_color1),
						'acx_csma_custom_css_temp1'=>sanitize_text_field($acx_csma_custom_css_temp1)
						);
$acx_csma_appearence_array_default['2'] = array(
						'acx_csma_bg_color2'=>sanitize_text_field($acx_csma_bg_color2),
						'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice2),
						'acx_csma_logo2'=>$acx_csma_logo2,
						'acx_csma_logo_text2' =>sanitize_text_field($acx_csma_logo_text2),
						'acx_csma_logo_text_color2' =>sanitize_text_field($acx_csma_logo_text_color2),
						'acx_csma_title2'=>sanitize_text_field($acx_csma_title2),
						'acx_csma_title_color2'=>sanitize_text_field($acx_csma_title_color2),
						'acx_csma_subtitle_text2'=>sanitize_text_field($acx_csma_subtitle_text2),
						'acx_csma_subtitle_color2'=>sanitize_text_field($acx_csma_subtitle_color2),
						'acx_csma_inside_bg_color2'=>sanitize_text_field($acx_csma_inside_bg_color2),
						'acx_csma_custom_html_above_timer'=>$acx_csma_custom_html_above_timer,
						'acx_csma_custom_html_top_timer'=>$acx_csma_custom_html_top_timer,
						'acx_csma_show_subscription2'=>sanitize_text_field($acx_csma_show_subscription2),
						'acx_csma_show_subscription_name2'=>sanitize_text_field($acx_csma_show_subscription_name2),
						'acx_csma_subscribe_btn_text2'=>sanitize_text_field($acx_csma_subscribe_btn_text2),
						'acx_csma_show_timer2'=>sanitize_text_field($acx_csma_show_timer2),
						'acx_csma_timer_title2'=>sanitize_text_field($acx_csma_timer_title2),
						'acx_csma_timer_title_color2'=>sanitize_text_field($acx_csma_timer_title_color2),
						'acx_csma_subscribe_btn_color2'=>sanitize_text_field($acx_csma_subscribe_btn_color2),
						'acx_csma_subscribe_success2'=>sanitize_text_field($acx_csma_subscribe_success2),
						'acx_csma_subscribe_invalid2'=>sanitize_text_field($acx_csma_subscribe_invalid2),
						'acx_csma_timer_input_bg_color2'=>sanitize_text_field($acx_csma_timer_input_bg_color2),
						'acx_csma_timer_iptext_color2'=>sanitize_text_field($acx_csma_timer_iptext_color2),
						'acx_csma_timer_head_color2'=>sanitize_text_field($acx_csma_timer_head_color2),
						'acx_csma_custom_html_top_temp2'=>$acx_csma_custom_html_top_temp2,
						'acx_csma_desc_title2'=>sanitize_text_field($acx_csma_desc_title2),
						'acx_csma_desc_subtitle2'=>sanitize_text_field($acx_csma_desc_subtitle2),
						'acx_csma_desc_text_color2'=>sanitize_text_field($acx_csma_desc_text_color2),
						'acx_csma_social_link_color2'=>sanitize_text_field($acx_csma_social_link_color2),
						'acx_csma_desc_content_color2'=>sanitize_text_field($acx_csma_desc_content_color2),
						'acx_csma_social_link_title2'=>sanitize_text_field($acx_csma_social_link_title2),
						'acx_csma_fb_link2'=>esc_url_raw($acx_csma_fb_link2),
						'acx_csma_twitter_link2'=>esc_url_raw($acx_csma_twitter_link2),
						'acx_csma_linkedin_link2'=>esc_url_raw($acx_csma_linkedin_link2),
						'acx_csma_custom_css_temp2'=>$acx_csma_custom_css_temp2
						);
$acx_csma_appearence_array_default['3'] =array(
						'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice3),
						'acx_csma_logo3'=>$acx_csma_logo3,
						'acx_csma_logo_text3' =>sanitize_text_field($acx_csma_logo_text3),
						'acx_csma_logo_text_color3' =>sanitize_text_field($acx_csma_logo_text_color3),
						'acx_csma_title3'=>sanitize_text_field($acx_csma_title3),
						'acx_csma_title_color3'=>sanitize_text_field($acx_csma_title_color3),
						'acx_csma_subtitle_text3'=>sanitize_text_field($acx_csma_subtitle_text3),
						'acx_csma_subtitle_color3'=>sanitize_text_field($acx_csma_subtitle_color3),
						'acx_csma_primary_color3'=>sanitize_text_field($acx_csma_primary_color3),
						'acx_csma_secondary_color3'=>sanitize_text_field($acx_csma_secondary_color3),
						'acx_csma_left_bar_color3'=>sanitize_text_field($acx_csma_left_bar_color3),
						'acx_csma_timer_color3'=>sanitize_text_field($acx_csma_timer_color3),
						'acx_csma_subscribe_title3'=>sanitize_text_field($acx_csma_subscribe_title3),
						'acx_csma_subscribe_title_color3'=>sanitize_text_field($acx_csma_subscribe_title_color3),
						'acx_csma_subscribe_btn_text3'=>sanitize_text_field($acx_csma_subscribe_btn_text3),
						'acx_csma_subscribe_btn_text_color3'=>sanitize_text_field($acx_csma_subscribe_btn_text_color3),
						'acx_csma_subscribe_btn_color3'=>sanitize_text_field($acx_csma_subscribe_btn_color3),
						'acx_csma_subscribe_btn_hover_color3'=>sanitize_text_field($acx_csma_subscribe_btn_hover_color3),
						'acx_csma_subscribe_btn_hover_bgcolor3'=>sanitize_text_field($acx_csma_subscribe_btn_hover_bgcolor3),
						'acx_csma_show_subscription3'=>sanitize_text_field($acx_csma_show_subscription3),
						'acx_csma_show_subscription_name3'=>sanitize_text_field($acx_csma_show_subscription_name3),
						'acx_csma_show_timer3'=>sanitize_text_field($acx_csma_show_timer3),
						'acx_csma_subscribe_success3'=>sanitize_text_field($acx_csma_subscribe_success3),
						'acx_csma_subscribe_invalid3'=>sanitize_text_field($acx_csma_subscribe_invalid3),
						'acx_csma_inside_title3'=>sanitize_text_field($acx_csma_inside_title3),
						'acx_csma_inside_title_color3'=>sanitize_text_field($acx_csma_inside_title_color3),
						'acx_csma_timer_iptext_color3'=>sanitize_text_field($acx_csma_timer_iptext_color3),
						'acx_csma_timer_head_color3'=>sanitize_text_field($acx_csma_timer_head_color3),
						'acx_csma_custom_html_top_temp3'=>$acx_csma_custom_html_top_temp3,
						'acx_csma_custom_html_top_timer_temp3'=>$acx_csma_custom_html_top_timer_temp3,
						'acx_csma_custom_html_bottom_temp3'=>$acx_csma_custom_html_bottom_temp3,
						'acx_csma_desc_title3'=>sanitize_text_field($acx_csma_desc_title3),
						'acx_csma_desc_subtitle3'=>sanitize_text_field($acx_csma_desc_subtitle3),
						'acx_csma_desc_text_color3'=>sanitize_text_field($acx_csma_desc_text_color3),
						'acx_csma_desc_content_color3'=>sanitize_text_field($acx_csma_desc_content_color3),
						'acx_csma_footer_text3'=>sanitize_text_field($acx_csma_footer_text3),
						'acx_csma_footer_color3'=>sanitize_text_field($acx_csma_footer_color3),
						'acx_csma_social_link_title3'=>sanitize_text_field($acx_csma_social_link_title3),
						'acx_csma_social_link_title_color3'=>sanitize_text_field($acx_csma_social_link_title_color3),
						'acx_csma_fb_link3'=>esc_url_raw($acx_csma_fb_link3),
						'acx_csma_twitter_link3'=>esc_url_raw($acx_csma_twitter_link3),
						'acx_csma_linkedin_link3'=>esc_url_raw($acx_csma_linkedin_link3),
						'acx_csma_custom_css_temp3'=>$acx_csma_custom_css_temp3
						);
$acx_csma_appearence_array_default['4'] =array(
						'acx_csma_background_image4'=>$acx_csma_background_image4,
						'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice4),
						'acx_csma_logo4'=>$acx_csma_logo4,
						'acx_csma_logo_text4' =>sanitize_text_field($acx_csma_logo_text4),
						'acx_csma_logo_text_color4' =>sanitize_text_field($acx_csma_logo_text_color4),
						'acx_csma_inside_bg_color4'=>sanitize_text_field($acx_csma_inside_bg_color4),
						'acx_csma_title4'=>sanitize_text_field($acx_csma_title4),
						'acx_csma_custom_html_top_temp4'=>$acx_csma_custom_html_top_temp4,
						'acx_csma_title_color4'=>sanitize_text_field($acx_csma_title_color4),
						'acx_csma_show_timer4'=>sanitize_text_field($acx_csma_show_timer4),
						'acx_csma_timer_iptext_color4'=>sanitize_text_field($acx_csma_timer_iptext_color4),
						'acx_csma_timer_head_color4'=>sanitize_text_field($acx_csma_timer_head_color4),
						'acx_csma_show_progressbar4'=>$acx_csma_show_progressbar4,
						'acx_csma_progress_bar_color4'=>sanitize_text_field($acx_csma_progress_bar_color4),
						'acx_csma_progress_bar_bg_color4'=>sanitize_text_field($acx_csma_progress_bar_bg_color4),
						'acx_csma_progress_bar_text_color4'=>sanitize_text_field($acx_csma_progress_bar_text_color4),
						'acx_csma_custom_html_bottom_temp4'=>$acx_csma_custom_html_bottom_temp4,
						'acx_csma_show_subscription4' => sanitize_text_field($acx_csma_show_subscription4) ,
						'acx_csma_show_subscription_name4' => sanitize_text_field($acx_csma_show_subscription_name4) ,
						'acx_csma_subscription_title4' => sanitize_text_field($acx_csma_subscription_title4),
						'acx_csma_subscription_title_color4' => sanitize_text_field($acx_csma_subscription_title_color4) ,
						'acx_csma_subscription_btn_text4' => sanitize_text_field($acx_csma_subscription_btn_text4) ,
						'acx_csma_subscription_btn_color4' => sanitize_text_field($acx_csma_subscription_btn_color4) ,
						'acx_csma_subscription_btn_bg_color4' => sanitize_text_field($acx_csma_subscription_btn_bg_color4) ,
						'acx_csma_subscribe_success4' => sanitize_text_field($acx_csma_subscribe_success4) ,
						'acx_csma_subscribe_invalid4' => sanitize_text_field($acx_csma_subscribe_invalid4) ,
						'acx_csma_custom_html_subscrpt_below_sub4' => sanitize_text_field($acx_csma_custom_html_subscrpt_below_sub4) ,
						'acx_csma_fb_link4'=>esc_url_raw($acx_csma_fb_link4),
						'acx_csma_twitter_link4'=>esc_url_raw($acx_csma_twitter_link4),
						'acx_csma_linkedin_link4'=>esc_url_raw($acx_csma_linkedin_link4),
						'acx_csma_custom_css_temp4'=>sanitize_text_field($acx_csma_custom_css_temp4)
						);
$acx_csma_appearence_array_default['5'] =array(
						'acx_csma_bgcolor5'=>sanitize_text_field($acx_csma_bgcolor5),
						'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice5),
						'acx_csma_logo5'=>$acx_csma_logo5,
						'acx_csma_logo_text5' =>sanitize_text_field($acx_csma_logo_text5),
						'acx_csma_logo_text_color5' =>sanitize_text_field($acx_csma_logo_text_color5),
						'acx_csma_inside_bg_color5'=>sanitize_text_field($acx_csma_inside_bg_color5),
						'acx_csma_title5'=>sanitize_text_field($acx_csma_title5),
						'acx_csma_custom_html_top_temp5'=>$acx_csma_custom_html_top_temp5,
						'acx_csma_title_color5'=>sanitize_text_field($acx_csma_title_color5),
						'acx_csma_show_timer5'=>sanitize_text_field($acx_csma_show_timer5),
						'acx_csma_timer_iptext_color5'=>sanitize_text_field($acx_csma_timer_iptext_color5),
						'acx_csma_timer_head_color5'=>sanitize_text_field($acx_csma_timer_head_color5),
						'acx_csma_show_progressbar5'=>$acx_csma_show_progressbar5,
						'acx_csma_progress_bar_color5'=>sanitize_text_field($acx_csma_progress_bar_color5),
						'acx_csma_progress_bar_bg_color5'=>sanitize_text_field($acx_csma_progress_bar_bg_color5),
						'acx_csma_progress_bar_text_color5'=>sanitize_text_field($acx_csma_progress_bar_text_color5),
						'acx_csma_custom_html_bottom_temp5'=>$acx_csma_custom_html_bottom_temp5,
						'acx_csma_show_subscription5'=>sanitize_text_field($acx_csma_show_subscription5),
						'acx_csma_show_subscription_name5'=>sanitize_text_field($acx_csma_show_subscription_name5),
						'acx_csma_subscribe_btn_text5'=>sanitize_text_field($acx_csma_subscribe_btn_text5),
						'acx_csma_custom_html_top_sub'=>sanitize_text_field($acx_csma_custom_html_top_sub),
						'acx_csma_custom_html_bottom_sub'=>sanitize_text_field($acx_csma_custom_html_bottom_sub),
						'acx_csma_subscribe_bg_color5'=>sanitize_text_field($acx_csma_subscribe_bg_color5),
						'acx_csma_launch_title_color5'=>sanitize_text_field($acx_csma_launch_title_color5),
						'acx_csma_subscribe_main_title5' => sanitize_text_field($acx_csma_subscribe_main_title5),
						'acx_csma_subscribe_title5'=>sanitize_text_field($acx_csma_subscribe_title5),
						'acx_csma_subscribe_success5'=>sanitize_text_field($acx_csma_subscribe_success5),
						'acx_csma_subscribe_invalid5'=>sanitize_text_field($acx_csma_subscribe_invalid5),
						'acx_csma_fb_link5'=>esc_url_raw($acx_csma_fb_link5),
						'acx_csma_twitter_link5'=>esc_url_raw($acx_csma_twitter_link5),
						'acx_csma_linkedin_link5'=>esc_url_raw($acx_csma_linkedin_link5),
						'acx_csma_custom_css_temp5'=>sanitize_text_field($acx_csma_custom_css_temp5)
						);			
	return $acx_csma_appearence_array_default;
} add_filter('acx_csma_appearence_array_default_filter','acx_csma_appearence_array_default_value_setting');
?>