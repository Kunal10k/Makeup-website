<footer class="site-footer">

    <div class="footer-top">
        <div class="container footer-grid">

            <!-- LEFT MENU -->
            <div class="footer-links">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                </ul>

                <ul>
                    <li><a href="#">PORTFOLIOS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>


            <!-- CENTER SOCIAL -->
            <div class="footer-center">

                <div class="footer_logo text-center d-flex justify-content-center">
                    <img src="assets/img/logo-wehite.png" alt="" width="250">
                </div>

                <div class="footer-social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>

                <p class="availability">
                    BASED IN SOMERSET AVAILABLE <br>
                    ACROSS THE UK & INTERNATIONALLY
                </p>

            </div>


            <!-- RIGHT EMAIL -->
            <div class="footer-email">

                <p>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:nikkisartistry.official@gmail.com">
                        nikkisartistry.official@gmail.com
                    </a>
                </p>

                <p>
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:9051663407">
                        +91 9051663407
                    </a>
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    24 Bridal Studio Street,<br>
                    Somerset, United Kingdom
                </p>

            </div>

        </div>


        <!-- POLICY LINKS -->
        <div class="footer-policy">
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Cookie Policy</a>
        </div>

        <div class="footer-bottom">
            Designed by <span>Esspesoft</span>
        </div>

    </div>


    <!-- BOTTOM STRIP -->


</footer>




<div class="modal fade" id="bookingModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Book Your Free Call</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Enter phone number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <textarea placeholder="Your message" rows="4" required="" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Submit Booking
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>





<!-- jQuery -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>


<script src="https://unpkg.com/split-type"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="assets/js/main.js"></script>


<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".home_abt_img", {
        scrollTrigger: {
            trigger: ".home_abt_img",
            start: "top 85%",
            toggleActions: "play none none none"
        },

        opacity: 0,
        y: 120,
        scale: 0.9,
        duration: 1.2,
        ease: "power3.out"
    });
</script>




</body>

</html>