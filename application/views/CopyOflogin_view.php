<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	
	<title>First Login Screen | Welcome </title>
	
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
	
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery/juery-3.2.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js"); ?>"></script>
	
</head>
<body>

	<div id="login_form">
		<form action="<?php echo base_url();?>login/process" method="post" name="process">
			<h2>User Login</h2>
			<br />
			<?php if(! empty($msg)) echo $msg;?>			
			<label for="username">Username</label>
			<input type="text" name="username" id="username" size="25" /><br />
		
			<label for="password">Password</label>
			<input type="password" name="password" id="password" size="25" /><br />							
		
			<input type="submit" value="Login" />			
		</form>
	</div>
	
	<hr> Use Bootstrap</hr>
	
	<div class="well" style="width:50%; margin: 0 auto;">
    <?php $attributes = array("name" => "comment-form");
    echo form_open("user_comments/submit", $attributes);?>
        <div class="form-group">
            <textarea name="comment" placeholder="Your comments..." rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Post Comment" class="btn btn-danger">
        </div>
    <?php echo form_close(); ?>
	</div>
	

</body>
</html>