<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Our Products</title>
    <style>
            .arrow-btn {
        background-color: #ddd;
        border: none;
        font-size: 24px;
        padding: 5px 10px;
        cursor: pointer;
    }

    .arrow-btn:hover {
        background-color: #bbb;
    }
    </style>
</head>
<body class="bg-dark">
         <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="text-light  mb-3"><i class="fa-solid fa-box-open me-2"></i> Our Products</h1>
                </div>
                <div class="col-md-2">
                    <a href="index.html" class="btn btn-outline-light">Back To Homepage</a>
                </div>
            </div>
        <div class="row">

            <div class="col-md-4 border-end">
    <div class="image-carousel d-flex align-items-center mb-3 ">
        <button id="prevBtn" class="arrow-btn">&#10094;</button>
        <img id="cakeimg" class="img-fluid" src="../images/motor1.jpg"style="width:23rem; height:18.5rem;" >
        <button id="nextBtn" class="arrow-btn">&#10095;</button>
    </div>

    <h3 class="text-light mt-4" style="font-family: 'Poiret One', cursive;">Vehicle Gloves</h3>
    <span class="fs-4" style="font-family: 'Jost', sans-serif; color: rgb(229, 191, 74);">$40.00</span>
    <br>
    <a href="#" class="btn btn-outline-light mt-3">
        <i class="fa-solid fa-cart-plus me-2"></i>Order Now
    </a>
    <br><br>
</div>
            <div class="col-md-4 border-end">
    <div class="image-carousel d-flex align-items-center mb-3 " >
        <button id="prevBtn1" class="arrow-btn">&#10094;</button>
        <img id="pasteryimg" class="img-fluid" src="../images/mech1.jpg" style="width:23rem; height:18.5rem;" >
        <button id="nextBtn1" class="arrow-btn">&#10095;</button>
    </div>

    <h3 class="text-light mt-4" style="font-family: 'Poiret One', cursive;">Mechanics Gloves</h3>
    <span class="fs-4" style="font-family: 'Jost', sans-serif; color: rgb(229, 191, 74);">$36.00</span>
    <br>
    <a href="#" class="btn btn-outline-light mt-3">
        <i class="fa-solid fa-cart-plus me-2"></i>Order Now
    </a>
    <br><br>
</div>
            <div class="col-md-4 border-end">
    <div class="image-carousel d-flex align-items-center mb-3 " style="width:23rem;">
        <button id="prevBtn2" class="arrow-btn">&#10094;</button>
        <img id="coffeeimg" class="img-fluid" src="./images/split1.jpg"  style="width:23rem; height:18.5rem;" >
        <button id="nextBtn2" class="arrow-btn">&#10095;</button>
    </div>

    <h3 class="text-light mt-4" style="font-family: 'Poiret One', cursive;">Split Gloves</h3>
    <span class="fs-4" style="font-family: 'Jost', sans-serif; color: rgb(229, 191, 74);">$24.00</span>
    <br>
    <a href="#" class="btn btn-outline-light mt-3">
        <i class="fa-solid fa-cart-plus me-2"></i>Order Now
    </a>
    <br><br>
</div>

    <!-- JavaScript for Carousel -->
<script>
    const imageList = [
        '../images/motor2.jpg',
        '../images/motor3.jpg',
        '../images/motor1.jpg'
    ];

    let currentIndex = 0;
    const productImage = document.getElementById('cakeimg');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % imageList.length;
        productImage.src = imageList[currentIndex];
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + imageList.length) % imageList.length;
        productImage.src = imageList[currentIndex];
    });
    const imageList1 = [
        '../images/mech2.jpg',
        '../images/mech3.jpg',
        '../images/mech1.jpg'
    ];

    let currentIndex1 = 0;
    const productImage1 = document.getElementById('pasteryimg');
    const prevBtn1 = document.getElementById('prevBtn1');
    const nextBtn1 = document.getElementById('nextBtn1');

    nextBtn1.addEventListener('click', () => {
        currentIndex1 = (currentIndex1 + 1) % imageList1.length;
        productImage1.src = imageList1[currentIndex1];
    });

    prevBtn1.addEventListener('click', () => {
        currentIndex1 = (currentIndex1 - 1 + imageList1.length) % imageList1.length;
        productImage1.src = imageList1[currentIndex1];
    });
    const imageList2 = [
        '../images/split2.jpg',
        '../images/split3.jpg',
        '../images/split1.jpg'
    ];

    let currentIndex2 = 0;
    const productImage2 = document.getElementById('coffeeimg');
    const prevBtn2 = document.getElementById('prevBtn2');
    const nextBtn2 = document.getElementById('nextBtn2');

    nextBtn2.addEventListener('click', () => {
        currentIndex2 = (currentIndex2 + 1) % imageList2.length;
        productImage2.src = imageList2[currentIndex2];
    });

    prevBtn2.addEventListener('click', () => {
        currentIndex2 = (currentIndex2 - 1 + imageList2.length) % imageList2.length;
        productImage2.src = imageList2[currentIndex2];
    });
</script>
</body>
</html>