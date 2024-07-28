<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/product.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

</head>
<body>
    <header>
       @include('header')
    </header>
    <div class="product">
        <h2>Our Product</h2>
        <div class="productInfo">
           <div class="productCard">
              <img src="../image/product1.jpeg"/>
              <h3>Price:50/-</h3>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
           </div>
           <div class="productCard">
              <img src="../image/product2.jpeg"/>
              <h3>Price:75/-</h3>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
              </div>
           </div>
           <div class="productCard">
              <img src="../image/product3.jpeg"/>
              <h3>Price:90/-</h3>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
           </div>
        </div>
    </div>
</body>
</html>