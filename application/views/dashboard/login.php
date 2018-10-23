<!DOCTYPE html><html lang='en' class=''>
<head>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<script src="<?php echo base_url(); ?>assects/dashboard/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assects/dashboard/js/login.js"></script>
<link href="<?php echo base_url(); ?>assects/dashboard/css/login.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="login">
	<h1>Login</h1>
    <form name ="userinput" action="<?php echo base_url(); ?>login/verify" method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <input type="submit" class="btn btn-primary btn-block btn-large margintop" value="Let me in.">
    </form>
    <?php if(!$error) { 
    echo '<div class="error"></div>';
    }
    ?>
</div>

<div id="particles-js"></div>
</body>
</html>