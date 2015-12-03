
	<footer>
		<div class="container">

			<div class="logo_place">
				<a class="logo"></a>
				<div class="disclaimer">
					DISCLAIMER: Bitcoin and crypto currencies prices are volatile and fluctuate day-to-day. Trading in these crypto currencies may be considered a high risk activity.<br>
					Proper and sound judgement should be used in evaluating the risks associated with these activities. ANX does not solicit nor make any representation that crypto currencies are an investment vehicle. The decision to trade crypto currencies rests entirely on the users own independent judgement.
				</div>
			</div>
			
			<nav>
				<ul>
					<li><a href="about">About</a></li>
					<li><a href="how_it_works">How it works?</a></li>
					<li><a href="limits">Limits</a></li>
					<li><a href="safety">Safety</a></li>
					<li><a href="reviews">Reviews</a></li>
					<li><a href="#">Affiliate program</a></li>
					<li><a href="news">News</a></li>
				</ul>
			</nav>

			<nav>
				<ul>
					<li><a href="exchange">Exchange</a></li>
					<li><a href="FAQ">FAQ</a></li>
					<li><a href="support">Support</a></li>
					<li><a href="terms_of_use">Terms of use</a></li>
					<li><a href="partnership">Partnership</a></li>
					<li><a class="open_popup">Login</a></li>
				</ul>
			</nav>

			<div class="subscribes">
				<div class="social">
					<a href="#" class="icon-youtube"></a>
					<a href="#" class="icon-twitter"></a>
					<a href="#" class="icon-facebook"></a>
				</div>

				<form id="subscribe_form" class="subscribe ajax_form">
					<label for="email_input">Subscribe for a newsletter:</label>
					<input type="text" id="email_input" name="email" placeholder="Your email">
					<input type="submit" value="Ok">
				</form>
			</div>

			<div class="clear"></div>
		</div>
	</footer>

	<div id="payments">
		<div class="container">
			<div class="logos">
				<img src="assets-lossy/bitgo.png" alt="BitGo">
				<img src="assets-lossy/cloudflare.png" alt="Cloudflare">
				<img src="assets-lossy/bitcoinaverage.png" alt="Bitcoin Average">
			</div>
			<div class="copyright">© "ExAll", 2015</div>
		</div>
	</div>

	<div id="go_up" class="hidden-mobile" title="Go to top" style="display:none"></div>

	<div id="splash" style="display:none"></div>

    <div id="secure" class="secure" style="display:none">
    	<div class="close icon-cross"></div>    
	    <ul>
	        <li>Адрес начинается с <span>https</span></li>
	        <li>Адрес виден и адресом является <span>https://exall.club</span></li>
	        <li>В SSL сертификате есть информация о принадлежности сайта к <span>Exall Club</span></li>
			<li>Вы используете: <span>Chrome</span>, Ваш IP адрес: <span><?php /* IP address */ echo $_SERVER["REMOTE_ADDR"]; ?></span></li>
	    </ul>
    </div>

	<div id="popup" class="popup" style="display:none">
		<div class="close icon-cross"></div>
		
		<ul class="tabs">
			<li class="active">Login</li>
			<li>Registration</li>
		</ul>

		<div class="form_block reg">
			<form id="reg_form" class="ajax_form" data-parsley-validate>
				<input type="email" name="email" placeholder="Your email:" data-parsley-required>
				<input id="reg_password" class="st-input" name="password" onkeydown="$('#terms2').fadeIn();" type="password" alt="" placeholder="Your password:" data-parsley-required data-parsley-minlength="5">
				<input onchange="if ($('#reg_password').get(0).type=='password') $('#reg_password').get(0).type='text'; else $('#reg_password').get(0).type='password';" name="fff" type="checkbox" value="false" id="show_pass2" class="checkbox eye"><label for="show_pass2"></label>
				<input type="checkbox" name="rules" class="checkbox square" id="checkbox">
				<label for="checkbox" id="terms2" onclick="$('#recaptcha1').fadeToggle();" style="display:none">I accept the <a href="/exall/terms_of_use" target="_blank">terms of use</a></label>
				<div id="recaptcha1" class="g-recaptcha" style="display:none"></div>
				<button type="submit" class="orange_button">Enter <i class="icon-arrow-right"></i></button>
			</form>
		</div>

		<div class="form_block login active">
			<form id="login_form" class="ajax_form" data-parsley-validate>
				<input type="email" name="email" placeholder="Your email:" data-parsley-required>
				<input id="pass1" class="st-input" type="password" name="password" placeholder="Your password:" data-parsley-required data-parsley-minlength="5">
				<input onchange="if ($('#pass1').get(0).type=='password') $('#pass1').get(0).type='text'; else $('#pass1').get(0).type='password';" name="fff" type="checkbox" value="false" id="show_pass1" class="checkbox eye"><label for="show_pass1"></label>
				<a id="forgot_password" class="tip" href="#" data-title="Введите адрес электронной почты и&nbsp;нажмите&nbsp;сюда. Мы&nbsp;вышлем&nbsp;вам инструкции по восстановлению пароля.">
				Forgot password?</a>
				<div class="clear"></div>
				<div class="auth_type">
					Choose authentication method:<br>
					<input type="radio" name="auth" value="GA" class="checkbox circle" id="radio_GA"><label for="radio_GA">GA</label>
					<input type="radio" name="auth" value="Email" class="checkbox circle" id="radio_Email"><label for="radio_Email">Ask email</label>
					<div class="clear"></div>
					<input type="radio" name="auth" value="Paper_Code" class="checkbox circle" id="radio_Paper_code"><label for="radio_Paper_code">Paper code</label>
					<input type="radio" name="auth" value="SMS" class="checkbox circle" id="radio_SMS"><label for="radio_SMS">SMS</label>
					<div class="clear"></div>
				</div>
				<button type="submit" class="orange_button">Enter <i class="icon-arrow-right"></i></button>
			</form>
		</div>

	</div>

	<div id="feedback" class="popup feedback" style="display:none">
		<div class="close icon-cross"></div>
		
		<ul class="tabs">
			<li>Your feedback:</li>
		</ul>

		<div class="form_block feedback">
			<form id="feedback_form" class="ajax_form" data-parsley-validate>
				<input type="text" name="name" placeholder="Your name:" data-parsley-required>

				<div class="upload-file-container">
					<img id="image" src="#" alt="" />						
					<div class="upload-file-container-text">
						<span>Add photo</span>
						<input type="file" name="pic[]" class="photo" id="imgInput" />
					</div>
				</div>	

				<textarea name="feedback" placeholder="Your feedback:" data-parsley-required></textarea>
				<input type="text" name="fb_account" placeholder="Your Facebook account link:" data-parsley-required data-parsley-type="url">
				<input type="text" name="tw_account" placeholder="Your Twitter account link:" data-parsley-required data-parsley-type="url">
				<input type="text" name="youtube_review" onchange="$('#recaptcha2').fadeIn();" placeholder="Your YouTube video link:" data-parsley-required data-parsley-type="url">
				<div id="recaptcha2" class="g-recaptcha" style="display:none"></div>
				<button type="submit" class="orange_button">Send <i class="icon-arrow-right"></i></button>
			</form>
		</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/ru.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
    <script src="js/scripts.js"></script>

  </body>
</html>