

div#navigation {
    text-align: center;
}

.sw-pushy-mobile,
.sw-pushy-mobile a,
.sw-pushy-mobile ul,
.sw-pushy-mobile li,
.sw-pushy-mobile .sub-menu ,
.sw-pushy-mobile form,
.sw-pushy-mobile input {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
 
.sw-pushy-mobile a { text-decoration: none; }
 
.sw-pushy-mobile li { list-style: none; }
.sw-pushy-mobile {
    display: inline-block;
    position: relative;
    cursor: default;
    z-index: 500;
}
 
.sw-pushy-mobile > li {
    display: block;
    float: left;
}

.sw-pushy-mobile > li > a {
    position: relative;
    display: block;
    z-index: 510;
    height: <?php echo $settings->height; ?>px;
    padding: 0 20px;
    line-height: <?php echo $settings->height; ?>px;
    letter-spacing: <?php echo $settings->letter_spacing; ?>px;
    font-family: <?php echo $settings->font[family]; ?>;
    font-weight: <?php echo $settings->font[weight]; ?>;

<?php if ($settings->font_size == 'custom' ) { ?>

font-size: <?php echo $settings->custom_font_size; ?>px;

<?php } ?>

    color: #<?php echo $settings->font_color; ?>;
    text-shadow: 0 0 1px rgba(0,0,0,.35);
 
    background: #<?php echo $settings->background_color; ?>;
<?php if ($settings->show_border == 'yes' ) { ?>
    border-left: 1px solid #<?php echo $settings->background_hover; ?>;
    border-right: 1px solid #<?php echo $settings->background_color; ?>;
<?php } ?>
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
}

.sw-pushy-mobile > li:hover > a { 
    background: #<?php echo $settings->background_hover; ?>; 
    color: #<?php echo $settings->font_hover_color; ?>;
}
 
.sw-pushy-mobile > li:first-child > a {
    border-radius: 3px 0 0 3px;
    border-left: none;
}

.sw-pushy-mobile > li > .sub-menu {
    
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
 
    background: #<?php echo $settings->background_color; ?>;
    border-radius: 0 0 3px 3px;
 
    -webkit-transition: all .3s ease .15s;
    -moz-transition: all .3s ease .15s;
    -o-transition: all .3s ease .15s;
    -ms-transition: all .3s ease .15s;
    transition: all .3s ease .15s;
}

.sub-menu >li:hover {
    background: #<?php echo $settings->background_hover; ?>;
}

.sw-pushy-mobile > li:hover > .sub-menu  {
    opacity: 1;
    visibility: visible;
    overflow: visible;
}

.sw-pushy-mobile > li > .sub-menu li{
    padding: 10px 5px;
  <?php if ($settings->show_border == 'yes' ) { ?>
    border-left: 1px solid #<?php echo $settings->background_hover; ?>;
    border-right: 1px solid #<?php echo $settings->background_hover; ?>;
    border-bottom: 1px solid #<?php echo $settings->background_hover; ?>;
    <?php } ?>
}

.sw-pushy-mobile .nav-column {
    float: left;
    width: 20%;
    padding: 2.5%;
}
 
.sw-pushy-mobile .nav-column h3 {
    margin: 20px 0 10px 0;
    line-height: 18px;
 
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 14px;
    color: #372f2b;
    text-transform: uppercase;
}
 
.sw-pushy-mobile .nav-column h3.orange { color: #ff722b; }
 
.sw-pushy-mobile .sub-menu li a {
    display: block;
    color: #<?php echo $settings->font_color; ?>;
    text-shadow: 0 0 1px rgba(0,0,0,.35);
}
 
.sw-pushy-mobile .sub-menu li:hover a { color: #<?php echo $settings->font_hover_color; ?>; }



div#navigation {
    text-align: center;
}

.pushy-menu,
.pushy-menu a,
.pushy-menu ul,
.pushy-menu li,
.pushy-menu .sub-menu ,
.pushy-menu form,
.pushy-menu input {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
 
.pushy-menu a { text-decoration: none; }
 
.pushy-menu li { list-style: none; }
.pushy-menu {
    display: inline-block;
    position: relative;
    cursor: default;
    z-index: 500;
}
 
.pushy-menu > li {
    display: block;
    float: left;
}

.pushy-menu > li > a {
    position: relative;
    display: block;
    z-index: 510;
    height: <?php echo $settings->height; ?>px;
    padding: 0 20px;
    line-height: <?php echo $settings->height; ?>px;
    letter-spacing: <?php echo $settings->letter_spacing; ?>px;
    font-family: <?php echo $settings->font[family]; ?>;
    font-weight: <?php echo $settings->font[weight]; ?>;

<?php if ($settings->font_size == 'custom' ) { ?>

font-size: <?php echo $settings->custom_font_size; ?>px;

<?php } ?>

    color: #<?php echo $settings->font_color; ?>;
    text-shadow: 0 0 1px rgba(0,0,0,.35);
 
    background: #<?php echo $settings->background_color; ?>;
<?php if ($settings->show_border == 'yes' ) { ?>
    border-left: 1px solid #<?php echo $settings->background_hover; ?>;
    border-right: 1px solid #<?php echo $settings->background_color; ?>;
<?php } ?>
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
}

.pushy-menu > li:hover > a { 
    background: #<?php echo $settings->background_hover; ?>; 
    color: #<?php echo $settings->font_hover_color; ?>;
}
 
.pushy-menu > li:first-child > a {
    border-radius: 3px 0 0 3px;
    border-left: none;
}

.pushy-menu > li > .sub-menu {
    
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
 
    background: #<?php echo $settings->background_color; ?>;
    border-radius: 0 0 3px 3px;
 
    -webkit-transition: all .3s ease .15s;
    -moz-transition: all .3s ease .15s;
    -o-transition: all .3s ease .15s;
    -ms-transition: all .3s ease .15s;
    transition: all .3s ease .15s;
}

.sub-menu >li:hover {
    background: #<?php echo $settings->background_hover; ?>;
}

.pushy-menu > li:hover > .sub-menu  {
    opacity: 1;
    visibility: visible;
    overflow: visible;
}

.pushy-menu > li > .sub-menu li{
    padding: 10px 5px;
  <?php if ($settings->show_border == 'yes' ) { ?>
    border-left: 1px solid #<?php echo $settings->background_hover; ?>;
    border-right: 1px solid #<?php echo $settings->background_hover; ?>;
    border-bottom: 1px solid #<?php echo $settings->background_hover; ?>;
    <?php } ?>
}

.pushy-menu .nav-column {
    float: left;
    width: 20%;
    padding: 2.5%;
}
 
.pushy-menu .nav-column h3 {
    margin: 20px 0 10px 0;
    line-height: 18px;
 
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 14px;
    color: #372f2b;
    text-transform: uppercase;
}
 
.pushy-menu .nav-column h3.orange { color: #ff722b; }
 
.pushy-menu .sub-menu li a {
    display: block;
    color: #<?php echo $settings->font_color; ?>;
    text-shadow: 0 0 1px rgba(0,0,0,.35);
}
 
.pushy-menu .sub-menu li:hover a { color: #<?php echo $settings->font_hover_color; ?>; }










.sidr { 
    width: <?php echo $settings->menu_width; ?>px !important; 
}

<?php if ($settings->link_position != 'left') { ?>
    .sw-pushy-mobile {
        float: right;
    }
<?php }

if ($settings->menu_break != '0') { ?>

.sw-pushy-mobile {
    display: none;
}

@media only screen and (max-width: <?php echo $settings->menu_break; ?>px){
    .sw-pushy-mobile {
        display: block;
    }

    .sw-pushy-navigation {
        display: none;
    }

}

<?php }

if ( $settings->menu_style == 'dark' ) { ?>

.sidr {
    display: none;
    position: absolute;
    position: fixed;
    top: 0;
    height: 100%;
    z-index: 999999;
    width: 260px;
    overflow-x: none;
    overflow-y: auto;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 15px;
    background: #333;
    color: #fff;
    -webkit-box-shadow: inset 0 0 5px 5px #222;
    -moz-box-shadow: inset 0 0 5px 5px #222;
    box-shadow: inset 0 0 5px 5px #222;
}

.sidr .sidr-inner {
    padding: 0 0 15px;
}

.sidr .sidr-inner>p {
    margin-left: 15px;
    margin-right: 15px;
}

.sidr.right {
    left: auto;
    right: -260px;
}

.sidr.left {
    left: -260px;
    right: auto;
}

.sidr h1,.sidr h2,.sidr h3,.sidr h4,.sidr h5,.sidr h6 {
    font-size: 11px;
    font-weight: 400;
    padding: 0 15px;
    margin: 0 0 5px;
    color: #fff;
    line-height: 24px;
    background-image: -webkit-gradient(linear,50% 0%,50% 100%,color-stop(0%,#4d4d4d),color-stop(100%,#1a1a1a));
    background-image: -webkit-linear-gradient(#4d4d4d,#1a1a1a);
    background-image: -moz-linear-gradient(#4d4d4d,#1a1a1a);
    background-image: -o-linear-gradient(#4d4d4d,#1a1a1a);
    background-image: linear-gradient(#4d4d4d,#1a1a1a);
    -webkit-box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
    box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
}

.sidr p {
    font-size: 13px;
    margin: 0 0 12px;
}

.sidr p a {
    color: rgba(255,255,255,0.9);
}

.sidr>p {
    margin-left: 15px;
    margin-right: 15px;
}

.sidr ul {
    display: block;
    margin: 0 0 15px;
    padding: 0;
    border-top: 1px solid #1a1a1a;
    border-bottom: 1px solid #4d4d4d;
}

.sidr ul li {
    display: block;
    margin: 0;
    line-height: 48px;
    border-top: 1px solid #4d4d4d;
    border-bottom: 1px solid #1a1a1a;
}

.sidr ul li:hover,.sidr ul li.active,.sidr ul li.sidr-class-active {
    border-top: none;
    line-height: 49px;
}

.sidr ul li:hover>a,.sidr ul li:hover>span,.sidr ul li.active>a,.sidr ul li.active>span,.sidr ul li.sidr-class-active>a,.sidr ul li.sidr-class-active>span {
    -webkit-box-shadow: inset 0 0 15px 3px #222;
    -moz-box-shadow: inset 0 0 15px 3px #222;
    box-shadow: inset 0 0 15px 3px #222;
}

.sidr ul li a,.sidr ul li span {
    padding: 0 15px;
    display: block;
    text-decoration: none;
    color: #fff;
}

.sidr ul li ul {
    border-bottom: none;
    margin: 0;
}

.sidr ul li ul li {
    line-height: 40px;
    font-size: 13px;
}

.sidr ul li ul li:last-child {
    border-bottom: none;
}

.sidr ul li ul li:hover,.sidr ul li ul li.active,.sidr ul li ul li.sidr-class-active {
    border-top: none;
    line-height: 41px;
}

.sidr ul li ul li:hover>a,.sidr ul li ul li:hover>span,.sidr ul li ul li.active>a,.sidr ul li ul li.active>span,.sidr ul li ul li.sidr-class-active>a,.sidr ul li ul li.sidr-class-active>span {
    -webkit-box-shadow: inset 0 0 15px 3px #222;
    -moz-box-shadow: inset 0 0 15px 3px #222;
    box-shadow: inset 0 0 15px 3px #222;
}

.sidr ul li ul li a,.sidr ul li ul li span {
    color: rgba(255,255,255,0.8);
    padding-left: 30px;
}

.sidr form {
    margin: 0 15px;
}

.sidr label {
    font-size: 13px;
}

.sidr input[type="text"],.sidr input[type="password"],.sidr input[type="date"],.sidr input[type="datetime"],.sidr input[type="email"],.sidr input[type="number"],.sidr input[type="search"],.sidr input[type="tel"],.sidr input[type="time"],.sidr input[type="url"],.sidr textarea,.sidr select {
    width: 100%;
    font-size: 13px;
    padding: 5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0 0 10px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    border: none;
    background: rgba(0,0,0,0.1);
    color: rgba(255,255,255,0.6);
    display: block;
    clear: both;
}

.sidr input[type=checkbox] {
    width: auto;
    display: inline;
    clear: none;
}

.sidr input[type=button],.sidr input[type=submit] {
    color: #333;
    background: #fff;
}

.sidr input[type=button]:hover,.sidr input[type=submit]:hover {
    background: rgba(255,255,255,0.9);
}

<?php } else { ?>

.sidr {
    display: none;
    position: absolute;
    position: fixed;
    top: 0;
    height: 100%;
    z-index: 999999;
    width: 260px;
    overflow-x: none;
    overflow-y: auto;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-size: 15px;
    background: #f8f8f8;
    color: #333;
    -webkit-box-shadow: inset 0 0 5px 5px #ebebeb;
    -moz-box-shadow: inset 0 0 5px 5px #ebebeb;
    box-shadow: inset 0 0 5px 5px #ebebeb;
}

.sidr .sidr-inner {
    padding: 0 0 15px;
}

.sidr .sidr-inner>p {
    margin-left: 15px;
    margin-right: 15px;
}

.sidr.right {
    left: auto;
    right: -260px;
}

.sidr.left {
    left: -260px;
    right: auto;
}

.sidr h1,.sidr h2,.sidr h3,.sidr h4,.sidr h5,.sidr h6 {
    font-size: 11px;
    font-weight: 400;
    padding: 0 15px;
    margin: 0 0 5px;
    color: #333;
    line-height: 24px;
    background-image: -webkit-gradient(linear,50% 0%,50% 100%,color-stop(0%,#fff),color-stop(100%,#dfdfdf));
    background-image: -webkit-linear-gradient(#fff,#dfdfdf);
    background-image: -moz-linear-gradient(#fff,#dfdfdf);
    background-image: -o-linear-gradient(#fff,#dfdfdf);
    background-image: linear-gradient(#fff,#dfdfdf);
    -webkit-box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
    box-shadow: 0 5px 5px 3px rgba(0,0,0,0.2);
}

.sidr p {
    font-size: 13px;
    margin: 0 0 12px;
}

.sidr p a {
    color: rgba(51,51,51,0.9);
}

.sidr>p {
    margin-left: 15px;
    margin-right: 15px;
}

.sidr ul {
    display: block;
    margin: 0 0 15px;
    padding: 0;
    border-top: 1px solid #dfdfdf;
    border-bottom: 1px solid #fff;
}

.sidr ul li {
    display: block;
    margin: 0;
    line-height: 48px;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #dfdfdf;
}

.sidr ul li:hover,.sidr ul li.active,.sidr ul li.sidr-class-active {
    border-top: none;
    line-height: 49px;
}

.sidr ul li:hover>a,.sidr ul li:hover>span,.sidr ul li.active>a,.sidr ul li.active>span,.sidr ul li.sidr-class-active>a,.sidr ul li.sidr-class-active>span {
    -webkit-box-shadow: inset 0 0 15px 3px #ebebeb;
    -moz-box-shadow: inset 0 0 15px 3px #ebebeb;
    box-shadow: inset 0 0 15px 3px #ebebeb;
}

.sidr ul li a,.sidr ul li span {
    padding: 0 15px;
    display: block;
    text-decoration: none;
    color: #333;
}

.sidr ul li ul {
    border-bottom: none;
    margin: 0;
}

.sidr ul li ul li {
    line-height: 40px;
    font-size: 13px;
}

.sidr ul li ul li:last-child {
    border-bottom: none;
}

.sidr ul li ul li:hover,.sidr ul li ul li.active,.sidr ul li ul li.sidr-class-active {
    border-top: none;
    line-height: 41px;
}

.sidr ul li ul li:hover>a,.sidr ul li ul li:hover>span,.sidr ul li ul li.active>a,.sidr ul li ul li.active>span,.sidr ul li ul li.sidr-class-active>a,.sidr ul li ul li.sidr-class-active>span {
    -webkit-box-shadow: inset 0 0 15px 3px #ebebeb;
    -moz-box-shadow: inset 0 0 15px 3px #ebebeb;
    box-shadow: inset 0 0 15px 3px #ebebeb;
}

.sidr ul li ul li a,.sidr ul li ul li span {
    color: rgba(51,51,51,0.8);
    padding-left: 30px;
}

.sidr form {
    margin: 0 15px;
}

.sidr label {
    font-size: 13px;
}

.sidr input[type="text"],.sidr input[type="password"],.sidr input[type="date"],.sidr input[type="datetime"],.sidr input[type="email"],.sidr input[type="number"],.sidr input[type="search"],.sidr input[type="tel"],.sidr input[type="time"],.sidr input[type="url"],.sidr textarea,.sidr select {
    width: 100%;
    font-size: 13px;
    padding: 5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0 0 10px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    border: none;
    background: rgba(0,0,0,0.1);
    color: rgba(51,51,51,0.6);
    display: block;
    clear: both;
}

.sidr input[type=checkbox] {
    width: auto;
    display: inline;
    clear: none;
}

.sidr input[type=button],.sidr input[type=submit] {
    color: #f8f8f8;
    background: #333;
}

.sidr input[type=button]:hover,.sidr input[type=submit]:hover {
    background: rgba(51,51,51,0.9);
}

<?php } ?>