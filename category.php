<?php $categories = get_terms([
		'taxonomy' => 'product_cat',
		'number' => 15,
		'hide_empty' => false,
        'exclude' => array(16, 15),
	  ]);?>
     
      <?php 
      foreach ($categories as $parent_category): ?>     
        <a href="<?= get_term_link($parent_category->term_id, 'product_cat') ?>" class="category_article">
          <div class="category_article_img">
            <img src="<?= get_thumbnail_url($parent_category->term_id, 'product_cat') ?>" alt="<?= $parent_category->name ?>">
          </div>
          <h3><?= $parent_category->name ?></h3>
        </a>
      <? endforeach ?>  