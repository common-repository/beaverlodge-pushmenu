<?php 
    $menu_id = $settings->menu; 
    $menu_location = $settings->menu_location; 
    $menu_link = $settings->menu_link; 
    $menu_text = $settings->menu_text; 
    $menu_icon = $settings->menu_icon;

    if ( $menu_link == 'text' ) {
        $menu_btn = $menu_text;
    } elseif ( $menu_link == 'icon' ){
        $menu_btn = '<i class=' . $menu_icon . '></i>';
    } elseif ( $menu_link == 'icon_right' ){
        $menu_btn = $menu_text . '&nbsp; <i class=' . $menu_icon . '></i>';
    } elseif ( $menu_link == 'icon_left' ){
        $menu_btn = '<i class=' . $menu_icon . '></i>&nbsp' . $menu_text . '';
    }

?>

<ul class="sw-pushy-mobile" id="sidr">
    <li>
        <a id="<?php echo $menu_location; ?>-menu" class="<?php echo $menu_location; ?>-menu" href="#<?php echo $menu_location; ?>-menu"><?php echo $menu_btn; ?></a>
    </li>
</ul>

<div class="sw-pushy-navigation">
   <?php wp_nav_menu( array('menu' => $menu_id, 'items_wrap'      => '<div id="navigation"><ul id="%1$s" class="pushy-menu %2$s">%3$s</ul></div>', ) ); ?>
</div>