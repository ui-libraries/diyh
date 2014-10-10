<?php
queue_js_file('guest-user-password');
queue_css_file('skeleton');
$css = "form > div { clear: both; padding-top: 10px;} .two.columns {width: 30%;} ";
queue_css_string($css);
$pageTitle = __('Register');
echo head(array('bodyclass' => 'register', 'title' => $pageTitle));
?>
<style type="text/css">
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

#primary {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
	width: 50%;
    margin: 0 auto;

}

h1 {
	width: 50%;
    margin: 0 auto;
}

form {
	  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
  width: 100%;
  margin-right: 0 auto;
  margin-left: 25% auto;
}




</style>
<script>$("#searchbox").remove();</script>

<br /><br /><br /><br />
<h1><?php echo $pageTitle; ?></h1>
<div id='primary'>
<div id='capabilities'>
<p>
<?php echo get_option('guest_user_capabilities'); ?>
</p>
</div>
<?php echo flash(); ?>
<?php echo $this->form; ?>
<p id='confirm'></p>
</div>
<?php echo foot(); ?>
