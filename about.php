<?php include "header.php" ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
      <small>Waste Data Surabaya</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php?halaman=home">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img/logo.png" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Us</h2>
        <p>Kita disini berusaha membantu untuk kebutuhan anda dalam pengelolaan sampah untuk lingkungan sekitar Anda. Dengan ini bisa membuat lingkungan sekitar kita bagus.</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Our Team</h2>
    <?php
      $ambil= $db->query("SELECT*FROM member");
    ?>
    <div class="row">
    <?php while ($perproduk=$ambil->fetch_assoc()) { ?>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="img/<?php echo $perproduk['member_image'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $perproduk['member_title']; ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $perproduk['member_position']; ?></h6>
            <p><?php echo $perproduk['member_deskripsi']; ?></p>
            <!-- <p class="card-text"></p> -->
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- /.row -->

    <!-- Our Customers -->
    <h2>Our Customers</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>
