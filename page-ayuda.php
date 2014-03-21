<?php
/*
Template Name: Especial
*/
?>
<?php get_header() ?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title() ?></h1>
                
                <?php if ( function_exists('yoast_breadcrumb') ) : ?>
                    <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
                <?php endif ?>

                
            </div>

        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

            <div class="col-md-3 portfolio-item">
                <a href="portfolio-item.html">
                    <img class="img-responsive" src="http://placehold.it/750x450">
                </a>
            </div>

        </div>

        <hr>

        <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /.container -->

 <?php get_footer() ?>
