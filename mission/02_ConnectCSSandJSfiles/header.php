<html>
<head>
<title>Tutorial theme</title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

    <div id="ttr_header" class="jumbotron">
        <h1>HEADER</h1>
    </div>
    <div class="container">

        <div id="ttr_main" class="row">
            <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div id="ttr_sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 ><?php _e('Categories'); ?></h2>
                <ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
                <h2 ><?php _e('Archives'); ?></h2>
                <ul > <?php wp_get_archives(); ?> </ul>
            </div>
        </div>

        
    </div>  
    <div id= "ttr_footer">
        <h1>FOOTER</h1>
    </div>  
</body>
</html>
