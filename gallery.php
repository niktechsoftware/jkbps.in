
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from cmsthemefactory.com/wp-themes/wp31/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 25 Jul 2014 10:01:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>JKB Public School</title>
<link rel="stylesheet" href="lightbox/css/screen.css">
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="wp-content/themes/preschool-wp30/style.css" />
<link rel="pingback" href="xmlrpc.php" />
<link rel="alternate" type="application/rss+xml" title="Kidz Learning Center &raquo; Feed" href="indexd784.html?feed=rss2" />
<link rel="alternate" type="application/rss+xml" title="Kidz Learning Center &raquo; Comments Feed" href="indexa6da.html?feed=comments-rss2" />
<script type='text/javascript' src='wp-includes/js/comment-reply.min039c.js?ver=3.6'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel='next' title='About Us' href='index3204.html?page_id=7' />
<meta name="generator" content="WordPress 3.6" />
<link rel='canonical' href='index.html' />
<link rel="stylesheet" type="text/css" href="wp-content/plugins/social-media-widget/social_widget.css" />
<script type="text/javascript" src="wp-content/themes/preschool-wp30/js/mod_briaskISS.js"></script>
</head>

<body class="home page page-id-4 page-template page-template-home-alt-php">
<div id="wrapper" class="hfeed">
<?php include"header.php"; ?>


	<!-- #header -->

	
	<div id="main">


		<div id="container" class="one-column">
			<div id="content" role="main">


				<div id="post-17" class="post-17 page type-page status-publish hentry">
					<h1 class="entry-title">Photo Gallery</h1>
					<div class="image-row">
							<div class="image-set">
                            <?php 
	include_once("school/include/config.php");
	$gal = mysql_query("SELECT * FROM `gallery` ORDER BY `name` ASC"); 
	while($r = mysql_fetch_object($gal)){

?>
	
                              
                                <a class="example-image-link" href="school/gallery/<?php echo $r->image; ?>" data-lightbox="example-set">
                                    <img class="example-image" src="school/gallery/<?php echo $r->image; ?>" alt=""/>
                                </a>
                                
                                <?php } ?>
                              
							</div>
						</div>
                        <!-- Javascript for gallery -->
                            <script src="lightbox/js/jquery-1.11.0.min.js"></script>
                            <script src="lightbox/js/lightbox.js"></script><!-- .entry-content -->
				</div><!-- #post-## -->

				
			<div id="comments">


	<p class="nocomments">Comments are closed.</p>


								
</div><!-- #comments -->


			</div><!-- #content -->
		</div><!-- #container -->

	</div><!-- #main -->
    
    <!-- #secondary .widget-area -->

	</div><!-- #main -->


<?php include"footer.php"; ?>
	</div><!-- #footer -->
	
	



</body>

<!-- Mirrored from cmsthemefactory.com/wp-themes/wp31/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 25 Jul 2014 10:02:23 GMT -->
</html>
