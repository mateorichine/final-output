<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      
      <div id="banner" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark">
                    <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, culpa?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deserunt quod iure praesentium maxime quae assumenda sed? Ipsa, possimus blanditiis.</p>
                    <a href="" class="btn btn-brand">Please click here!</a>
                </div>
            </div>
        </div>

      </div>

      <?php
      include 'about.php';
      ?>


      <?php
      include 'front_services.php';
      ?>

       <!-- SERVICES -->
      <section id="services">
        <div class="container">
          <div class="text-center">
            <h2>SERVICES</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam incidunt dolor aperiam mollitia eius dolorem.</p>
          </div>
          <div class="row">
          <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <div class="card text-center p-3"style  ="width: 22rem;">
              <img src="3500673.png" class="card-img-top bisag-unsa mx-auto" alt="...">
              <div class="card-body">
                <h5 class="card-title">fantasy house</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                <a href="#" class="btn btn-brand">Go somewhere</a>
              </div>
            </div>
           </div>
           <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <div class="card text-center p-3"style  ="width: 22rem;">
              <img src="book.png" class="card-img-top bisag-unsa mx-auto" alt="...">
              <div class="card-body">
                <h5 class="card-title">Book of life</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn btn-brand">Go somewhere</a>
              </div>
            </div>
           </div>
           <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <div class="card text-center p-3"style  ="width: 22rem;">
              <img src="3426097.png" class="card-img-top bisag-unsa mx-auto" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gem of everything</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium.</p>
                <a href="#" class="btn btn-brand">Go somewhere</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </section>
      
      <div id="cta" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark">
                    <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, culpa?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deserunt quod iure praesentium maxime quae assumenda sed? Ipsa, possimus blanditiis.</p>
                    <a href="" class="btn btn-brand">Please click here!</a>
                </div>
            </div>
        </div>

      
      </div>
      <section id="reviews">
        <div class="container">
          <div class="text-center">
            <h2>Reviews</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          </div>

<div class="row">
  <div class="col">
   <div class="testimonials">

    <div class="d-flex">
      <img src="vibrant fantasy forest.jpg" alt="">
      <div class="ms-3">
        <h3>Clientname</h3>
        <a href="">@client</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      </div>
    </div>
  </div>
</div>
<div class="col">
  <div class="testimonials">

   <div class="d-flex">
     <img src="vibrant fantasy forest.jpg" alt="">
     <div class="ms-3">
       <h3>Clientname</h3>
       <a href="">@client</a>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
     </div>
     </div>
     </div>
     </div>
     <div class="col">
      <div class="testimonials">
    
       <div class="d-flex">
         <img src="vibrant fantasy forest.jpg" alt="">
         <div class="ms-3">
           <h3>Clientname</h3>
           <a href="">@client</a>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
         </div>
         </div>
         </div>
         </div>
         <div class="col">
          <div class="testimonials">
        
           <div class="d-flex">
             <img src="vibrant fantasy forest.jpg" alt="">
             <div class="ms-3">
               <h3>Clientname</h3>
               <a href="">@client</a>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
             </div>
             </div>
             </div>
             </div>
             <div class="col">
              <div class="testimonials">
            
               <div class="d-flex">
                 <img src="vibrant fantasy forest.jpg" alt="">
                 <div class="ms-3">
                   <h3>Clientname</h3>
                   <a href="">@client</a>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                 </div>
                 </div>
                 </div>
                 </div>
                 <div class="col">
                  <div class="testimonials">
                
                   <div class="d-flex">
                     <img src="vibrant fantasy forest.jpg" alt="">
                     <div class="ms-3">
                       <h3>Clientname</h3>
                       <a href="">@client</a>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                     </div>
                     </div>
                     </div>
                     </div>

                     <!-- CALL TO ACTION -->
    <div id="cta" class="d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-light">
                  <h1>Lorem, ipsum dolor sit amet consectetur adipisicing.</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolorem laudantium excepturi non!
                      Consectetur similique, reprehenderit alias id non esse.</p>
                  <a href="#about" class="btn btn-brand">Please Click Here!</a>
              </div>
          </div>
      </div>
  </div>

  <?php
  include 'reviews.php';
  ?>
  
<!--FAQS-->
     </section>
     <section id="faq">
      <div class="container">
        <div class="faq-section">
          <div class="text-center">
            <h2>Frequently Asked Question</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>



</body>

</html>