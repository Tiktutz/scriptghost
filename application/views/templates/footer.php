<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="assets/owncarousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<!--<script src="assets/owncarousel/dist/jquer.js" type="text/javascript"></script>-->

<!-- FOOTER -->
<footer class="container home">
    <p class="float-right" style="color: #9D07AF;"><a href="#">
            <img src="assets/img/24-face.png" /></a>&nbsp;&nbsp;<a href="#"><img src="assets/img/24-instagram.png" /></a>&nbsp;&nbsp;<a href="#"><img src="assets/img/24-whats.png" /></a>&nbsp;&nbsp;<a href="#"><img src="assets/img/24-you.png" /></a></p>
    <p style="color: #9D07AF;">&copy; Companhia Tik-Tutz &middot 2019 <!--<a href="#">Privacidade</a> &middot; <a href="#">Termos</a>--></p>
</footer>

<script>
    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        var menu = false;
        var search = false;
        
        $('#sidebarCollapse').on('click', function () {
            $('.menu').toggleClass('activate');
            
            $('.home').toggleClass('d-none');

            if (menu == true) {
                $('#menu-sm-btn').click();
            }

            if (search == true) {
                $('#search-sm-btn').click();
            }

        });
        
//        $('.arrow__btn').on('click', function () {
//         
//        });

//        $('#sidebarCollapse').on('click', function () {
//            $('#sidebar').toggleClass('active');
//
//            if (menu == true) {
//                $('#menu-sm-btn').click();
//            }
//
//            if (search == true) {
//                $('#search-sm-btn').click();
//            }
//
//        });

        $('#btn-close-sidebar').on('click', function () {
            $('.menu').removeClass('activate');
            $('.home').removeClass('d-none');

        });

        $('#collapse_menu').on('show.bs.collapse', function () {
            menu = true;

            $('#menu-sm').show();
            $('.menu').removeClass('activate');
            $('.home').removeClass('d-none');

            if (search == true) {
                $('#search-sm-btn').click();
            }

        });

        $('#collapse_menu').on('hide.bs.collapse', function () {
            menu = false;
        });


        $('#collapse_search').on('show.bs.collapse', function () {
            search = true;

            $('#search-sm').show();
            $('.menu').removeClass('activate');
            $('.home').removeClass('d-none');

            if (menu == true) {
                $('#menu-sm-btn').click();
            }

        });

        $('#collapse_search').on('hide.bs.collapse', function () {
            search = false;
        });

    });

</script>

</body>
</html>