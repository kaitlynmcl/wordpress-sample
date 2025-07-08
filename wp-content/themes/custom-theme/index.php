<?php get_header(); ?>

<main class="site-main">
    <h2>Welcome to my custom theme!</h2>
    <p>This is the index.php template.</p>

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_title('<h3>', '</h3>');
            the_content();
        endwhile;
    else:
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>

