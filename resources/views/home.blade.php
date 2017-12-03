<!DOCTYPE html>
<html>
<title>Perwalian Fakultas Teknik Universitas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Header -->
<header class="w3-container  w3-padding" id="myHeader">
   

  <div class="w3-center">
     <img src="{{ URL::to('logoubaya2.png') }}">
  <h4>WELCOME</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Perwalian Fakultas Teknik Universitas Surabaya</h1>
    <div class="w3-padding-32">
      
      <a href="{{route('login')}}" class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">LOGIN</a>

    </div>
  </div>
</header>



<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>FPP 1</h3><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>
    <?php
      echo $fpp1[0]->tgl_mulai . " s.d. " . $fpp1[0]->tgl_selesai;
    ?>
  </p>
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>FPP 2</h3><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>
    <?php
      echo $fpp2[1]->tgl_mulai . " s.d. " . $fpp2[1]->tgl_selesai;
    ?>
  </p>
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Kasus Khusus </h3><br>
  <i class="fa fa-warning w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>
    <?php
      echo $fpp3[2]->tgl_mulai . " s.d. " . $fpp3[2]->tgl_selesai;
    ?>
  </p>
  
  </div>
</div>
</div>



<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Disclaimer</h3>
  <p>Copyright &copy; Universitas Surabaya 2017</p>
  
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
