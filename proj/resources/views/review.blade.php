<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/review.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
</head>
<body>
    <header>
       @include('header')
    </header>
       <div class="review">
         <h2>Reviewers</h2>
         <div class="reviewInfo">
            <div class="reviewCard">
               <img src="../image/review1.jpg"/>
               <h3>Name:-Paul Smith</h3>
               <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="reviewCard">
               <img src="../image/review2.jpg"/>
               <h3>Name:-John Cena</h3>
               <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="reviewCard">
               <img src="../image/review3.jpg"/>
               <h3>Name:-Dwarne Johnson</h3>
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