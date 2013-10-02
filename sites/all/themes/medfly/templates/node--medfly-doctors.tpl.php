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
$articleImage = file_create_url($node->field_medfly_hostpital_image[LANGUAGE_NONE][0]['uri']);
?>
<a href="mailto:sample@gmail.com">info@medfly.com</a></div>
</aside>
<section class="left content-area">
<section class="left content cntTop-margin">
<h1><?php print $node->title;?></h1>
<img src="<?php print $articleImage;?>" alt="" class="img-right" />
<p>
<?php if(!empty($node->field_medfly_speciality)):?>
<strong>Speciality:</strong>
<?php print $node->field_medfly_speciality[LANGUAGE_NONE][0]['value'];?>
<?php endif;?>
<br/>
<?php if(!empty($node->field_medfly_article_sub_heading)):?>
<strong>Languages:</strong>
<?php print $node->field_medfly_article_sub_heading[LANGUAGE_NONE][0]['value'];?>
<?php endif;?>
<br/>
<?php if(!empty($node->field_medfly_contact_information)):?>
<strong>Education:</strong>
<?php print $node->field_medfly_contact_information[LANGUAGE_NONE][0]['value'];?>
<?php endif;?>
<br/>
<?php if(!empty($node->field_medfly_country)):?>
<strong>City:</strong>
<?php $city = taxonomy_term_load($node->field_medfly_country[LANGUAGE_NONE][0]['tid']);
 print $city->name;
 endif;
 ?>
 <br/>
<?php if(!empty($node->field_medfly_hospital_details)):?> 
<strong>About <?php print $node->title;?>  </strong>
<?php print $node->field_medfly_hospital_details[LANGUAGE_NONE][0]['value'];?>
<?php endif;?>
</p>
</section>
</section>
</section>
</section>
</article>
