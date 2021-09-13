<?php
/*
* The main template file
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d276a35b25.js" crossorigin="anonymous"></script>    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <title>Tranquil Spa</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand">Tranquil Spa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>                  
                </ul>
            </div>
        </nav>

        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img src="images/backgroundwood.jpg" alt="postresito" class="img-size header_img">
                <div class="position-absolute d-flex justify-content-center  feature-bg  bg-imga">
                    <p class="feature-text">FULL RESPONSIVE <br> PREMIUM SPA THEME <br> FOR WORDPRESS  </p>
                </div>
            </div>
        </section>
    </header>
    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Welcome to tranquil Spa</h3>
                <img src="images/divider-1.png" alt="" class="w-25">
            </div>
        </div>

        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-3">
                <img src="images/postre6.jpg" alt="Postre 6" class="card-img-top rounded-circle img-c">
                <div class="card-body">
                    <p class="card-text">Hair &amp Make up</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="images/postre4.jpg" alt="Postre 4" class="card-img-top rounded-circle img-c">
                <div class="card-body">
                    <p class="card-text">Hair &amp Make up</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="images/postre5.jpg" alt="Postre 5" class="card-img-top rounded-circle img-c">
                <div class="card-body">
                    <p class="card-text">Hair &amp Make up</p>
                </div>
            </div>            
        </div>
    </div> <!--Row-->
    <div class="container-fluid text-center bg-dark py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Spa Offers</h3>
                <img src="images/anotherDivider.webp" alt="" class="pb-4 w-25">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Family Swim package <span class="font-weight-bold">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great value for families or groups up to</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 People</li>
                        <li class="list-group-item font-italic">Private Session</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                    
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Family Swim package <span class="font-weight-bold">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great value for families or groups up to</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 People</li>
                        <li class="list-group-item font-italic">Private Session</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Family Swim package <span class="font-weight-bold">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great value for families or groups up to</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 People</li>
                        <li class="list-group-item font-italic">Private Session</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div> <!--Container -->
    

    <!--ABOUT US SECTION-->
     <div class="container-fluid py-5 text-center bg-light">
         <div class="row">
             <div class="col-sm-6 offset-sm-3">
                 <h3>About Us</h3>
                 <img src="images/divider-1.png" alt="" class="w-25">
             </div>
         </div>
         <div class="row mt-2">
             <div class="col">
                 <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quod iusto. Doloremque ullam vero laudantium quos dolores ut magni culpa repudiandae! Voluptas numquam harum ipsa accusantium accusamus officia, deleniti velit!</p>
             </div>
         </div>
     </div>

     <!-- PRICE LIST SECTION-->
     <div class="container-fluid py-5 bg-dark">
         <div class="row">
             <div class="col-md-6 offset-md-3 text-center">
                 <h3 class="text-light">Price List</h3>
                 <img src="images/anotherDivider.webp" alt="divider" class="pb-4 w-25">
             </div>
         </div>
         <div class="row my-4">
            <div class="col-sm-8">
                 <img src="images/postre6.jpg" alt="message picture" class="pb-4 w-50">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center text-light">Postre</h4>
                <ul class="list-group  text-light">
                    <li class="list-group-item">Facial 1 <em>-$10</em></li>
                    <li class="list-group-item">Facial 2 <em>-$10</em></li>
                    <li class="list-group-item">Facial 3 <em>-$10</em></li>
                    <li class="list-group-item">Facial 4 <em>-$10</em></li>
                    <li class="list-group-item">Facial 5 <em>-$10</em></li>
                </ul>
            </div>
         </div>   
         <div class="row my-4">
            <div class="col-sm-4"> 
               <h4 class="title text-center text-light">Postre</h4>
               <ul class="list-group  text-light">
                   <li class="list-group-item">Massage 1 <em>-$10</em></li>
                   <li class="list-group-item">Massage 2 <em>-$10</em></li>
                   <li class="list-group-item">Massage 3 <em>-$10</em></li>
                   <li class="list-group-item">Massage 4 <em>-$10</em></li>
                   <li class="list-group-item">Massage 5 <em>-$10</em></li>
               </ul>           
            </div>
            <div class="col-sm-8">
               <img src="images/postre5.jpg" alt="message picture" class="pb-4 w-50">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-8">
                 <img src="images/postre4.jpg" alt="message picture" class="pb-4 w-50">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center text-light">Postre</h4>
                <ul class="list-group text-light">
                    <li class="list-group-item">Facial 1 <em>-$10</em></li>
                    <li class="list-group-item">Facial 2 <em>-$10</em></li>
                    <li class="list-group-item">Facial 3 <em>-$10</em></li>
                    <li class="list-group-item">Facial 4 <em>-$10</em></li>
                    <li class="list-group-item">Facial 5 <em>-$10</em></li>
                </ul>
            </div>
         </div>   
        
              
     </div> <!--Container-->

     <!-- FOOTER SECTION-->
     <footer class="container-fluid py-5">
         <div class="row">
             <div class="col-sm-4">
                 <h5>Stay Connected.</h5>
                 <form action="">
                     <div class="form-row form-group">
                         <div class="col-md-8">
                             <input type="email" name="" id="" class="form-control" placeholder="Email Address">                             
                         </div>
                         <div class="col-md-4">
                             <button class="btn btn-primary">Sign up
                                 <i class="fas fa-angle-double-right"></i>
                             </button>
                         </div>                         
                     </div>
                 </form>
                 <!--Social Media icons-->
                 <i class="fab fa-facebook-square fa-2x"></i>
                 <i class="fab fa-twitter-square fa-2x"></i>
                 <i class="fab fa-instagram fa-2x"></i>
                 <i class="fab fa-pinterest-square fa-2x"></i>
             </div>
             <div class="col-sm-4">
                 <h5>Out Setting:</h5>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem molestiae pariatur repellendus eveniet nam mollitia ipsa beatae! Facilis, nisi. Repellendus voluptas neque quas quaerat odio! Soluta ipsum itaque tenetur delectus!</p>
             </div>
             <div class="col-sm-4">
                 <h5>Navigation</h5>
                 <ul class="list-group">
                     <li class="list-group-item">
                         <a href="blog.html">Blog</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Contact.html">Contact Us</a>
                   </li>
                   <li class="list-group-item">
                    <a href="privacy.html">Privacy Policy</a>
               </li>
                 </ul>
             </div>
         </div>
     </footer>

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>