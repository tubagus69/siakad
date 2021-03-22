<div class="big-slider">
          <div id="big-slider-carousel" class="carousel slide" data-ride="carousel">
          <a class="left carousel-nav" href="#big-slider-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-nav" href="#big-slider-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#big-slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#big-slider-carousel" data-slide-to="1"></li>
            <li data-target="#big-slider-carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                <img src="img/preview-images/a.jpg" />
              
              <div class="container">
              <div class="carousel-text">
              <a href="#">
              
              </a>
              </div><!-- /carousel-text -->
              </div><!-- /container -->
            </div><!-- /item -->
            <div class="item">
                <img src="img/preview-images/b.jpg" />
              <div class="container">
              <div class="carousel-text">
              <a href="#">
                 
              </a>
              </div><!-- /carousel-text -->
              </div><!-- /container -->
            </div><!-- /item -->
            <div class="item">
                <img src="img/preview-images/c.jpg" />
              <div class="container">
              <div class="carousel-text">
              <a href="#">
                
              </a>
              </div><!-- /carousel-text -->
              </div><!-- /container -->
            </div><!-- /item -->
          </div><!-- /carousel-inner -->
        </div><!-- /big-slider-carousel -->
          

        </div><!-- /big-slider -->
		

<link rel="stylesheet" type="text/css" href="css/mix2.css">

        </div><!-- /big-slider -->
		<section class="wrapper">
            <div class="container">
            <br>
            <br>
			 <div class="row">
			 <?php 
$query_ = "select * from artikel ORDER BY id DESC LIMIT 0,4";
					$sql_ = mysql_query($query_);
					while($c=mysql_fetch_array($sql_))
{?>	
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="servicebox">
                                    <div class="servicebox-content">
									
									<h3><p align='center'><a href="index.php?page2=isiberita&&id=<?php echo "$c[id]"; ?>">
									<?php echo $c['judul']; ?></a></h3></p>
                                       <div class='kotakkotak'> 
                                        <p align='center'>
										<?php echo $w=substr($c['isi'],0,100); ?></p></div>
                                    </div><!-- /servicebox-content -->
                                   <?php echo "<img src='photo/$c[gambar]' width='264' height='177' alt='themesgravity'>"; ?>
									
                                </div><!-- /servicebox -->
                            </div><!-- /col-sm-3 -->
                                                                     
<?php
		}
?>   
                        </div><!-- /row -->
                        <br>
                        <br>
            </div><!-- /container -->
        </section><!-- /wrapper -->

