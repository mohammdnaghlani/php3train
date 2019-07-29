
<?php
	require_once ('init.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login & Signup Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="<?= set_base_url('assets/css/fontiran.css') ; ?>">
<link rel="stylesheet" href="<?= set_base_url('assets/css/style.css') ; ?>">
</head>
<body>
<?php if(isset($_GET['regMsg']) && $_GET['regMsg'] == 'user_register') :?>
<div class="reg">کاربر با موفقیت ثبت شد !</div>
<?php endif;?>
<!-- partial:index.partial.html -->
<?php if(!user_is_login()) : ?>
<nav class="main-nav">
	<ul>
		<li><a class="signin" href="#0">ورود</a></li>
		<li><a class="signup" href="#0">ثبتنام</a></li>
	</ul>
</nav>


<div class="user-modal">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">ورود</a></li>
				<li><a href="#0">ساخت اکانت جدید</a></li>
			</ul>

			<div id="login">
				<form class="form" method ="POST" action=<?= set_base_url('process/login.php') ; ?>>
					<p class="fieldset">
						<label class="image-replace email" for="signin-email">پست الکترونیک</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="پست الکترونیک" name="email">
						<span class="error-message">مقدار ایمل صحیح نمی باشد !</span>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signin-password">کلمه عبور</label>
						<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="کلمه عبور" name="password">
						<a href="#0" class="hide-password">نمایش</a>
						<span class="error-message">Wrong password! Try again.</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">منو یادت باشه</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="ورود">
					</p>
				</form>
				
				<p class="form-bottom-message"><a href="#0">رمزت یادت نیست ؟</a></p>
				<!-- <a href="#0" class="close-form">Close</a> -->
			</div>

			<div id="signup">
				<form class="form" method ="POST" action=<?= set_base_url('process/register.php') ; ?>>
					<p class="fieldset">
						<label class="image-replace username" for="signup-username">نام کاربری</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="نام کاربری" name='username'>
						
					</p>

					<p class="fieldset">
						<label class="image-replace email" for="signup-email">پست الکترونیک</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="پست الکترونیک" name='email'>
						
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signup-password">کلمه عبور</label>
						<input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="کلمه عبور" name='password'>
						<a href="#0" class="hide-password">نمایش</a>
						
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">  هستم من با قوانین  موافق <a class="accept-terms" href="#0">(مشاهده قوانین)</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="ثبتنام" name="register">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>

			<div id="reset-password">
				<p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

				<form class="form">
					<p class="fieldset">
						<label class="image-replace email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="error-message">An account with this email does not exist!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div>
			<a href="#0" class="close-form">Close</a>
		</div>
	</div>
	<?php else :  //login is true ?>
	<nav class="main-nav">
	<ul>
		<li><a class="signin" href="<?= set_base_url('?logout=logout') ; ?>">خروج</a></li>
	</ul>
</nav>
	<?php endif ; // end check login user?>
<!-- partial -->
<footer>
	فارسی شده توسط محمد نقلانی
</footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?= set_base_url('assets/js/script.js') ; ?>"></script>

</body>
</html>