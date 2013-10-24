<div class="slideshow flexslider">
 <nav class="slideshow-nav">
 <?php 
 foreach($view->result as $item){
 	$nodeEntity = $item->_field_data['nid']['entity'];
	
	?>	
        <ul class="flex-control-nav">
                  <li class="">
  <a class="slideshow-nav-link slideshow-nav-link_0" href="#slideshow-slide-0">
    <span class="slideshow-nav-link-inner"><?php print $nodeEntity->field_medfly_slider_text[LANGUAGE_NONE][0]['value'];?></span>
  </a>
</li>           
 </ul> <!-- class="flex-control-nav" -->
	<?php }?>			
      </nav>
<div class="flex-viewport" style="overflow: hidden; position: relative;">
<ul class="slides" style="width: 1000%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-4000px, 0, 0);">
<?php foreach($view->result as $slideObj){
$nodeObj = $slideObj->_field_data['nid']['entity'];
$image_path = file_create_url($nodeObj->field_medfly_slider_image[LANGUAGE_NONE][0]['uri']);
?>	  
<li class="slideshow-slide clone" id="slideshow-slide-3" aria-hidden="true" style="width: 1000px; float: left; display: block;">
      <a href="/products/development/next-gen-web"><img src="<?php print $image_path;?>" width="1000" height="220"  draggable="false"></a>
  
      <div class="slideshow-slide-content">
            <a class="slideshow-click-area" href="<?php print $nodeObj->field_medfly_slider_link[LANGUAGE_NONE][0]['value'];?>"></a>
      
            <div class="slideshow-slide-hd">
        <h2><?php print $nodeObj->field_medfly_slider_text[LANGUAGE_NONE][0]['value'];?></h2>
      </div>
      
            <div class="slideshow-slide-bd">
        <p><?php print $nodeObj->field_medfly_slider_description[LANGUAGE_NONE][0]['value'];?></p>
      </div>
      
            <div class="slideshow-slide-ft">
        <a class="slideshow-slide-link" href="<?php print $nodeObj->field_medfly_slider_link[LANGUAGE_NONE][0]['url'];?>">Learn More ›</a>
      </div>
          </div>
  </li>	  
 <?php }?> 
 </ul>
	  </div></div>
	  