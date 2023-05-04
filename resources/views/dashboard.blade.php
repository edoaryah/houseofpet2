@extends("layouts.navigation")

@section ('content')
<!-- Casuroll -->
<div class="carousel-container">

  <div class="carousel">
    <button class="buton" id="slideBack">
      <img class="arrow1" src="/img/arrow.png" alt="" class="button">
    </button>
    <div id="container" class="card-container">
      <div class="card">
        <img class='gamcar' src="/img/kucing1.jpg" alt="">
      </div>
      <div class="card">
        <img class='gamcar' src="/img/kucing2.jpg" alt="">
      </div>
      <div class="card">
        <img class='gamcar' src="/img/kucing3.jpg" alt="">
      </div>
    </div>
    <button class="buton" id="slide">
      <img class="arrow2" src="/img/arrow.png" alt="" class="button">
    </button>
  </div>
</div>
<!-- Selamat Datang -->
<div class='seldat'>
  <div class='seldat1'>Selamat Datang Di</div>

  <div class='seldat2'>HOUSE OF PET</div>
</div>
<!-- List Harga -->

<div class='desc'>
  <div class="desc2">
    <div class='desc2a'>List Grooming</div>
  </div>
  <div class="desc2">
    <div class="desl">
      <div class='desc2a'>Grooming Kering</div>
      <div class="desc2a1">Grooming kering adalah teknik grooming yang menggunakan sikat atau kain kering untuk membersihkan bulu hewan peliharaan dari kotoran atau bulu yang rontok. Grooming kering ini biasanya dilakukan untuk hewan peliharaan yang tidak terlalu banyak menghasilkan bulu, seperti kucing.</div>
    </div>
    <div class='desc2a'>Rp 25.000</div>
  </div>
  <div class="desc2">
    <div class="desl">
      <div class='desc2a'>Grooming Preventif</div>
      <div class="desc2a1">Grooming preventif adalah teknik grooming yang dilakukan untuk mencegah terjadinya masalah pada hewan peliharaan, seperti infeksi kulit atau masalah gigi. Teknik ini meliputi pembersihan telinga, potong kuku, membersihkan gigi, dan memeriksa tubuh hewan peliharaan secara menyeluruh.</div>
    </div>
    <div class='desc2a'>Rp 60.000</div>
  </div>
  <div class="desc2">
    <div class="desl">
      <div class='desc2a'>Grooming Sehat</div>
      <div class="desc2a1">Grooming sehat meliputi perawatan kesehatan secara menyeluruh pada hewan peliharaan. Ini mencakup pembersihan telinga, membersihkan gigi, merapikan bulu, memeriksa kulit dan bulu hewan, dan memotong kuku.      </div>
    </div>
    <div class='desc2a'>Rp 70.000</div>
  </div>
  <div class="desc2">
    <div class="desl">
      <div class='desc2a'>Grooming Kutu</div>
      <div class="desc2a1">Grooming kutu adalah teknik grooming yang dilakukan untuk menghilangkan kutu dari bulu hewan peliharaan. Ini meliputi pembersihan bulu dengan sikat khusus, mandi kutu, dan penggunaan produk kutu.</div>
    </div>
    <div class='desc2a'>Rp 70.000</div>
  </div>
  <div class="desc2">
    <div class="desl">
      <div class='desc2a'>Grooming Jamur</div>
      <div class="desc2a1">Grooming jamur adalah teknik grooming yang dilakukan untuk menghilangkan jamur dari bulu hewan peliharaan. Ini meliputi mandi khusus dengan sampo jamur dan penggunaan produk perawatan kulit untuk membantu menghilangkan jamur.</div>
    </div>
    <div class='desc2a'>Rp 90.000</div>
  </div>
</div>
<script>
  // Slide Button Client
  var button = document.getElementById("slide");
  button.onclick = function() {
    var container = document.getElementById("container");
    sideScroll(container, "right", 100, 100, 500);
  };

  var back = document.getElementById("slideBack");
  back.onclick = function() {
    var container = document.getElementById("container");
    sideScroll(container, "left", 25, 100, 500);
  };

  function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function() {
      if (direction == "left") {
        element.scrollLeft -= step;
      } else {
        element.scrollLeft += step;
      }
      scrollAmount += step;
      if (scrollAmount >= distance) {
        window.clearInterval(slideTimer);
      }
    }, speed);
  }
</script>


<!-- URGENT -->
@endsection