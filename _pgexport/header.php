<!DOCTYPE html>
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html class="scroll-auto md:scroll-smooth" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <meta content="Pinegrow Web Editor" name="generator"/>
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <header>
            <!-- <a
        href="#main"
        class="absolute bg-white flex flex-col focus:border focus:border-black focus:border-solid focus:leading-6 focus:left-4 
        focus:min-w-max focus:mx-2 focus:my-4 focus:no-underline focus:p-4 focus:text-base focus:text-black focus:text-center 
        focus:top-4 focus:z-[999] h-px justify-center left-[-999px] overflow-hidden top-10 w-px z-[-999]"
        id="main"
        >Skip to main content</a
      >-->
            <!--   <a
        class="absolute top-0 px-3 py-4 font-semibold text-white duration-300 ease-in-out -translate-y-16 bg-blue-800 rounded-b-lg dark:bg-gray-900 left-9 focus:translate-y-0"
        href="#main-content"
        >Skip To Content</a
      > --><a href="#main" class="dark:bg-gray-50 focus:pt-16 duration-300 z-[-1] ease-in-out -translate-y-16 absolute container min-w-full flex flex-col justify-center text-gray-800 items-center top-0 left-0 focus:z-[999] focus:translate-y-0"><?php _e( 'Skip to Content', 'vtlclassic' ); ?></a>
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900" aria-label="main navigation">
                <div class="container flex flex-wrap items-center justify-between mx-auto"><a href="https://flowbite.com/" class="flex items-center"> <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo"/> <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><?php _e( 'Flowbite', 'vtlclassic' ); ?></span> </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false"><span class="sr-only"><?php _e( 'Open main menu', 'vtlclassic' ); ?></span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                <a class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page" {ATTRS}>{TITLE}</a>
                                              </li>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul class="%2$s bg-gray-50 border border-gray-100 dark:bg-gray-800 dark:border-gray-700 flex flex-col md:bg-white md:border-0 md:dark:bg-gray-900 md:flex-row md:font-medium md:mt-0 md:space-x-8 md:text-sm mt-4 p-4 rounded-lg" id="%1$s">%3$s</ul>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </header>
        <main id="main">