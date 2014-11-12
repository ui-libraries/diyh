<?php
queue_js_file('login');
$pageTitle = __('Log In');
echo head(array('bodyclass' => 'login', 'title' => $pageTitle), $header);
?>
<style type="text/css">
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

#login-form  {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;
  font-weight: normal;
}

#login-links {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;
  font-weight: normal;
}

h1 {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;  
}

#login-links div a {
    color: black;
    display: block;
    padding: 10px;
}

#login-links div:first-child a:first-child {
    color: white;
    display: block;
    background-color: darkgrey;
    padding: 10px;
}




#login-form .form-control:focus {
  z-index: 2;
}
#login-form input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
#login-form input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


</style>
<br /><br /><br />
<h1><?php echo $pageTitle; ?></h1>

<div id="login-links" class="form-signin-heading">
<div><a href="../guest-user/user/register">Don't have an account? Register.  </a></div>  <div id="forgotpassword"><?php echo link_to('users', 'forgot-password', __('Lost your password?')); ?></div>
</div>

<?php echo flash(); ?>
    
<?php echo $this->form->setAction($this->url('users/login')); ?>

<?php echo foot(array(), $footer); ?>
