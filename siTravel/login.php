<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Halaman Login</title>
  <link rel="icon" href="photo/library.png">
   <link href="config/login/bootstrap.css" rel="stylesheet">
    <link href="config/login/font-awesome.css" rel="stylesheet" />
    <link href="config/login/style-responsive.css" rel="stylesheet">
  
	 <link href="css/stylemenu.css" rel="stylesheet">

    
  </head>

  <body> 
	<div id='login'>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method='POST' action="proseslogin.php">
		        <h2 class="form-login-heading">Log In</h2>
		        <div class="login-wrap">
		            <input type="text" name='login_username' class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input type="password" name='login_password' class="form-control" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		           
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    </div>
  </body>
</html>
