<?php
queue_js_file('login');
$pageTitle = __('Log In');
echo head(array('bodyclass' => 'login', 'title' => $pageTitle), $header);
?>
<h1><?php echo $pageTitle; ?></h1>

<p id="login-links">
<div style="font-size: 1.2em; margin-bottom: 10px;"><a href="../guest-user/user/register">Don't have an account? Register.  </a></div>  <div id="forgotpassword" style="font-size: 1.2em;" ><?php echo link_to('users', 'forgot-password', __('Lost your password?')); ?></div>
</p>

<?php echo flash(); ?>
    
<?php echo $this->form->setAction($this->url('users/login')); ?>

<?php echo foot(array(), $footer); ?>
