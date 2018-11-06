<!DOCTYPE html><html lang='en' class=''>
<head>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<script src="<?php echo base_url(); ?>assects/dashboard/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assects/dashboard/js/login.js"></script>
<link href="<?php echo base_url(); ?>assects/dashboard/css/login.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assects/dashboard/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script>
        function warning() {
            setTimeout(function(){$(".warn").hide()}, 4000)
        }
        warning();
</script>
</head>
<body>
<?php if(!$error) { ?>
    <div class="alert alert-danger container warn" style="margin-top:10px;">
    Username or Password is <strong>incorrect!</strong>.
    </div>
    <?php
    }
    ?>
<div class="login">
	<h1>Login</h1>
    <form name ="userinput" action="<?php echo base_url(); ?>login/verify" method="post">
    	<input class="txtcolor" type="text" name="username" placeholder="Username" required="required" />
        <input class="txtcolor" type="password" name="password" placeholder="Password" required="required" style="margin-top: 10px;" />
        <input type="submit" class="btn btn-primary btn-block btn-large margintop" value="Let me in.">
    </form>
</div>

<div id="particles-js"></div>
</body>
</html>