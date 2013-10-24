<?php 
include('common/header.tpl.php');
$treatments = 'medfly_treatments';
$treatmentsRes = views_get_view_result($treatments);

?>
<article class="main-content">
<section class="container group">
                <h2>Treatments</h2>
                <div class="treatment-blocks">
                  <?php foreach($treatmentsRes as $treatment){				  	  
				  $termObj = taxonomy_term_load($treatment->tid);
				  $termName = strtolower(str_replace(" ",'-',$termObj->name));
				  $image = file_create_url($termObj->field_medfly_treat_image[LANGUAGE_NONE][0]['uri']);
				 
				    ?>
				  <div class="treatment-block"> <a href="#"><img src="<?php print $image;?>" alt=""></a>
                    <h4><a href="treatment-centers/<?php print $termName;?>"><?php print $termObj->name;?></a></h4>
                    <p><?php print $termObj->description;?></p>
                  </div>
                  <?php }?>
                </div>
</section>
</article>				
<?php include('common/footer.tpl.php');?>              