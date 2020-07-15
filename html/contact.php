<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=¨stylesheet¨ type=¨text/css¨ href=¨html/assets/css/main.css¨>
    <script type="text/javascript" src="js/lib/jquery-1.11.1.min.js" ></script>
    <script> 
        $(function(){ $("head").load("templates/header.html") });
    </script>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
      <h1 class="w3-xlarge">ART by</h1>
      <h1>Gouri Bajpai</h1>
      
      <div class="w3-padding-32">
        <div class="w3-bar w3-border">
          <a href="index.html" class="w3-bar-item w3-button">Home</a>
          <a href="about.html" class="w3-bar-item w3-button w3-hide-small">About</a>
          <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
        </div>
      </div>
    </header>
    
    <!-- Photo Grid -->
    <div class="w3-row-padding w3-grayscale" style="margin-bottom:128px">
      <div class="w3-half">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/rocks.jpg" style="width:100%">
        <img src="/w3images/falls2.jpg" style="width:100%">
        <img src="/w3images/paris.jpg" style="width:100%">
        <img src="/w3images/nature.jpg" style="width:100%">
        <img src="/w3images/mist.jpg" style="width:100%">
        <img src="/w3images/paris.jpg" style="width:100%">
      </div>
    
      <div class="w3-half">
        <img src="/w3images/underwater.jpg" style="width:100%">
        <img src="/w3images/ocean.jpg" style="width:100%">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/mountainskies.jpg" style="width:100%">
        <img src="/w3images/rocks.jpg" style="width:100%">
        <img src="/w3images/underwater.jpg" style="width:100%">
      </div>
    </div>
      
    <!-- End Page Content -->
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>


    <!-- Scripts -->
    <script src="html/assets/js/main.js"></script>
    <!-- <script>
        // Toggle grid padding
        function myFunction() {
          var x = document.getElementById("myGrid");
          if (x.className === "w3-row") {
            x.className = "w3-row-padding";
          } else { 
            x.className = x.className.replace("w3-row-padding", "w3-row");
          }
        }
        
        // Open and close sidebar
        function w3_open() {
          document.getElementById("mySidebar").style.width = "100%";
          document.getElementById("mySidebar").style.display = "block";
        }
        
        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
        }
        </script> -->
</body>
</html>