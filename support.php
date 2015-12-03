<?php include('header.php'); ?>

<div id="content" class="section">

	<div class="container">
		<div class="back">
			<a class="backlink" onclick="history.back(); return false;"><i class="icon-arrow-left"></i> back</a>
		</div>

		<article>
			
			<h1>Support&Feedback</h1>
			
			<p class="big">Свяжитесь с основателями площадки ExAll. Задавайте интересующие вас вопросы или предлагайте варианты сотрудничества.</p>

			<br>
			<br>

			<div class="half">
				<span class="gray">Также, здесь написана контактная<br>информация:</span>

				<table class="contacts">
					<tr>
						<td>Tel:</td>
						<td>+7 919 123-47-70</td>
					</tr>
					<tr>
						<td>Skype:</td>
						<td>thisisstolar</td>
					</tr>
					<tr>
						<td>Address:</td>
						<td>ul. Marchenko 25, 19</td>
					</tr>
					<tr>
						<td>City:</td>
						<td>Chelyabinsk</td>
					</tr>
				</table>
			</div>

			<div class="half">
				<form id="contacts_form">
					<input type="text" name="name" placeholder="Your name:">
					<input type="text" name="email" placeholder="Your email:">
					<textarea name="feedback" placeholder="Your feedback:" onchange="$('#recaptcha4').fadeIn();" ></textarea>
					<div id="recaptcha3" class="g-recaptcha" data-sitekey="6Ld0pw4TAAAAAEo2CaeT_HzrkwCufCp-VV1FNhG4"></div>
					<button type="submit" class="orange_button">Send <i class="icon-arrow-right"></i></button>
				</form>
			</div>

		</article>

	</div>

</div>

<?php include('footer.php'); ?>