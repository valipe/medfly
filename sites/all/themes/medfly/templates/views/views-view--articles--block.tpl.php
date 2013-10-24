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
<?php foreach ($view->result as $articlesItem) {
  if (count($articlesItem->_field_data)) {
	$articlesItemLoad = $articlesItem->_field_data['nid']['entity'];
    } else {
        $articlesItemLoad = node_load($articlesItem->nid);
    }
    if(count($articlesItemLoad->title))
	{
	$title = $articlesItemLoad->title;
	}
 if(count($articlesItemLoad->field_medfly_article_sub_heading))
 {
 $subheading = $articlesItemLoad->field_medfly_article_sub_heading[LANGUAGE_NONE][0]['value'];
 }
 $link = url('node/'.$articlesItemLoad->nid);
 $pubdate = $articlesItemLoad->created;
 $articlesArray[] = array(
 'title' =>$title,
 'subheading' =>$subheading,
 'date' => $pubdate,
 'link' => $link,
 );
 }
 
?>
<section class="region-block articles">
        <h3><i class="icon-file-text-alt"></i> Articles <i class="icon-rss-sign right"></i></h3>
        <div class="posts">
          <ul>
<?php foreach($articlesArray as $p)	
{
?>	  
            <li class="post">
              <p><span class="date"><?php print date('M d,Y',$p['date']);?></span> <a href="<?php print $p['link'];?>"><?php print $p['title'];?></a> 
			</p>
            </li>
  

<?php }?>
          </ul>
          <span class="more-posts">[ <a href="">+Read All Articles</a> ]</span> </div>
      </section>
