<?php

$producto1 = [
    'img' => 'resources/img/card01.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];
$producto2 = [
    'img' => 'resources/img/card02.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];
$producto3 = [
    'img' => 'resources/img/card03.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];

$producto4 = [
    'img' => 'resources/img/card04.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];
$producto5 = [
    'img' => 'resources/img/card05.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];
$producto6 = [
    'img' => 'resources/img/card06.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'last' => 'Last updated 3 mins ago',
];
$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6,];


$img_sliders = [
    'resources/img/slide01.jpg',
    'resources/img/slide02.jpg',
    'resources/img/slide03.jpg'
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="resources/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Tiendas MAS
        </a>
        <span class="navbar-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
            <i class="bi bi-facebook">faceboock</i>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
            <i class="bi bi-whatsapp">whatsapp</i>
        </span>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" hidden:10px>

            <?php foreach ($img_sliders as $key => $img_slider) { ?>
                <div class="carousel-item <?php if ($key == 0) { echo 'active'; } ?>">
                    <img src="<?php echo $img_slider ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <p class="parrafo" style="text-align: center; font-size: 30px;"><strong>Nuestros Productos</strong></p>

    <br><br>


    <section ">
        <div class=" container">
        <div class="row ">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-md-6 col-sm-12">
                    <div class="row no-gutters border mt-1 m-3" style=" height: 190px;">
                        <div class="col-md-4 col-sm-12">
                            <img src="<?php echo $producto['img'] ?> " class="card-img-top" style="width: 180px;" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['titulo'] ?> </h5>
                                <p class="card-text"><?php echo $producto['descripcion'] ?> </p>
                                <p class="card-text text-secondary"><?php echo $producto['last'] ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>

    </section>
    <div class="card">
        <div class="card-body">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-center" viewBox="0 0 16 16">
                <path d="M8 1a.5.5 0 0 1 .5.5V6h-1V1.5A.5.5 0 0 1 8 1m0 14a.5.5 0 0 1-.5-.5V10h1v4.5a.5.5 0 0 1-.5.5M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
            </svg>
            <i class="bi bi-align-center"> jr amazonas: 120</i>
            <br><br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg> 
            <i class="bi bi-telephone">958410795</i>
        </div>
        <p class="tex" style="text-align: center;">todos los derechos reservados 2024</p>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>