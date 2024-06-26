<?php  
include("head.php");
include("header.php");
?>
<section>
	<div class="service-main wow animate__animated animate__bounceInDown">
		<h1>FAQs</h1>
		<div class="text-center">
			<i class="fas fa-home"></i><a href="index.php">Home : </a><a href="#" class="glaucoma"> : FAQs</a>
		</div>
	</div>
	<section>
		<div class="fixed-div">
			<div>
				<a href="#" class="fas fa-calendar-check" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="Make Appointment" data-target="#staticBackdrop"></a>
			</div>
			<div class="mt-3">
				<a href="https://wa.me/+918980901901" target="_blank" data-toggle="tooltip" data-placement="right" title="Message Via WhatsApp" class="fab fa-whatsapp"></a>
			</div>
		</div>
	</section>
	<div class="mt-5 mb-5">
		<div class="heading">
			<div class="text-center">
				<h2 class="care">FAQs</h2>
				<hr class="care-hr">
			</div>
			<div class="heading-abs">
				<p class="boot-vision">Questions ?</p>
			</div>
			<div class="text-center">
				<p class="heading-text">Placing you and your safety at the heart of everything we do With having our<br> entire team of optometrists</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div>
			<div class="collapsible wow animate__animated animate__fadeInLeftBig">
				<button class="text-white bg-transparent border-0 font-weight-bold">What To Expect On Cataract Surgery Day</button><span><i class="fas fa-plus float-right mt-2"></i></span>
			</div>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="collapsible wow animate__animated animate__fadeInRightBig">
				<button class="text-white bg-transparent border-0 font-weight-bold">What To Expect On Cataract Surgery Day</button><span><i class="fas fa-plus float-right mt-2"></i></span>
			</div>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="collapsible wow wow animate__animated animate__fadeInLeftBig">
				<button class="text-white bg-transparent border-0 font-weight-bold">What To Expect On Cataract Surgery Day</button><span><i class="fas fa-plus float-right mt-2"></i></span>
			</div>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="mb-5">
				<div class="collapsible wow wow animate__animated animate__fadeInRightBig">
					<button class="text-white bg-transparent border-0 font-weight-bold">What To Expect On Cataract Surgery Day</button><span><i class="fas fa-plus float-right mt-2"></i></span>
				</div>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
include("footer.php");
?>
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}
</script>
<?php 
include("script.php");
?>