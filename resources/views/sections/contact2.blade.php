
<div class="container h-100 contact2-container position-relative">
	<div class="d-flex h-100 flex-column justify-content-center pt-up-sm-5r">
			<div class="sub-container">
				<div class="row gap-5">
					<div class="col-lg-5">
						<h4 class="h4-title">REACH OUT TO US</h4>
						<form action="send-contact" name="contactForm" id="contact-form" method="POST" enctype="multipart/form-data" class="custom-form">
							@csrf
							<div class="apply-input-group h-mb-4">
								<label for="contact_name">
									<h6 class="small fw-bold">Full Name <span class="text-danger">*</span></h6>
								</label>
								<input type="text" id="contact_name" name="contact_name" class="rounded-4 custom-input required" placeholder="John Smith">
								<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
							</div>
							<div class="apply-input-group h-mb-4">
								<label for="contact_email">
									<h6 class="small fw-bold">Email <span class="text-danger">*</span></h6>
								</label>
								<input type="email" id="contact_email" name="contact_email" class="rounded-4 custom-input required" placeholder="example@abc.com">
								<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
							</div>
							<div class="apply-input-group h-mb-4">
								<label for="contact_phone">
									<h6 class="small fw-bold">Phone Number <span class="text-danger">*</span></h6>
								</label>
								<input type="text" id="contact_phone" name="contact_phone" class="rounded-4 custom-input required" placeholder="03 1234 4567">
								<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
							</div>
							<div class="apply-input-group h-mb-4">
								<label for="contact_message">
									<h6 class="small fw-bold">Message <span class="text-danger">*</span></h6>
								</label>
								<textarea class="custom-textarea required" name="contact_message" id="contact_message" rows="5"></textarea>
								<span class="text-danger fw-semibold error-input d-none small">* This field is required!</span>
							</div>
							<button type="button" class="btn btn-outline-red-primary w-100 fw-bold rounded-4 h-mt-4 py-2 button-submit-contact">
								Send
							</button>
						</form>
					</div>
					<div class="col-lg-6">
						<div class="h-75">
							<h4 class="h4-title">MAP</h4>
							<iframe class="w-100 h-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.440950157413!2d106.65283625081304!3d10.777500392283143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec705726345%3A0xc3d2ce09ead8feb9!2zNDAgVGhpw6puIFBoxrDhu5tjLCBQaMaw4budbmcgOSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1665117101151!5m2!1sen!2s" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-end">
				<span class="block-span-red-135"></span>
			</div>
			<a role="button" class="slide-prev-btn position-absolute bottom-0 start-0 d-none d-md-flex z-3">
				<img src="{{ asset('assets/images/arrow-left.svg') }}" alt="">
			</a>
	</div>
</div>
<script>
	$(document).ready(function () {
		let getInput = $('.custom-input.required');
		let getTextArea = $('.custom-textarea.required');

		getInput.on('blur', function(){
			if ($(this).val() == '') {
				$(this).addClass('error');
				$(this).parent().find('.error-input').removeClass('d-none');
			}
		})

		getInput.on('focus', function(){
			if ($(this).val() == '') {
				$(this).removeClass('error');
				$(this).parent().find('.error-input').addClass('d-none');
			}
		})

		getTextArea.on('blur', function(){
			if ($(this).val() == '') {
				$(this).addClass('error');
				$(this).parent().find('.error-input').removeClass('d-none');
			}
		})

		getTextArea.on('focus', function(){
			if ($(this).val() == '') {
				$(this).removeClass('error');
				$(this).parent().find('.error-input').addClass('d-none');
			}
		})
		function checkInput() {
			let flag = true;
			let getAllInput = $('.custom-input.required');
			let getAllTextarea = $('.custom-textarea.required');

			getAllInput.each(function(){
				let targetInput = $(this);
				if (targetInput.val() == '') {
					flag = false;
					targetInput.addClass('error');
					targetInput.parent().find('.error-input').removeClass('d-none');
				}
			});
			getAllTextarea.each(function(){
				let targetInput = $(this);
				if (targetInput.val() == '') {
					flag = false;
					targetInput.addClass('error');
					targetInput.parent().find('.error-input').removeClass('d-none');
				}
			});

			return flag;
		}
		$('.button-submit-contact').on('click', function(){
			let flagCheck = checkInput();
			if (flagCheck) {
				var contactForm = document.getElementById("contact-form");
					contactForm.submit();
			}
		})
	});
</script>
