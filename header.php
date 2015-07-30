<?php
if (isset($_POST['Submit'])) {
   
    $to = "kristina@bllrelocation.com";
    $subject = "New contacte";
    $message = "name:<b>".$_POST['username']."</b><br>Telephone:<b>".$_POST['telephone']."</b>";
    $header = "From:info@bllrelocation.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail($to, $subject, $message, $header);
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
        <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
        <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
        <!--[if IE 9]>         <html class="ie9"> <![endif]-->

        <?php global $Zoo_Options; ?>

        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=100" >
        <meta content="initial-scale=1.0, width=device-width" name="viewport">
        <title><?php bloginfo('name'); ?><?php wp_title('&#9812;'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="shortcut icon" href="<?php $Zoo_Options->show('zo_favicon'); ?>" type="image/x-icon" />
        <style type="text/css">
            .mainnav{
                top: 0px !important;
            }
#myPopupru{
display:none;}
.otherclassop {
display:none !important;}

.myPopupen{
display:none !important;}

.otherclass{
display:block !important;
}
            .ui-hidden-accessible{
                height: 12px !important;
                overflow: visible !important;
                position: static !important;
            }
        </style>
        <!-- Inicio compartir en FB  -->
        <?php
        $thumb = get_post_meta($post->ID, '_thumbnail_id', false);
        $thumb = wp_get_attachment_image_src($thumb[0], false);
        $thumb = $thumb[0];
        $default_img = get_bloginfo('stylesheet_directory') . '/imagenes/imagen_por_defecto.png';
        ?>

        <?php if (is_single() || is_page()) { ?>
            <meta property="og:type" content="article" />
            <meta property="og:title" content="<?php single_post_title(''); ?>" />
            <meta property="og:description" content="<?php
        while (have_posts()):the_post();
            $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
            echo apply_filters('the_excerpt_rss', $out_excerpt);
        endwhile;
            ?>" />
            <meta property="og:url" content="<?php the_permalink(); ?>"/>
            <meta property="og:image" content="<?php if ($thumb[0] == null) {
                  echo $default_img;
              } else {
                  echo $thumb;
              } ?>" />
<?php } else { ?>
            <meta property="og:type" content="article" />
            <meta property="og:title" content="<?php bloginfo('name'); ?>" />
            <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
            <meta property="og:description" content="<?php bloginfo('description'); ?>" />
            <meta property="og:image" content="<?php if ($thumb[0] == null) {
            echo $default_img;
        } else {
            echo $thumb;
        } ?>" />
<?php } ?>
        <!-- Fin compartir en FB -->
<?php wp_head() ?>




    </head>

    <body <?php body_class(); ?>>
<?php
   $lidioma = get_bloginfo('language');
 
if($lidioma =='ru')
{
?>
       <div data-role="popup" id="myPopupen" class="ui-content otherclassop " style="">
            <form method="post" action="">
                <div>
<a href="#"  onclick="closepopa();">
 <img  src="http://www.barcelonaluxurylife.com/wp-content/themes/Zoo/images/1437595998_arrow-up-01.png" id="closepop" />
</a>
                    <h3 style="text-align: center;margin-bottom:2px;">+34 670 512 866</h3>
                    <div style="text-align: center;">
                        <img  src="http://www.barcelonaluxurylife.com/wp-content/uploads/2015/03/dddd.jpg"/>
                    </div>
                    <h3 style='text-align:center;'>обратный звонок</h3>

                    <label for="usrnm"  class="ui-hidden-accessible">Name:</label>
<div style="margin-top:-30px;margin-left:85px;padding-bottom:10px;">
                    <input type="text" id='text' required="" name="username" id="usrnm" placeholder="Name"></div>
                    <label for="pswd" class="ui-hidden-accessible">Telephone:</label>
<div style="margin-top:-30px;margin-left:85px;padding-bottom:10px;">
                    <input type="text" required="" name="telephone" id="pswd" placeholder="Telephone">
</div>
                    <div style="text-align: center;">
                        <input  type="submit" name="Submit" id="Submit" style="height:31px ; margin-left: 46px;text-align:center; width: 121px;" value="Submit">
                    </div>
                </div>
            </form>
        </div>
<?php }
else
{ ?>
    <div data-role="popup" id="myPopupen" class="ui-content otherclassop " style="">
            <form method="post" action="">
                <div>
<a href="#"  onclick="closepopa();">
 <img  src="http://www.barcelonaluxurylife.com/wp-content/themes/Zoo/images/1437595998_arrow-up-01.png" id="closepop" />
</a>
                    <h3 style="text-align: center;margin-bottom:2px;">+34 670 512 16</h3>
                    <div style="text-align: center;">
                        <img  src="http://www.barcelonaluxurylife.com/wp-content/uploads/2015/03/dddd.jpg"/>
                    </div>
                    <h3 style='text-align:center;'>Get a FREE Callback</h3>

                    <label for="usrnm"  class="ui-hidden-accessible">Name:</label>
<div style="margin-top:-30px;margin-left:85px;padding-bottom:10px;">
                    <input type="text" id='text' required="" name="username" id="usrnm" placeholder="Name"></div>
                    <label for="pswd" class="ui-hidden-accessible">Telephone:</label>
<div style="margin-top:-30px;margin-left:85px;padding-bottom:10px;">
                    <input type="text" required="" name="telephone" id="pswd" placeholder="Telephone">
</div>
                    <div style="text-align: center;">
                        <input  type="submit" name="Submit" id="Submit" style="height:31px ; margin-left: 46px;text-align:center; width: 121px;" value="Submit">
                    </div>
                </div>
            </form>
        </div>
<?php 
}
?>
<?php do_action('before'); ?>
        <nav id="primary-nav">
            <div id="topbar">
                <span id="active-bar"></span>
            </div> 
            <!--Navigation-->


            <div class="mainnav mainnavhide test">

                <div class="innernav">
                    <div class="grid">
                        <div class="row">

                            <div class="mainLogo"><a href="<?php echo get_home_url(); ?>"><img id="mainLogo" alt="" src="<?php $Zoo_Options->show('1'); ?>"/></a></div>
                            <span id="menubutton"></span>                    
                            <?php
                            wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'walker' => new single_page_walker,
                                        'container' => false,
                                        'items_wrap' => '<ul class="nav-links">%3$s</ul>',
                                        'fallback_cb' => 'default_menu_cb'
                                    )
                            );
                            ?>

                            <div class="widget widget_qtranslate">
                                <ul class="qtrans_language_chooser" id="qtranslate--1-chooser">
                                    <li class="lang-en"><a href="http://www.bllrelocation.com/" hreflang="en" title="English"><span style="color: white;">English</span></a></li>
                                    <li class="lang-ru"><a href="http://www.bllrelocation.com/ru/" hreflang="ru" title="Русский"><span style="color: white;">Русский</span></a></li>
                                </ul><div class="qtrans_widget_end"></div>
                            </div>



                            <div class="xarxessocials">
                                <ul>
                                    <li><a href="skype:barcelonaluxurylife?call" target="_blank"><img src="http://www.barcelonaluxurylife.com/wp-content/uploads/2015/03/call-skype.png"></a></li>
                                    <li><a href="https://www.facebook.com/BLLrelocations" target="_blank"><img src="http://www.barcelonaluxurylife.com/wp-content/uploads/2014/08/facebook-e1409308663647.png"></a></li>
                                    <li><a href="https://instagram.com/bllrelocation/" target="_blank"><img src="http://www.barcelonaluxurylife.com/wp-content/uploads/2014/11/instagram-e1415199256351.png"></a></li>
                                </ul>
                            </div>

                            <div class="contacte">
                       
                                    <ul id="callback">

                                        <li class="telefonicon"><img src="http://www.barcelonaluxurylife.com/wp-content/uploads/2014/08/icontelf.png"></li>
                                        <li class="telefon">
        
                                            <?php
                                            $lidioma = get_bloginfo('language');
                                            switch ($lidioma) {
                                                case 'es': echo "Call back";
                                                    break;
                                                case 'ru': echo "обратный звонок";
                                                    break;
                                                default: echo "Call back";
                                            }
                                            ?>   
                 
                                        </li>
 <a   id="myPopupclick" onclick="myFunction();">
<img  src="http://www.barcelonaluxurylife.com/wp-content/themes/Zoo/images/1437596014_arrow-down-01.png" id="openpop"/>
 </a>  
                                    </ul>
                               
                            </div>


                        </div>
                    </div>
                </div>



            </div>








        </nav>	


