
<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<title>JKB Public School</title>
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



<?php include"slider.php"; ?>
<div style="padding-top:10px"></div>

<div class="clear"><!----></div>
		<div id="container">
			<div id="content" role="main">

		
				<div id="post-4" class="post-4 page type-page status-publish hentry">
											<h2 class="entry-title">Welcome To J.K.B. Public School</h2>
									

					<div class="entry-content">
						<p><img src="wp-content/uploads/2011/05/3kids.jpg" alt="" title="3kids" width="150" height="156" class="alignleft size-full wp-image-63" />On 20 Janaury 2010, J.K.B. Public School, Ghazipur, was set up by shri Kushwaha S/O Late shri Ramnaresh Kushwaha. It foundation lay down by his grand daughter, Akanksha(khushi).</p>

<p>The educational session of this school was started on 6 April 2010. Co-education system is available for the students. It constrated to very clean and peaceful natural invironment. The aim of this school is to develop education, social, physchological trains and innate powers of children. Experienced and trained teachers are available here to teach. </p>
																	</div><!-- .entry-content -->
				</div><!-- #post-## -->

				
			<div id="comments">


	<p class="nocomments">Comments are closed.</p>


								
</div><!-- #comments -->


			</div><!-- #content -->
		</div><!-- #container -->


		


		<div id="secondary" class="widget-area" role="complementary">
			
                  <h3 style="margin-left:40px;"><strong>Notice Board</strong></h3>
               
                <marquee direction="up" height="300" width="77%" align="center" style="border:2px solid #000; margin-bottom:7%;" scrollamount="2" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
        <?php 
	include_once("school/include/config.php");
	$gal = mysql_query("SELECT * FROM `notice` WHERE ORDER BY `id` DESC"); 
	while($r = mysql_fetch_object($gal)){

?>
	
                              
                               <strong  style="font-size:18px"> <?php echo $r->subject; ?> </strong>
                                    <strong><?php echo $r->message; ?></strong>
                                </a>
                                
                                <?php } ?>
        </marquee>
                   
                   
                
                </div>
		</div><!-- #secondary .widget-area -->

	</div><!-- #main -->


<?php include"footer.php"; ?>
	</div><!-- #footer -->
	
	



</body>

<!-- Mirrored from cmsthemefactory.com/wp-themes/wp31/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 25 Jul 2014 10:02:23 GMT -->
</html>
