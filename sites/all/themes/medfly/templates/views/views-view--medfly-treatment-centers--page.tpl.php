<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>  
			<section class="list-wrap">
			<div class="treatment-blocks">
				<?php foreach($view->result as $treatment){
				$nodeObj = node_load($treatment->nid);
				$path = url('node/'.$treatment->nid);
				 $hospitalImage = file_create_url($nodeObj->field_medfly_hostpital_image[LANGUAGE_NONE][0]['uri']);
				if(count($nodeObj->field_medfly_treatment)) {
					foreach($nodeObj->field_medfly_treatment['und'] as $eachProductId) 
					{
					$productObj = taxonomy_term_load($eachProductId['tid']);
					$products[] = array(
						'product_name' => $productObj->name,       
					);
					}
				}
				?> <section class="layer article"> 
					<div class="left art-featur-img"><a href="#"> <img src="<?php print $hospitalImage;?>" alt=""> </a>					
                    					</div>                  				
                  <div class="right contact"> <strong>Healthcare Features:</strong><br>
                    <p><?php foreach($products as $prod){
					print $prod['product_name'].",";
					} ?><span class="block"><i class="icon-phone"></i><?php print $nodeObj->field_medfly_telephone[LANGUAGE_NONE][0]['value'];?></span></p>                    
                    <p><a href="#" class="button">Make An Appointment</a></p>
					<p><a href="<?php print $path;?>" class="button">Learn More</a></p>
                  </div>
                  <div class="mcl-content">
				  <h4><?php print $nodeObj->title;?></h4>
                    <?php print $nodeObj->field_medfly_hospital_details[LANGUAGE_NONE][0]['value'];?>
					<p><a href="#" class="button">Contact Us</a></p>
					
                  </div>
				   </section>
				  <?php } ?>
				    </div>				  
				  </section>