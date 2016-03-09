<?php
/**
 * Theme Wrapper
 *
 * @link http://roots.io/an-introduction-to-the-roots-theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */
function template_path() {
    return Wrapping::$main_template;
}
class Wrapping {
    // Stores the full path to the main template file
    static $main_template;
    public function __toString() {
        return locate_template('core/layout-loader.php');
    }
    static function wrap($main) {
        self::$main_template = $main;
        return new Wrapping();
    }
}
add_filter('template_include', array('Wrapping', 'wrap'), 99);