<?php
include "includes/head.php"
?>

<body>
  <!----------------         carousel                     --------->

  <?php

  include "includes/header.php";
  ?>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel2.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel3.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel4.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel5.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel1.jpg" class="d-block w-100" style="height: 270px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!----------------       end of carousel                     --------->
  <div class="container-fluid ">

    <!-- categories-->
    <!-- Categories Section -->
<style>
  @keyframes floatAnimation {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }

  .animated-card {
    animation: floatAnimation 3s ease-in-out infinite;
    transition: transform 0.3s ease-in-out;
  }

  .animated-card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  }

  .animated-button {
    transition: transform 0.3s ease-in-out;
  }

  .animated-button:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }
</style>

<div class="row" id="cards">
<div class="row">
  <!-- Medicine Products -->
<div class="col-sm-3">
  <div class="card animated-card" style="background-color: AntiqueWhite; height: 72%; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
    <div class="card-body text-center">
      <strong style="background-color: black; color: white; padding: 5px 10px; border-radius: 5px;">UP TO 50% OFF</strong>
      <h5 class="font-weight-bold text-muted mt-2">Medicines</h5>
      <a href="search.php?cat=medicine">
        <img src="images/midicin.jpg" class="d-block hover-scale" style="width:150px; height:170px; border-radius: 10px;" alt="Medicine Products">
      </a>
      <br>
      <a href="search.php?cat=medicine">
        <button class="rounded-2 animated-button btn btn-dark mt-2" style="padding: 10px 20px; transition: background-color 0.3s;">Go To Medicine Products</button>
      </a>
    </div>
  </div>
</div>

<!-- Self Care Products -->
<div class="col-sm-3">
  <div class="card animated-card" style="background-color: rgb(93, 179, 207); height: 70%; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
    <div class="card-body text-center">
      <strong style="background-color: black; color: white; padding: 5px 10px; border-radius: 5px;">UP TO 35% OFF</strong>
      <h5 class="font-weight-bold text-muted mt-2">Self Care</h5>
      <a href="search.php?cat=self-care">
        <img src="images/self-care.jpg" class="d-block hover-scale" style="height:150px; border-radius: 10px;" alt="Self Care Products">
      </a>
      <br><br>
      <a href="search.php?cat=self-care">
        <button class="rounded-2 animated-button btn btn-dark mt-2" style="padding: 10px 20px; transition: background-color 0.3s;">Go To Self Care</button>
      </a>
    </div>
  </div>
</div>

<!-- Machine Products -->
<div class="col-sm-3">
  <div class="card animated-card" style="background-color: rgb(81, 211, 216); height: 70%; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
    <div class="card-body text-center">
      <strong style="background-color: black; color: white; padding: 5px 10px; border-radius: 5px;">UP TO 70% OFF</strong>
      <h5 class="font-weight-bold text-muted mt-2">Machines</h5>
      <a href="search.php?cat=machine">
        <img src="images/machine.jpg" class="d-block hover-scale" style="width:155px; height:155px; border-radius: 10px;" alt="Machine Products">
      </a>
      <br><br>
      <a href="search.php?cat=machine">
        <button class="rounded-2 animated-button btn btn-dark mt-2" style="padding: 10px 20px; transition: background-color 0.3s;">Go To Machines</button>
      </a>
    </div>
  </div>
</div>

<!-- Our Stores -->
<div class="col-sm-3">
  <div class="card animated-card" style="background-color: AntiqueWhite; height: 70%; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
    <div class="card-body text-center">
      <h5 class="font-weight-bold text-muted">Our Store</h5>
      <a href="https://www.google.com/maps/search/PharmEasy/" target="_blank">
        <img src="images/stores.jpeg" class="d-block hover-scale" style="width:150px; height:200px; border-radius: 10px;" alt="Our Stores">
      </a>
      <br><br>
      <a href="https://maps.app.goo.gl/KqcYnvcydFyxdT4D9?g_st=atm" target="_blank">
        <button class="rounded-2 animated-button btn btn-dark mt-2" style="padding: 10px 20px; transition: background-color 0.3s;">Check The Locations</button>
      </a>
    </div>
  </div>
</div>

</div>


    <!-- end of categories-->


    <!----------------         products might you like                     --------->

    <h2 style="margin-top: 10px;">Products you might like : </h2>

<style>
  /* Add animation to the product cards */
  .card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }

  /* Scale up and add shadow on hover */
  .card:hover {
    transform: scale(1.05);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  }

  /* Ensure equal height for product cards */
  .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  /* Container row styling */
  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
</style>

<div class="row">
  <?php
  $data = all_products();
  $num = min(sizeof($data), 8); // Limit to 8 products

  for ($i = 0; $i < $num; $i++) {
  ?>
    <div class="col-sm-2" id="cards" style="width: 20.45rem; margin-bottom: 20px;">
      <div class="card border border-warning">
        <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top" style="width:305.3px; height:305px;">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo (strlen($data[$i]['item_title']) <= 20) ? $data[$i]['item_title'] : substr($data[$i]['item_title'], 0, 20) . "..."; ?>
          </h5>
          <strong>
            <h3 style="color: #82E0AA;" class="card-text">₹<?php echo $data[$i]['item_price'] ?></h3>
          </strong>
          <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
          <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-outline-info">More details</a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>


    <!----------------        end of products might you like                     --------->
    <br>
<br>
<br>
<br>
<div class="container-fluid">
  <div class="row text-center">
    <!-- Animated counters with floating effect -->
    <div class="col-sm-4" style="padding-left: 20px;">
      <img src="https://assets.pharmeasy.in/web-assets/dist/4d2f7c48.svg" style="width: 100px;" alt="Icon">
      <h1 class="animated-counter" style="color: rgb(47,79,79); font-weight: bold;" data-target="18">0</h1>
      <h1 style="color: rgb(47,79,79); font-weight: bold;">MILLION</h1>
      <h5 style="color: rgb(47,79,79);">Registered Users As Of June 31, 2021</h5>
    </div>

    <div class="col-sm-4" style="padding-left: 20px;">
      <img src="https://assets.pharmeasy.in/web-assets/dist/92c372bb.svg" style="width: 100px;" alt="Icon">
      <h1 class="animated-counter" style="color: rgb(47,79,79); font-weight: bold;" data-target="8.8">0</h1>
      <h1 style="color: rgb(47,79,79); font-weight: bold;">MILLION</h1>
      <h5 style="color: rgb(47,79,79);">PharmEasy Orders As Of FY21</h5>
    </div>

    <div class="col-sm-4" style="padding-left: 60px;">
      <img src="https://assets.pharmeasy.in/web-assets/dist/773ae9c5.svg" style="width: 100px;" alt="Icon">
      <h1 class="animated-counter" style="color: rgb(47,79,79); font-weight: bold;" data-target="50">0</h1>
      <h1 style="color: rgb(47,79,79); font-weight: bold;">K+</h1>
      <h5 style="color: rgb(47,79,79);">SKUs Sold in Q1FY21</h5>
    </div>
  </div>
</div>

<!-- Line separator -->
<h1 class="border border-2" style="width: 100%;"></h1>

<!-- Add JavaScript to animate counters -->
<script>
  const counters = document.querySelectorAll('.animated-counter');
  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / 200;

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
</script>

<!-- Style for floating and hover effects -->
<style>
  .container-fluid .col-sm-4 {
    animation: floatEffect 3s ease-in-out infinite;
  }

  @keyframes floatEffect {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
  }

  .container-fluid .col-sm-4:hover {
    transform: scale(1.05);
    transition: transform 0.5s ease-in-out;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }
</style>

  <!-- FOOTER -->
  <?php
  include "includes/footer.php"
  ?>
</body>

</html>