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

        <body <?php body_class(); ?>>
            <header>
                    <div class="container">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
                        <nav>
                            <ul>
                                <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                            </ul>
                        </nav>
                        <a class="ios-link" href=""><img src="<?php bloginfo('template_directory'); ?>/icons/ic-apple.svg" alt="icon-apple">Get for ios</a>
                        <a class="owners-link" href=""><img src="<?php bloginfo('template_directory'); ?>/icons/ic-unicorn.svg" alt="icon-unicorn-owners">Unicorn owners</a>
                    </div>
                </header>
