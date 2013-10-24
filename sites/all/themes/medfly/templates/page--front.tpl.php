<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Medfly</title>
<script type="text/javascript">
    jQuery(window).load(function () {
	   jQuery(".demo").customScrollbar();
    });
</script>
</head>
<?php include('/common/header.tpl.php');
?>
<article class="main-content">
  <section class="container group">
  <div class="layer_alt">
    <section id="banner-wrap">
     <?php print render($page['homepageslider']);?>
	    <section id="home-search" class="left">
        <div class="search-icon"><span class="icon-stack"> <i class="icon-search icon-stack-base"></i> <i class="icon-medkit icon-light"></i> </span></div>
        <form class="search-form">
          <h2>Search Hospitals / Doctiors</h2>
          <span>
          <select class="select-box">
            <option>Select Catagory</option>
            <option>option1</option>
            <option>option1</option>
            <option>option1</option>
          </select>
          </span> <span>in</span> <span>
          <input type="text" placeholder="Type Area (or) pincode" />
          </span> <span>
          <button><i class="icon-search"></i></button>
          </span>
        </form>
      </section>
    </section>
    <section class="region-blocks">
	 <?php print render($page['articles']);?>
      <section class="region-block news-events">
        <h3><i class="icon-calendar"></i> News & Events <i class="icon-rss-sign right"></i></h3>
        <?php print render($page['homepageevents']);?>
      </section>
      <section class="region-block videos"> 
        <!--<h3><i class="icon-file-text-alt"></i> Articles <i class="icon-rss-sign right"></i></h3>--> 
        <img src="sites/all/themes/medfly/images/video-img.jpg" alt="video image" /> </section>
    </section>
  </section>
</article>

<?php include('/common/footer.tpl.php');?>