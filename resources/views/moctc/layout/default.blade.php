<!DOCTYPE html>
<html lang="en">
<head>
    @include('moctc.includes.head')
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top text-center">
      @include('moctc.includes.headsection') 
       {{-- headsection --}}
    </nav>
    <section class="topbar-content">
        @include('moctc.includes.topbar')   
        {{-- topbar --}}
    </section>


    <section class="carousel slide" id="carousel" data-ride="carousel" data-interval="5000">
        @include('moctc.includes.recentposts') 
          {{-- recentposts --}}
           </section>

    <!-- x --------------------------------------------------------------------------------->

    <section class="main-content mb-5">
       <div class="container">

            <div class="row">
              @yield('content')  
              {{-- (for Post) --}}
               <div class="col-lg-4 d-none d-lg-block">
                    <!-- Start Right Content (Sidebar Post) -->

                    <aside class="sidebar">

                        <div class="category-list">
                            <!-- ---------- Sidebar Category List ---------- -->
                            <h2 class="font-weight-bold text-gray mb-3">Category</h2>
                            <a href="#">Technology<span>(86)</span></a>
                            <a href="#">Lifestyle<span>(90)</span></a>
                            <a href="#">Software<span>(65)</span></a>
                            <a href="#">Photography<span>(93)</span></a>
                            <a href="#">Shopping<span>(48)</span></a>
                            <a href="#">Travelling<span>(99)</span></a>
                        </div>

                        <div class="popular-post my-5">
                            <!-- ------------- Sidebar Popular Post ----------- -->
                            <h2 class="font-weight-bold text-gray my-3">Popular Post</h2>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/shopping-1.jpg" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">What is Tax Free Shopping? </a></h5>
                            </article>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/software-2.png" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;889 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">Custom Software v/s Utility Software!</a></h5>
                            </article>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/illustration-1.jpg" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">10 top illustration trends for 2021</a></h5>
                            </article>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/photography-1.jpg" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">10 Ways to Respect a Photographer </a></h5>
                            </article>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/web-design-1.png" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">Web Design Trends You’ll Notice In 2021</a></h5>
                            </article>

                            <article class="my-5">
                                <!-- ------------------ Sidebar Article ----------------- -->
                                <figure>
                                    <img src="moctc/img/lifestyle-1.jpg" alt="" class="w-100" />
                                    <figcaption>
                                        <span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
                                        <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
                                    </figcaption>
                                </figure>
                                <h5><a href="#">The vital pillars for a healthy lifestyle</a></h5>
                            </article>

                        </div>
                        <!-- x ------------ End Sidebar Popular Post (Sidebar Article) -------------- x -->

                        <div class="popular-tags">
                            <!-- ---- Start Sidebar Popular Tag Section ----- -->
                            <h2 class="font-weight-bold text-gray mb-3">Popular Tags</h2>
                            <a href="">illustration</a>
                            <a href="">Lifestyle</a>
                            <a href="">Photography</a>
                            <a href="">Travel</a>
                            <a href="">Design</a>
                            <a href="">Web Development</a>
                            <a href="">Love</a>
                            <a href="">Movie</a>
                            <a href="">Shopping</a>
                        </div>
                        <!-- ---------- End Sidebar Popular Tag Section ------------ -->

                    </aside>

                </div>
                <!-- x ---------------- Start Right Content (Sidebar Post) ------------------ x -->

            </div>
            <!-- x --------------- End Blog Post/Main Post Row ----------------- x -->

        </div>
        <!-- x --- End Main Post Section Container DIV ----- x -->
    </section>
    <!-- x ------------------- End Blog Post/Main Post Content Section -------------------- x -->


    <footer class="footer py-4 text-light" id="footer">
        <!-- ------------ Start Footer -------------- -->
        <div class="container">
            <div class="row">
                <!-- Start Footer Row --->

                <div class="col-12 col-md-6 col-lg-3">
                    <!-- -------- Start Footer About Section ----------- -->
                    <h3 class="mb-3">About us</h3>
                    <p>Lorem Ipsum has been the industry's dummy text ever since the 1500s</p>
                    <p><i class="fa fa-location-arrow"></i> 254/28, Sec 2, Dhaka 1230 </p>
                    <p><i class="fa fa fa-envelope"></i>&nbsp; webdevraju@gmail.com </p>
                    <a href="tel: +8801953336101" class="phone"><i class="fa fa-phone"></i>&nbsp; <!-- My Phone Number -->(+880) 1953336101 </a>
                </div>
                <!-- x ----------- End Footer About Section -------------- x -->

                <div class="col-12 col-md-6 mt-4 mt-lg-0 col-lg-3">
                    <!-- Start Footer Newsletter Section -->
                    <h3 class="mb-3">Newsletter</h3>
                    <p>Lorem ipsum dolor sit amit consectetur, consectetur adipiscing elit.</p>
                    <form action="#">
                        <div class="form-row">
                            <div class="col-12 footer-form">
                                <input type="email" class="form-control w-100" placeholder="Email Address">
                                <button type="submit">
									<i class="fa fa-send"></i>
								</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- x -------------- End Footer Newsletter Section ----------- x -->

                <div class="quick-link col-12 col-md-6 mt-4 mt-lg-0 col-lg-3">
                    <!-- Start Footer Quick Link Section -->
                    <h3 class="mb-3">Quick links</h3>
                    <ul>
                        <li><a href="">Hollow Man Montage</a></li>
                        <li><a href="">Image Cropping</a></li>
                        <li><a href="">Image Rectoucing</a></li>
                        <li><a href="">Web Design</a></li>
                    </ul>
                </div>
                <!-- x ------------------- End Footer Quick Link Section --------------- x -->

                <div class="legal-info col-12 col-md-6 mt-4 mt-lg-0 col-lg-3">
                    <!-- Start Footer Lagal Info Section -->
                    <h3 class="mb-3">Legal Info</h3>
                    <ul>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Cookies Policy</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- x --------------------------- End Footer Quick Link Section -------- x -->
            </div>
            <!-- x ---------------- End Footer Row ------------------------ x -->

            <hr style="border-color: #323F45" />

            <!-- ------------------------- Start Footer Bottom Content  --------------------- -->

            <p class="text-center justify-content-center" id="footer-navigation">
                <!-- Footer Navigation Link -->
                <a href="#">Home</a> |
                <a href="#">About</a> |
                <a href="#">Category</a> |
                <a href="#">Archive</a> |
                <a href="#">Blog</a> |
                <a href="#">Contact us</a>
            </p>
            <!-- x ------------------- End Footer Navigation Link ------------- x -->

            <p class="text-center">Copyright &copy;2021 | Designed With &#x1F49A; by- <a href="https://facebook.com/webdevraju/" class="text-light">Raju Ahmed</a></p>

            <ul class="footer-social nav d-flex align-items-center justify-content-center">
                <!-- Footer Social Link -->
                <li class="nav-item"><a href="http://facebook.com/webdevrajuofficial" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="nav-item"><a href="http://twitter.com/webdevraju" class="nav-link"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a href="http://linkedin.com/in/webdevraju" class="nav-link"><i class="fab fa-linkedin"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-instagram"></i></a></li>
            </ul>

        </div>
        <!-- End Footer Container DIV -->
    </footer>
    <!-- x ---------------------- End Footer Section -------------------------- x -->


    <!-- jQuery Library  -->
    <!-- ------------------------- Start Script Files ----------------- -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Proper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrap Minified JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Font Awesome Script Link -->
    <script src="https://kit.fontawesome.com/ef16f745ed.js" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script>
        // Navigation (Navbar) Sticky Script

        $(document).ready(function() {
            $(window).scroll(function() {
                if (this.scrollY > 20) {
                    $('.navbar').addClass("sticky");
                } else {
                    $('.navbar').removeClass("sticky");
                }
            })
        });
    </script>

    <!-- x --------------------------- End Script Files -------------------------- x -->
</body>

</html>