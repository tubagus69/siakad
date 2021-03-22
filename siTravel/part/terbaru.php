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
									
									<h3><p align='center'><a href="utama.php?page2=isiartikel&&id=<?php echo "$c[id]"; ?>"><?php echo $c['judul']; ?></a></h3></p>
                                       <div class='kotakkotak'> 
                                        <p align='center'><?php echo $w=substr($c['isi'],0,100); ?></p></div>
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

