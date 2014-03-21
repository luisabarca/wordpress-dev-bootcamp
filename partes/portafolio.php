<div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Display Some Work on the Home Page Portfolio</h2>
                    <hr>
                </div>
                <?php while (have_posts()): the_post() ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php the_permalink() ?>">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('thumbnail', array(
                            'class' => 'img-rounded'
                        )) ?>
                        <?php else: ?>
                        <img src="http://placehold.it/250x250">
                        <?php endif ?>
                    </a>
                    <h4>
                        <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                        </a>
                    </h4>
                </div>
                <?php endwhile ?>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->
