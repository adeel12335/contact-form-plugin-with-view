<?php

/**
 * Plugin Name:       custom contact form
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       custom contact form
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Talha.
 * Author URI:        https://author.example.com/
 *
 * newplugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * newplugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with {Plugin Name}. If not, see {URI to Plugin License}.
 */
if (!defined('WPINC')) {

    die;

}
if (!defined('VGC_PLUGIN_DIR')) {

    define('VGC_PLUGIN_DIR', plugin_dir_url(__FILE__));

}

add_shortcode('cs-form', 'cs_form');
function cs_form()
{

    ob_start();
    include dirname( __FILE__ ) . '/form.php';
    return ob_get_clean();
}


add_action( 'wp_ajax_nopriv_cs_submit_contact_form', 'cs_submit_contact_form' );
add_action( 'wp_ajax_cs_submit_contact_form', 'cs_submit_contact_form' );
function cs_submit_contact_form(){

    $message = ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>A Simple Responsive HTML Email</title>
  <style type="text/css">
  body {margin: 0; padding: 0; min-width: 100%!important;}
  img {height: auto;}
  .content {width: 100%; max-width: 600px;}
  .header {padding: 40px 30px 20px 30px;}
  .innerpadding {padding: 30px 30px 30px 30px;}
  .borderbottom {border-bottom: 1px solid #f2eeed;}
  .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
  .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
  .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
  .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
  .bodycopy {font-size: 16px; line-height: 22px;}
  .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
  .button a {color: #ffffff; text-decoration: none;}
  .footer {padding: 20px 30px 15px 30px;}
  .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
  .footercopy a {color: #ffffff; text-decoration: underline;}
  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
  body[yahoo] .hide {display: none!important;}
  body[yahoo] .buttonwrapper {background-color: transparent!important;}
  body[yahoo] .button {padding: 0px!important;}
  body[yahoo] .button a {background-color: #effb41; padding: 15px 15px 13px!important;}
  body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }
  
     .btn_text_submit {
    background-color: rgb(129, 39, 129);
    width: 328px!important;
    height: 65px!important;
    border: none;
    color: white!important;
    padding: 10px;
    text-decoration: none!important;
}
  /*@media only screen and (min-device-width: 601px) {
  .content {width: 600px !important;}
  .col425 {width: 425px!important;}
  .col380 {width: 380px!important;}
  }*/
  </style>
  </head>
  <body yahoo bgcolor="#ffffff">
  <table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
        <td>
        <![endif]-->
      <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
     
              <tr>
            <td class="bodycopy">';

            foreach ($_POST as $key => $value){
                if($key != 'action') {
                    $message .= ucwords(str_replace("_", " ", $key)) . ' : ' . $value;
                    $message .= '<br>';

                }
            }



            $message .='</td>
          </tr>
          </table>
        </td>
      </tr>
   
    
            <td align="center" style="padding: 20px 0 0 0;">
             
            </td>
          </tr>
          </table>
        </td>
      </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
    </td>
  </tr>
  </table>
  </body>';

        $to = get_option('admin_email');
        $subject = 'Contact Form';
        $headers[] = 'From: '.$_POST['first-name'].' <' . $_POST['your-email'] . '>';
        $content_type = function () {
            return 'text/html';
        };
        add_filter('wp_mail_content_type', $content_type);
        wp_mail($to, $subject, $message, $headers);
			$id = wp_insert_post(array(
  			'post_title'=>'contact form entry'.$_POST['your-email'], 
 			 'post_type'=>'cs_contact_form', 
 			));
			update_post_meta($id,'fields',serialize($_POST));
			$getmeta = get_post_meta($id,'fields',true);
			echo 'ok';

  die;

}

?>