<?php
require_once('../libs/functions.php');

$d = initializeApp('streamline');
$ni = sizeof($d['items']);
$iu = array($ni);

for($i=0;$i<$ni;$i++){
    $itemid = $d['items'][$i];
    $idata 	= fetchItemData($itemid);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Di sản văn hóa dân tộc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .line {
            margin: 25px 0;
            height: 1px;
            background: -webkit-gradient(linear, 0 0, 100% 0, from(white), to(white), color-stop(50%, #dee2e6));
        }
    </style>
</head>

<body>
<!-- Start header -->
<div class="fixed-top" style="background-color: #ffffff">
    <div class="container d-flex justify-content-between align-items-center" style="background-color: #ffffff">
        <a href="#">
            <img width="200px" height="100px" src="assets/img/logo.png">
        </a>
    </div>
</div>
<!-- End header -->
<!--Start content -->
<section class="content">
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel" style="margin-top:100px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row pt-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <?php
                            $itemid = $d['banner'];
                            $idata 	= fetchItemData($itemid);
                            $url_full = $idata['url_full'];
                            echo '<img class="img-fluid mx-auto d-block" src="'.$url_full.'" style="max-width:600px;" alt="">';
                            ?>
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <p style="text-align:justify">
                                    <?php
                                        echo "<h2>" .$d['title']. "</h2>";
                                        echo "<p style='font-style: italic;'>" .$d['author']. "</p>";
                                        echo "<p style='text-align:justify'>" . $d['desc'] . "</p>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row">
                <?php
                    $items = $d['items'];
                    foreach($items as $key => $item):
                ?>
                    <div class="col-12 col-md-4 mb-4">
                        <!-- <div class="col-12 col-md-4"> -->
                        <!-- <div class="col-12 col-md-12 mb-4"> -->
                        <div class="card h-100">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#informationModal-<?php echo ++$key ?>">
                                <div id="carouselContent-<?php echo $key ?>" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselContent-<?php echo $key ?>" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselContent-<?php echo $key ?>" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselContent-<?php echo $key ?>" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php
                                            $images = $item['images'];
                                            $data = fetchItemData($images[0]);
                                            $url_full = $data['url_full'];
                                            echo
                                                '<div class="carousel-item active">
                                                    <img src="'.$url_full.'" class="card-img-top" alt="...">
                                                </div>';
                                            for($i = 1; $i < sizeof($images); $i++)
                                            {
                                                $data = fetchItemData($images[$i]);
                                                $url_full = $data['url_full'];
                                                echo
                                                    '<div class="carousel-item">
                                                        <img src="'.$url_full.'" class="card-img-top" alt="...">
                                                    </div>';
                                            }
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#carouselContent-<?php echo $key ?>" role="button" data-bs-slide="prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#carouselContent-<?php echo $key ?>" role="button" data-bs-slide="next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#" class="h2 text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#informationModal-<?php echo $key ?>">
                                    <?php
                                    echo $item['name'];
                                    ?>
                                </a>
                                <p class="card-text" style="text-align:justify">
                                    <?php
                                    $data = fetchItemData($item['images'][0]);
                                    $short = substr($data['desc'], 0, 300);

                                    echo $short . '...';
                                    ?>
                                </p>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#informationModal-<?php echo $key ?>">Xem Thêm</button>
                                <div class="modal fade" id="informationModal-<?php echo $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $item['name'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <?php
                                                        for($i = 0; $i < sizeof($images); $i++):
                                                            $images = $item['images'];
                                                            $data = fetchItemData($images[$i]);
                                                    ?>
                                                        <div class="row">
                                                            <div class="mx-auto col-md-8 col-lg-5 <?php if($i % 2 != 0) { echo 'order-lg-last'; } ?>">
                                                                <?php
                                                                $url_full = $data['url_full'];
                                                                echo '<img src="'.$url_full.'" class="align-middle card-img-top pt-2" alt="...">';
                                                                ?>
                                                            </div>
                                                            <div class="col-lg-7 mb-0 d-flex align-items-center">
                                                                <div class="text-align-right align-self-center">
                                                                    <p style="text-align:justify">
                                                                        <?php
                                                                            echo $data['desc'];
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        if ($i != sizeof($images) - 1)
                                                        {
                                                            echo "<div class='line'></div>";
                                                        }
                                                        endfor;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                <?php
                    endforeach;
                ?>

            </div>
        </div>
    </section>
    <!-- End Featured Product -->
</section>
<!-- End content -->
<!-- Start footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Bảo tồn văn hóa các dân tộc Việt Nam
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<!-- End Script -->
</body>

</html>