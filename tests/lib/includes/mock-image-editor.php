<?php

if (class_exists( 'WP_Image_Editor' ) ) :

	class WP_Image_Editor_Mock extends WP_Image_Editor {

		public static $load_return = true;
		public static $test_return = true;

		protected function load() {
			return self::$load_return;
		}
		public static function test() {
			return self::$test_return;
		}
		public static function supports_mime_type( $mime_type ) {
			return true;
		}
		public function resize( $max_w, $max_h, $crop = false ) {

		}
		public function multi_resize( $sizes ) {

		}
		public function crop( $src_x, $src_y, $src_w, $src_h, $dst_w = null, $dst_h = null, $src_abs = false ) {

		}
		public function rotate( $angle ) {

		}
		public function flip( $horz, $vert ) {

		}
		public function save( $destfilename = null, $mime_type = null ) {

		}
		public function stream( $mime_type = null ) {

		}
	}

endif;