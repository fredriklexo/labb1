<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo( "Name" ); wp_title(); ?> </title> <!-- bloginfo("name") = the setting you have as as "Webbplatsrubrik"-->
   
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>> <!-- Displays the class names for the body element. --->

<div id="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-6">
                    
                    <a class="logo" href="<?php bloginfo( "wpurl" ); ?>"><?php bloginfo( "name" ); ?> </a> <!-- bloginfo("name") = the setting you have as as "Webbplatsrubrik" and bloginfo("wpurl") = adminpannel// WordPressadress (URL)-->
                    
                </div>
                <div class="col-sm-6 hidden-xs">
                    
                    <?php get_search_form(); ?> <!-- gets a serch form -->
                    
                </div>
                <div class="col-xs-4 text-right visible-xs">
                    <div class="mobile-menu-wrap">
                        <i class="fa fa-search"></i>
                        <i class="fa fa-bars menu-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-search">
        <?php get_search_form(); ?> <!-- gets a serch form -->
    </div>

    <nav id="nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <?php     wp_nav_menu(                      //  looking for header_nav id in the registerMenu() in function.php 
                    array( 'theme_location' => 'header_nav')
                ); ?>
                </div>
            </div>
        </div>
    </nav>
