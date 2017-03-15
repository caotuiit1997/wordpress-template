<?php
/** Khai bao hang gia tri
@ THEME-URL = lay duong dan thu muc theme
	@ CORE = lay duong dan thu muc core
**/
define('THEME-URL',get_stylesheet_directory());
**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/
 
  require_once( CORE . '/init.php' );
  /**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
 if ( ! isset( $content_width ) ) {
       /*
        * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
        */
       $content_width = 620;
  }
  /**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'wonder_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
         */
        function wonder_theme_setup() {
        	/** Thiet lap text domain **/
 			$language_folder = THEME-URL.'/languages';
 			load_theme_textdomain('wonder',$language_folder);

 			/** Tu dong them link RSS len <head> */
 			add_theme_support('automated-feed-links');

 			/* Them post thumbnail */
 			add_theme_support('post-thumbnails');
        }
        add_action ( 'init', 'wonder_theme_setup' );
 
  }