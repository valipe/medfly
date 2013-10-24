<?php
 foreach ($view->result as $articlesItem) {
  if (count($articlesItem->_field_data)) {
	$articlesItemLoad = $articlesItem->_field_data['nid']['entity'];
    } else {
        $articlesItemLoad = node_load($articlesItem->nid);
    }
    if(count($articlesItemLoad->title))
	{
	$title = $articlesItemLoad->title;
	}
 if(count($articlesItemLoad->field_medfly_slider_text))
 {
 $subheading = $articlesItemLoad->field_medfly_slider_text[LANGUAGE_NONE][0]['value'];
 }
 if(count($articlesItemLoad->field_medfly_event_date_from))
 {
 $eventDate = $articlesItemLoad->field_medfly_event_date_from[LANGUAGE_NONE][0]['value'];
 }
 $link = url('node/'.$articlesItemLoad->nid);
 $articlesArray[] = array(
 'title' =>$title,
 'subheading' =>$subheading,
 'date' => $eventDate,
 'link' => $link,
 );
  }

?>
<div class="posts">
          <ul>
	<?php   foreach($articlesArray as $item){?>
            <li class="post">
              <p><span class="date left"><span class="month"><?php print date('M',$item['date']);?></span><span class="day"><?php print date('d',$item['date']);?></span></span> <span class="post-discription left"><a href="<?php print $item['link'];?>"><?php print $item['title'];?></a> <span class="author"><?php print $item['subheading'];?></span></span></p>
            </li>
            
	<?php } ?>		
          </ul>
          <span class="more-posts">[ <a href="#">+All News & Events</a> ]</span> </div>