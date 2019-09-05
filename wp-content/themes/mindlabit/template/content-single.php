<?php
/*
--single post content--
*/


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-md-8">
  <p><?php the_content(); ?></p>
</div>
</article>
