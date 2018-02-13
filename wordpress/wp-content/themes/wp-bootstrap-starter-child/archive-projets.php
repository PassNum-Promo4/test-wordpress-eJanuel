<?php get_header(); ?>
  <?php if (have_posts()) : ?>
    <div id="container-projets" class="projets col row">
    <?php while (have_posts()) : the_post(); ?>
        <article class="projets col-xl-4 col-md-6 col-sm-12 border rounded border-secondary p-3">
          <h2 class="title text-center">
            <a class="project" href="<?php the_field('lien_vers_le_projet'); ?>">
              <?php the_field('nom_du_projet'); ?>
            </a>
          </h2>
          <img src="<?php the_field('aperçu_visuel_du_projet'); ?>" alt=""/>
          <div class="content">
            <?php the_field('description_du_projet'); ?>
          </div>
        </article>
    <?php endwhile; ?>
    </div>
  <?php endif; ?>
<?php get_footer(); ?>
