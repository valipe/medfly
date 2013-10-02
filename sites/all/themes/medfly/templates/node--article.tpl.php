<article class="main-content">
<section class="container group">
<section class="content-wrap">
<aside class="right"> <span class="sidebar-shadow"></span>
  <h3>Get in touch</h3>
  <div class="contact-info">
  <p>Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry.</p> 
<?php 
$articleImage = file_create_url($node->field_medfly_article_image[LANGUAGE_NONE][0]['uri']);
?>
<a href="mailto:sample@gmail.com">info@medfly.com</a></div>
</aside>
<section class="left content-area">
<section class="left content cntTop-margin">
<h1><?php print $node->title;?></h1>
<img src="<?php print $articleImage;?>" alt="" class="img-right" />
<p><?php print $node->body[LANGUAGE_NONE][0]['value'];?></p>
</section>
</section>
</section>
</section>
</article>
