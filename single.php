<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
                <hr />
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous"><?php next_post_link('%link', '&larr; %title'); ?></li>
                    <li class="next"><?php previous_post_link('%link', '%title &rarr;'); ?></li>
                </ul>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

            </div>
        </div>
    </div>

    <hr>

<?php get_footer(); ?>

