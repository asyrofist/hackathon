  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/boyo2.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Pengolahan Sampah</h3>
            <p>ini adalah salah satu contoh pengelohan sampah</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/sampah2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Pengolahan Kompos</h3>
            <p>pengelohan Kompos di sekitar kita</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/sampah.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Pengumpulan Sampah</h3>
            <p>Ada beberapa tempat sampah untuk diolah sekitar kita.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <h1 class="my-4">Apa itu Waste Data Surabaya?</h1>
    <?php 
      $hasil= $db->query("SELECT*FROM motto");
    ?>
    <!-- Marketing Icons Section -->
    <div class="row">
    <?php if ($hasil->num_rows>0) {
          while ($ukuran = $hasil->fetch_assoc()) { ?>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?php echo $ukuran['motto_title']; ?></h4>
          <div class="card-body">
            <p class="card-text"><?php echo $ukuran['motto_deskripsi']; ?></p>
          </div>
        </div>
      </div>
      <?php  } } ?>

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2>Pelanggan Setia Kami</h2>
    <?php
      $ambil= $db->query("SELECT*FROM customer");
    ?>     
    <div class="row">
    <?php while ($perproduk=$ambil->fetch_assoc()) { ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img/<?php echo $perproduk['customer_image'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $perproduk['customer_nama']; ?></a>
            </h4>
            <p class="card-text"><?php echo $perproduk['customer_deskripsi'] ?></p>
            <button type="button" class="btn btn-light">
              <img class="img-fluid rounded" src="img/sosmed.jpeg" alt="Responsive image" >
            </button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    
    
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Mengapa memilih kami?</h2>
        <p>karena kami memilih banyak keunggulan dari yang lain:</p>
        <ul>
          <li>
            <strong>Memberi kemudahan pengembangan</strong>
          </li>
          <li>Dengan memberi solusi bagi permasalahan lingkungan anda.</li>
          <li>Selalu berinovasi dalam pengelolahan sampah</li>
          <li>memberi selalu kebutuhan untuk anda.</li>
          <li>Harga terbaik di kelasnya</li>
        </ul>
        <p>dengan memberi kemudahan serta layanan ini, akan membuat budaya mawas diri terharap sampah sekitar kita.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="img/logo.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Untuk informasi lebih lanjut, maka bisa klik tombol berlanggan dan subscribe ke tombol berikut:</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">subscribe</a>
      </div>
    </div>

  </div>
  <!-- /.container -->