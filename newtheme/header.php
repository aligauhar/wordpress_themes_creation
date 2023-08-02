<!DOCTYPE html>

<head>
    <?php 
// wordpress includes its cde

wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header>
        <div>
            <div class="no">
                03212239044
            </div>
            <div class="email">
                aligauharrrr@gmail.com
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">


                        <div class="position-sticky">
                            <div class="bg-dark menu">
                                Menu
                            </div>
                            <?php
                // Get the 'top-menu' by its theme location
                $menu_locations = get_nav_menu_locations();
                $menu_id = $menu_locations['top-menu'];

                if ($menu_id) {
                    // Get the menu items for 'top-menu'
                    $menu_items = wp_get_nav_menu_items($menu_id);

                    if ($menu_items) {
                        echo '<ul class="nav flex-column">';
                        foreach ($menu_items as $menu_item) {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="' . esc_url($menu_item->url) . '">';
                            echo esc_html($menu_item->title);
                            echo '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                }
                ?>
                        </div>

                    </nav>

                    <!-- Main Content -->
                    <main class="topnav">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container-fluid">
                                <a class="navbar-brand"
                                    href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php
                    // Custom function to display all pages in the navbar
                    function custom_display_pages_in_navbar() {
                        $pages = get_pages();
                        if ($pages) {
                            echo '<ul class="navbar-nav ms-auto">';
                            foreach ($pages as $page) {
                                $page_link = get_permalink($page->ID);
                                echo '<li class="nav-item"><a class="nav-link" href="' . esc_url($page_link) . '">' . esc_html(get_the_title($page->ID)) . '</a></li>';
                            }
                            echo '</ul>';
                        }
                    }

                    custom_display_pages_in_navbar(); // Call the custom function to display pages in the navbar
                    ?>
                                </div>
                            </div>
                        </nav>
                        <!-- End Sidebar -->

                        <!-- Main Content -->
                        <div class="container pt-5 pb-5 navcontent navtext">
                            <h1>
                                </php the_title(); ?>
                            </h1>
                            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; endif;?>
                        </div>
                        <!-- End Main Content -->
                </div>
            </div>
        </div>
        </div>

        </div>
    </header>