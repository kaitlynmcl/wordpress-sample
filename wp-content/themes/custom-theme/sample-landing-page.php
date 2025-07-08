<?php
/*
Template Name: Sample Landing Page
*/
get_header();
?>

<main class="landing-page">
    <section class="hero">
        <div class="container hero__content">
            <div class="hero__text">
                <h1><?php the_field('hero_heading'); ?></h1>
                <h2><?php the_field('hero_subheading'); ?></h2>
                <p><?php the_field('hero_description'); ?></p>

                <?php if (have_rows('hero_buttons')): ?>
                    <div class="buttons">
                        <?php while (have_rows('hero_buttons')):
                            the_row(); ?>
                            <a href="<?php the_sub_field('button_url'); ?>" class="btn <?php the_sub_field('button_style'); ?>">
                                <?php the_sub_field('button_text'); ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            $image = get_field('hero_image');
            if ($image): ?>
                <div class="hero__image">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if (have_rows('features')): ?>
        <section class="features">
            <div class="container">
                <ul>
                    <?php while (have_rows('features')):
                        the_row(); ?>
                        <li>
                            <?php
                            $icon = get_sub_field('icon');
                            if ($icon): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                            <?php endif; ?>
                            <span><?php the_sub_field('title'); ?></span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <section class="stats">
        <div class="container">
            <?php if (have_rows('stats')): ?>
                <div class="stats-grid">
                    <?php while (have_rows('stats')):
                        the_row(); ?>
                        <div class="stat">
                            <h2><?php the_sub_field('number'); ?></h2>
                            <p><?php the_sub_field('label'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <blockquote>
                <p>"<?php the_field('testimonial_quote'); ?>"</p>
                <footer>– <?php the_field('testimonial_author'); ?></footer>
            </blockquote>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2><?php the_field('cta_text'); ?></h2>
            <a href="<?php the_field('cta_button_url'); ?>" class="btn">
                <?php the_field('cta_button_label'); ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>

