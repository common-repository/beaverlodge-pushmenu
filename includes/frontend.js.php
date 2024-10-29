<?php
$menu_location = $settings->menu_location; 
?>

jQuery(document).ready(function() {
        
        jQuery('#<?php echo $menu_location; ?>-menu').sidr({
            name: 'sidr-<?php echo $menu_location; ?>',
            side: '<?php echo $menu_location; ?>',
            source: '.sw-pushy-navigation',
        });
        
    });