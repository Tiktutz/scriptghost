<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    <img src="assets/img/tik1.png" height="25px"/>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    SOCIAL
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    CORPORATIVO
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    EMPRESARIAL
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    ESPIRITUAL
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    COMUNITÁRIO
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    ACADÊMICO
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    CULTURAL
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    ENTRETENIMENTO
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    ESPORTIVO
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    POLÍTICO
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    EDUCACIONAL
                </a>
            </li>
        </ul><br>
<!--        <div class="copyright mt-5">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script> Tiktutz construido com o template
            <a href="javascript:void(0)" target="_blank">Creative Tim</a>.
        </div>
    </div>-->
</footer>
</div>
</div>
<!--  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>-->

<!-- Link scripts do Black Dashboard by Creative Tim - Cley Anjos -->
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>

<!--     Links dos scrips OwnCarousel2 - Cley Anjos     -->

<script src="assets/js/owl.carousel.min.js"></script>

<script type="text/javascript"></script>
<script>
                $(document).ready(function () {



                    $().ready(function () {



                        $sidebar = $('.sidebar');
                        $navbar = $('.navbar');
                        $main_panel = $('.main-panel');

                        $full_page = $('.full-page');

                        $sidebar_responsive = $('body > .navbar-collapse');
                        sidebar_mini_active = true;
                        white_color = false;

                        window_width = $(window).width();

                        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                        $('.fixed-plugin a').click(function (event) {
                            if ($(this).hasClass('switch-trigger')) {
                                if (event.stopPropagation) {
                                    event.stopPropagation();
                                } else if (window.event) {
                                    window.event.cancelBubble = true;
                                }
                            }
                        });

                        $('.fixed-plugin .background-color span').click(function () {
                            $(this).siblings().removeClass('active');
                            $(this).addClass('active');

                            var new_color = $(this).data('color');

                            if ($sidebar.length != 0) {
                                $sidebar.attr('data', new_color);
                            }

                            if ($main_panel.length != 0) {
                                $main_panel.attr('data', new_color);
                            }

                            if ($full_page.length != 0) {
                                $full_page.attr('filter-color', new_color);
                            }

                            if ($sidebar_responsive.length != 0) {
                                $sidebar_responsive.attr('data', new_color);
                            }
                        });

                        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                            var $btn = $(this);

                            if (sidebar_mini_active == true) {
                                $('body').removeClass('sidebar-mini');
                                sidebar_mini_active = false;
                                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                            } else {
                                $('body').addClass('sidebar-mini');
                                sidebar_mini_active = true;
                                blackDashboard.showSidebarMessage('Sidebar mini activated...');
                            }

                            // we simulate the window Resize so the charts will get updated in realtime.
                            var simulateWindowResize = setInterval(function () {
                                window.dispatchEvent(new Event('resize'));
                            }, 180);

                            // we stop the simulation of Window Resize after the animations are completed
                            setTimeout(function () {
                                clearInterval(simulateWindowResize);
                            }, 1000);
                        });

                        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
                            var $btn = $(this);

                            if (white_color == true) {

                                $('body').addClass('change-background');
                                setTimeout(function () {
                                    $('body').removeClass('change-background');
                                    $('body').removeClass('white-content');
                                }, 900);
                                white_color = false;
                            } else {

                                $('body').addClass('change-background');
                                setTimeout(function () {
                                    $('body').removeClass('change-background');
                                    $('body').addClass('white-content');
                                }, 900);

                                white_color = true;
                            }


                        });

                        $('.light-badge').click(function () {
                            $('body').addClass('white-content');
                        });

                        $('.dark-badge').click(function () {
                            $('body').removeClass('white-content');
                        });
                    });
                });
</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
<script>
    $(document).ready(function () {
        $("#top-5").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            touch: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            navText: ['<div id="navSlidePrev" class="position-absolute" style="top:30%;"><i class="tim-icons icon-minimal-left" style="font-size: 100px;color:#fff;"></i></div>', '<div id="navSlideProx" class="position-absolute" style="top:30%; right:0%;"><i class="tim-icons icon-minimal-right" style="font-size: 100px; color:#fff;"></i></div>']



        });

        $("#top-destaques").owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            touch: true,
            nav: true,
            dots: true,
            navText: ['<div id="navSlidePrev" class="bg-primary position-absolute rounded-circle" style="top:30%; padding: 10px;"><i class="tim-icons icon-minimal-left" style="font-size: 30px;color:#fff;"></i></div>', '<div id="navSlideProx" class="bg-primary rounded-circle position-absolute" style="top:30%; right:0%; padding:10px;"><i class="tim-icons icon-minimal-right" style="font-size: 30px; color:#fff;"></i></div>']

        });

        $("#top-free").owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            touch: true,
            nav: true,
            dots: true,
            navText: ['<div id="navSlidePrev" class="bg-primary position-absolute rounded-circle" style="top:30%; padding: 10px;"><i class="tim-icons icon-minimal-left" style="font-size: 30px;color:#fff;"></i></div>', '<div id="navSlideProx" class="bg-primary rounded-circle position-absolute" style="top:30%; right:0%; padding:10px;"><i class="tim-icons icon-minimal-right" style="font-size: 30px; color:#fff;"></i></div>']

        });

        $("#top-lanc").owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            touch: true,
            nav: true,
            dots: true,
            navText: ['<div id="navSlidePrev" class="bg-primary position-absolute rounded-circle" style="top:30%; padding: 10px;"><i class="tim-icons icon-minimal-left" style="font-size: 30px;color:#fff;"></i></div>', '<div id="navSlideProx" class="bg-primary rounded-circle position-absolute" style="top:30%; right:0%; padding:10px;"><i class="tim-icons icon-minimal-right" style="font-size: 30px; color:#fff;"></i></div>']

        });

        $("#top-pre").owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            touch: true,
            nav: true,
            dots: true,
            navText: ['<div id="navSlidePrev" class="bg-primary position-absolute rounded-circle" style="top:30%; padding: 10px;"><i class="tim-icons icon-minimal-left" style="font-size: 30px;color:#fff;"></i></div>', '<div id="navSlideProx" class="bg-primary rounded-circle position-absolute" style="top:30%; right:0%; padding:10px;"><i class="tim-icons icon-minimal-right" style="font-size: 30px; color:#fff;"></i></div>']

        });

    });
</script>

<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free"
            });
</script>
</body>

</html>
