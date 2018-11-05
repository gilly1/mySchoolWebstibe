<!--footer-->
<div>
    <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a href="{{ url('/') }}"> <img class="img-responsive" src="{{asset('images/logo.jpg')}}" alt="" width="170" height="100"> </a></div>
                    </div>
                    <div class="col-md-3">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/about/news') }}">News and Events</a></li>
                            <li><a href="{{ url('/academics') }}">Academics</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Openning Hours</h5>
                        <ul>
                            <li><a href="#"> Mon-Fri 8:30 am to 5:00 pm </a> </li>
                            <li><a href="#"> Saturday 9:30 am to 1:00 pm </a> </li>
                            <li><a href="#"> Sunday Closed </a></li>
                            <li><a href="{{ route('login') }}">Admin Login</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <button type="button" class="btn btn-default">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>Designed by <a href="https://www.fb.com" target="blank">gilly</a> © <?php echo date("Y") ?> Copyright </p>
            </div>
        </footer>
</div>



<script src="{{asset('js/app.js')}}"></script>

<script src="{{asset('js/nav.js')}}"></script>

<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

<!-- countTo -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>
<!-- ImageSlider -->
<script src="{{asset('js/imageSlider.js')}}"></script>
