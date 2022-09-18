

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php include_once("header.php"); ?>

    <?php   ?>
    <!--image slider section -->
    <section image-slider>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active img-banner">
                    <img src="assets/image/img-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/img1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/img-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <div class="container">
        <!-- Category Section -->
        <section product-category>
            <div class="title text-center mt-5">
                <h3>Product</h3>
            </div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-md-3 ">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="assets/image/22-09-151663231676cat1.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Electronics</h5>
                                    <p class="card-text">Price: Rs.50000</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="Item_Name" value="Electronics">
                                    <input type="hidden" name="Price" value="450">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 ">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="assets/image/22-09-151663232979cat2.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">mackup</h5>
                                    <p class="card-text">Price: Rs.1500</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="Item_Name" value="Mackup">
                                    <input type="hidden" name="Price" value="1500">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 ">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="assets/image/22-09-151663235369item5.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Perfume</h5>
                                    <p class="card-text">Price: Rs.900</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="Item_Name" value="Perfume">
                                    <input type="hidden" name="Price" value="900">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 ">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="assets/image/22-09-151663236880item1.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Watch</h5>
                                    <p class="card-text">Price: Rs.1400</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="Item_Name" value="Watch">
                                    <input type="hidden" name="Price" value="1400">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </section>
        <?php  print_r($value); ?>
        <?php include_once('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>