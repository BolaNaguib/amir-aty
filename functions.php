<?php
function register_my_menu() {
  register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}


?>

<?php
/**
 * menu-walker.php
 */
 class Bootstrap_Walker_Menu_Nav extends Walker_Nav_Menu {
	// var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
	// var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ($depth == 0) $output .= '<div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav">';
	}
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ($depth == 0) $output .= '</ul></div>';
	}
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ($depth > 1) return;
		// <li> or <span>
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$is_active = in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes);
		if ($depth == 0) {
			$w_depth = $args->depth - 1;
			$has_children = in_array('menu-item-has-children', $classes) && ($depth < $w_depth);
			$classes = array('uk-visible@s');
			if ($is_active) $classes[] = 'active';  // AAAAAAAAAA
			if ($has_children) $classes[] = 'dropdown';
			$id = apply_filters( 'nav_menu_item_id', '', $item, $args );
			$class_names = trim( join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) ) );
			$use_li = !( stripos($args->items_wrap, '<ul') === false );
			$output .= '<' . ($use_li ? 'li' : 'span');
			if (!empty($id)) $output .= ' id="' . $id . '"';
			if (!empty($class_names)) $output .= ' class="' . $class_names . '"';
			$output .= '>';
		} else {
			$has_children = false;
		}
		// <a>
		if (strcasecmp($item->title, '-') == 0) {
			$item_output = '<div class="dropdown-divider"></div>';
		} else {
			if ($depth == 0) {
				$class_names = 'navbar__link uk-button-text'; // Primary navbar class
				if ($has_children) $class_names .= ' dropdown-toggle';
			} else {
				$class_names = 'dropdown-item';
				if ($is_active) $class_names .= ' text-primary';
			}
			if ($is_active) $class_names .= ' active';  // AAAAAAAAAA
			$attributes = ' class="' . $class_names . '"';
			$this_attr_title = empty($item->description) ? $item->attr_title : $item->description;
			$attributes .= ! empty( $this_attr_title ) ? ' title="'  . esc_attr( $this_attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )    ? ' target="' . esc_attr( $item->target    ) .'"' : '';
			$attributes .= ! empty( $item->xfn )       ? ' rel="'    . esc_attr( $item->xfn       ) .'"' : '';
			$attributes .= ! empty( $item->url )       ? ' href="'   . esc_attr( $item->url       ) .'"' : '';
			if ($depth == 0 && $has_children) $attributes .= ' data-toggle="dropdown"';
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
		}
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ($depth == 0) {
			if (stripos($args->items_wrap, '<ul') === false) {
				$output .= '</span>';
			} else {
				$output .= '</li>';
			}
		}
	}
}?>


<?php
/**
 * menu-walker.php
 */
 class Bootstrap_Walker_Menu_Mobile extends Walker_Nav_Menu {
	// var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
	// var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ($depth == 0) $output .= '<div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav">';
	}
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ($depth == 0) $output .= '</ul></div>';
	}
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ($depth > 1) return;
		// <li> or <span>
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$is_active = in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes);
		if ($depth == 0) {
			$w_depth = $args->depth - 1;
			$has_children = in_array('menu-item-has-children', $classes) && ($depth < $w_depth);
			$classes = array(' '); //visible@s
			if ($is_active) $classes[] = 'active';  // AAAAAAAAAA
			if ($has_children) $classes[] = 'dropdown';
			$id = apply_filters( 'nav_menu_item_id', '', $item, $args );
			$class_names = trim( join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) ) );
			$use_li = !( stripos($args->items_wrap, '<ul') === false );
			$output .= '<' . ($use_li ? 'li' : 'span');
			if (!empty($id)) $output .= ' id="' . $id . '"';
			if (!empty($class_names)) $output .= ' class="' . $class_names . '"';
			$output .= '>';
		} else {
			$has_children = false;
		}
		// <a>
		if (strcasecmp($item->title, '-') == 0) {
			$item_output = '<div class="dropdown-divider"></div>';
		} else {
			if ($depth == 0) {
				$class_names = 'navbar__link uk-button-text'; // Primary navbar class
				if ($has_children) $class_names .= ' dropdown-toggle';
			} else {
				$class_names = 'dropdown-item';
				if ($is_active) $class_names .= ' text-primary';
			}
			if ($is_active) $class_names .= ' active';  // AAAAAAAAAA
			$attributes = ' class="' . $class_names . '"';
			$this_attr_title = empty($item->description) ? $item->attr_title : $item->description;
			$attributes .= ! empty( $this_attr_title ) ? ' title="'  . esc_attr( $this_attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )    ? ' target="' . esc_attr( $item->target    ) .'"' : '';
			$attributes .= ! empty( $item->xfn )       ? ' rel="'    . esc_attr( $item->xfn       ) .'"' : '';
			$attributes .= ! empty( $item->url )       ? ' href="'   . esc_attr( $item->url       ) .'"' : '';
			if ($depth == 0 && $has_children) $attributes .= ' data-toggle="dropdown"';
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
		}
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ($depth == 0) {
			if (stripos($args->items_wrap, '<ul') === false) {
				$output .= '</span>';
			} else {
				$output .= '</li>';
			}
		}
	}
}?>
