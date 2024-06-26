	<?php 	
	include("head.php");
	include("header.php");
	?>
	<section>
		<div class="service-main wow animate__animated animate__bounceInDown">
			<h1>Gellary</h1>
			<div class="text-center">
				<i class="fas fa-home"></i><a href="index.php">Home : </a><a href="#" class="glaucoma"> : Gellary</a>
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
		<div>
			<!-- The grid: four columns -->
			<div class="row mr-0 wow animate__animated animate__fadeInLeftBig">
				<div class="column">
					<img loading="lazy" src="asset/img/catarcat.png" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/catarcat.png" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/catarcat.png" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/catarcat.png" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
			</div>
			<div class="row mr-0 wow animate__animated animate__fadeInRightBig">
				<div class="column">
					<img loading="lazy" src="asset/img/img1.jpg" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/img1.jpg" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/img.jpg" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
				<div class="column">
					<img loading="lazy" src="asset/img/img1.jpg" alt="Surgery 1" onclick="myFunction(this);" class="img-fluid">
				</div>
			</div>

			<!-- The expanding image container -->
			<div class="container gal-container animate__animated animate__fadeInLeftBig mt-5">
				<!-- Close the image -->
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

				<!-- Expanded image -->
				<img id="expandedImg" style="width:100%">

				<!-- Image text -->
				<div id="imgtext"></div>
			</div>
		</div>
	</section>
	<script>
		function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
</script>
<?php 	
include("footer.php");
include("script.php");
?>