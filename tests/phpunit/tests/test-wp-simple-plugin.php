<?php
class Test_WP_Simple_Plugin extends WP_UnitTestCase {

    public function test_constants () {

        $this->assertSame( 'wp-simple-plugin', WPSP_NAME );
//
//        $url = str_replace( 'tests/phpunit/tests/', '',
//            trailingslashit( plugin_dir_url( __FILE__ ) ) );
//        $this->assertSame( ss(), false );
//        $this->assertSame( ss(), true );
//        $this->assertSame( ss(), false );
    }
}
