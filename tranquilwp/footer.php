<?php 
/*
* The template for displaying the footer
*/?>
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
<?php wp_footer();?>
</body>

</html>