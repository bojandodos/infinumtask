<!doctype html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title><?php wp_title( '-', true, 'right' ); ?>Infinum task</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="https://gmpg.org/xfn/11">
            <meta name="description" content="Infinum test"/>
            <meta name="keywords" content="infinum, test, task,"/> 
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?> id="new-page">
            <header>
                    <div class="container">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
                        <a href="javascript:;" class="toggle-open"  onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/icons/open-menu.svg" alt=""></a>
                        <div class="right-header" id="navigation">
                        <a href="javascript:;" class="toggle-close" onclick="closeNav()"><img src="<?php echo get_template_directory_uri(); ?>/icons/close-menu.svg" alt=""></a>   
                            <nav>
                                <ul>
                                    <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                </ul>
                            </nav>
                            <a class="ios-link" href=""><img src="<?php bloginfo('template_directory'); ?>/icons/ic-apple.svg" alt="icon-apple">Get for ios</a>
                            <a class="owners-link" href=""><img src="<?php bloginfo('template_directory'); ?>/icons/ic-unicorn.svg" alt="icon-unicorn-owners">Unicorn owners</a>
                        </div>    
                    </div>
                </header>
