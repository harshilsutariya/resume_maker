<!DOCTYPE html>
<html>
<title>RESUME maker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="Assets/title.png">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

p{
  color: brown;
}

h7{
  color: lightseagreen
  
}
	
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("Assets/background.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}



/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><strong>RESUME MAKER</strong></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="https://leetcode.com/harshil_sutariya/" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
      <a href="mailto:harshilsutariya52@gmail.com" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="https://rudransh.rf.gd" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
  <a href="mailto:rudransh9437@gmail.com" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
  <a href="https://rd9437.github.io/FotoPDF/" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-file-text-o"></i> FotoPDF - Image to PDF</a>
</nav>


  <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="https://rudransh.rf.gd" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
        <a href="mailto:rudransh9437@gmail.com" target="_blank" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>
  

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-padding-32" id="projects">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><strong>Templates</strong></h3>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Modern</div>
          <a href="1/index.html" target="_blank">
          <img src="Assets/tp1.png" alt="House" style="width:80%"></a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <a href="2/index.html" target="_blank">
          <div class="w3-display-topleft w3-black w3-padding">Standard</div>
          <img src="Assets/tp2.png" alt="House" style="width:85%"></a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <a href="3/index.html" target="_blank">
          <div class="w3-display-topleft w3-black w3-padding">Simple</div>
          <img src="Assets/tp3.jpg" alt="House" style="width:85%"></a>
        </div>

      </div>
    </div>
	 <p></p>
    
	   <!-- <h7><strong>FotoPDF - Image to PDF</strong><h7>
     <p>Announcing our latest feature: Seamlessly convert images to PDFs right within <a href="https://rd9437.github.io/FotoPDF/" target="_blank"><strong>FotoPDF </strong> <i class="fa fa-external-link"></i></a>.</p> -->

  </div>
  

  
<footer class="footer-distributed">

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Connect with us</span>
				</p>

				<div class="footer-icons">
	
					<a href="https://www.linkedin.com/in/
harshil-sutariya-9a3a28242
/" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/jeneesh01" target="_blank"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
