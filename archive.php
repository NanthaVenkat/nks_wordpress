<?php get_header(); ?>
<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold"><?php the_archive_title(); ?></h1>
    </div>
</div>
<main class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <?php if (has_post_thumbnail()):
                        the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); endif; ?>
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="text-blue-600 font-semibold text-sm uppercase">Read More
                            &rarr;</a>
                    </div>
                </article>
            <?php endwhile; else:
            echo '<p>No posts found.</p>'; endif; ?>
    </div>
    <div class="mt-12">
        <?php the_posts_pagination(['class' => 'flex justify-center space-x-2']); ?>
    </div>
</main>
<?php get_footer(); ?>