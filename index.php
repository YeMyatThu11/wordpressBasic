<html>
<head>
<title>Tutorial theme</title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
    <div class=" wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container-fluid mt-1 bg-light pt-3">

            <div  class="row">
                <div class=" col-sm-8  col-xs-12">

                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 pl-5">
                            <h1><?php the_title(); ?></h1>
                            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                            <p><?php the_content(__('(more...)')); ?></p>
                        </div>
                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="" class="col-sm-4 col-xs-12">
                    <h2 >AA</h2>
                    <ul  class='pb-5'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, voluptatibus eligendi repudiandae enim fuga dolore reiciendis ipsum inventore eveniet harum iusto cumque debitis aliquam repellat necessitatibus consectetur ab quae nihil?</ul>
                    <h2>BB</h2>
                    <ul class='pb-5'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae incidunt eveniet quam commodi aliquam nam animi soluta reprehenderit alias quidem deleniti sunt, perferendis voluptates neque dolor ab pariatur, optio consectetur.</ul>
                </div>
            </div>

            
        </div>  
        <div class="bg-dark mt-2 p-3 text-light">
            <h1>FOOTER</h1>
        </div>
    </div>
</body>
</html>
