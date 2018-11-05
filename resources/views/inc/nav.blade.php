<div class="containers">

    <!--Start of Top -Small-Menu-->

    <div>
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="top">
                                <div class="row">
                                    <div class="col-md-4 align-self-center">
                                        <a href="{{ url('/') }}"><img class="img-responsive" src="{{asset('images/logo.jpg')}}" alt="" width="200" height="100"></a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="num">
                                            <span class="icon"><i class="fa fa-phone"></i></span>
                                            <p><a href="#">111-222-333</a><br><a href="#">99-222-333</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="loc">
                                            <span class="icon"><i class="fa fa-phone"></i></span>
                                            <p><a href="#">info@myschool.ac.ke </a><br><a href="#">myschool@gmail.com </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<!--End of Top -Small-Menu-->

    <!--Desktop Menu-->

    <div id="desktop-nav">
        <ul class="navi">
            <!----- Full Drop Down Name ----> 
            <li class="dropdowns"><a href="{{ route('about') }}">About</a>     
                <!----- Full Drop Down Name Ends Here ---->     
                                
                <!----- Full Drop Down Contents  Starts Here---->     
                <div class="fulldrop row ">              
                    <div class="col-sm-3">
                        <h3>Our Mission Since 1963</h3>
                        <p>
                            As a world-class, independent Jesuit preparatory school, BC High has formed leaders across every field, and every walk of life, for more than 150 years.
                        </p>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <img src="{{asset('images/image.jpg')}}" class="img-responsive" width="200" height="150" alt="" style="margin-top:15px;padding:4px;width:50%;">
                    </div>
                    
                    <div class="col-sm-5">
                        <div class="row">
                            <ul class="col-md-6">
                                <li><a href="{{ url('/about') }}">Overview</a></li>
                                <li><a href="{{ url('/about/boarding') }}">Boarding</a></li>
                                <li><a href="{{ url('/about/news') }}">News And events</a></li>
                            </ul>
    
                            <ul class="col-md-6">
                                <li><a href="{{ url('/about/parents') }}">Parents</a></li>
                                <li><a href="{{ url('/about/alumni') }}">Alumni</a></li>
                                <li><a href="{{ url('/about/tender') }}">Tenders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>


            <li class="dropdowns"><a href="{{ route('administration') }}">Administration</a>     
                <!----- Full Drop Down Name Ends Here ---->     
                                
                <!----- Full Drop Down Contents  Starts Here---->     
                <div class="fulldrop row">              
                    <div class="col-sm-3">
                        <h3>Administration next plans</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis culpa porro laudantium nisi recusandae facere enim amet a, dolores mollitia sed cum doloribus fugiat eum quia molestias hic iure aliquid.
                        </p>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <img src="{{asset('images/image1.jpg')}}" class="img-responsive" width="200" height="150" alt="" style="margin-top:15px;padding:4px;width:50%;">
                    </div>
                    
                    
                    <div class="col-sm-5">
                        <div class="row">
                            <ul class="col-md-6">
                                <li><a href="{{ url('/administration') }}">Overview</a></li>
                                <li><a href="{{ url('/administration/principal') }}">Principal</a></li>
                                <li><a href="{{ url('/administration/deputy') }}">Deputy Principal</a></li>
                                <li><a href="{{ url('/administration/senior') }}">Senior Teacher</a></li>
                            </ul>
    
                            <ul class="col-md-6">
                                <li><a href="{{ url('/administration/pta') }}">PTA</a></li>
                                <li><a href="{{ url('/administration/baord') }}">Board Of Governors</a></li>
                                <li><a href="{{ url('/administration/teaching') }}">Teaching staff</a></li>
                                <li><a href="{{ url('/administration/nonteaching') }}">Non-Teaching staff</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdowns"><a href="{{ route('academics') }}">Academics</a>     
                <!----- Full Drop Down Name Ends Here ---->     
                                
                <!----- Full Drop Down Contents  Starts Here---->     
                <div class="fulldrop row">              
                    <div class="col-sm-3">
                        <h3>2018 Academic Programs</h3>
                        <p>
                            Summer is an exciting time at BC High! Choose from over 30 summer courses, clinics and specialty programs for girls and boys entering grades 4-11. 
                            <a href="#">{{ url('/') }}</a> summeratbchigh
                        </p>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <img src="{{asset('images/image2.jpg')}}" class="img-responsive" width="200" height="150" alt="" style="margin-top:15px;padding:4px;width:50%;">
                    </div>
                    
                    
                    <div class="col-sm-5">
                        <div class="row">
                            <ul class="col-md-6">
                                <li><a href="{{ url('/academics') }}">Overview</a></li>
                                <li><a href="{{ url('/academics/library') }}">Library</a></li>
                                <li><a href="{{ url('/academics/guidance') }}">Guidance and counselling</a></li>
                                <li><a href="{{ url('/academics/sciences') }}">Sciences</a></li>
                            </ul>
    
                            <ul class="col-md-6">
                                <li><a href="{{ url('/academics/humanities') }}">Humanities</a></li>
                                <li><a href="{{ url('/academics/languages') }}">Languges</a></li>
                                <li><a href="{{ url('/academics/mathematics') }}">Mathematics</a></li>
                                <li><a href="{{ url('/academics/technical') }}">Technical and Creative</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdowns"><a href="{{ route('cocurriculars') }}">Co-Curriculars</a>     
                <!----- Full Drop Down Name Ends Here ---->     
                                
                <!----- Full Drop Down Contents  Starts Here---->     
                <div class="fulldrop row">              
                    <div class="col-sm-3">
                        <h3>Welcome to the world of fun</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorum sunt veniam neque? Quidem temporibus necessitatibus id quam neque placeat, aliquam cum libero delectus magnam debitis dolorem iure accusamus numquam harum illo pariatur laudantium facilis.
                        </p>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <img src="{{asset('images/image3.jpg')}}" class="img-responsive" width="200" height="150" alt="" style="margin-top:15px;padding:4px;width:50%;">
                    </div>
                    
                    
                    <div class="col-sm-5">
                        <div class="row">
                            <ul class="col-md-6">
                                <li><a href="{{ url('/cocurriculars') }}">Overview</a></li>
                                <li><a href="{{ url('/cocurriculars/rugby') }}">Rugby</a></li>
                                <li><a href="{{ url('/cocurriculars/hockey') }}">Hockey</a></li>
                                <li><a href="{{ url('/cocurriculars/football') }}">Football</a></li>
                            </ul>
    
                            <ul class="col-md-6">
                                <li><a href="{{ url('/cocurriculars/volleyball') }}">VolleyBall</a></li>
                                <li><a href="{{ url('/cocurriculars/basketball') }}">BasketBall</a></li>
                                <li><a href="{{ url('/cocurriculars/handball') }}">HandBall</a></li>
                                <li><a href="{{ url('/cocurriculars/indoorgames') }}">Indoor Games</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdowns"><a href="{{ route('faith') }}">Faith And services</a>     
                <!----- Full Drop Down Name Ends Here ---->     
                                
                <!----- Full Drop Down Contents  Starts Here---->     
                <div class="fulldrop row">              
                    <div class="col-sm-3">
                        <h3>Religion comes first</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error eaque ex repudiandae, laudantium saepe veniam ab officia fuga sunt cum minus in distinctio omnis consequuntur eveniet.
                        </p>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <img src="{{asset('images/image4.jpg')}}" class="img-responsive" width="200" height="150" alt="" style="margin-top:15px;padding:4px;width:50%;">
                    </div>
                    
                    
                    <div class="col-sm-5">
                        <div class="row">
                            <ul class="col-md-6">
                                <li><a href="{{ url('/faith') }}">Overview</a></li>
                                <li><a href="{{ url('/faith/SDA') }}">SDA</a></li>
                                <li><a href="{{ url('/faith/CU') }}">C.U</a></li>
                            </ul>
    
                            <ul class="col-md-6">
                                <li><a href="{{ url('/faith/catholics') }}">Catholics</a></li>
                                <li><a href="{{ url('/faith/muslims') }}">Muslims</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
                    
        </ul> 
    </div>

    <!----- Start Of Mobile Menu----> 

    <!-- Main container for mobile-->
		<button id="ml-button" class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
            <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="#">About</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Administration</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Academics</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4" href="#">Co-Curricular</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-5" aria-owns="submenu-5" href="#">Faith &amp; Service</a></li>
                </ul>              

				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="About">
					<li class="menu__item"><a style="display:none;" href="}}"></a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/about') }}">Overview</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/about/boarding') }}">Boarding</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/about/news') }}">News &amp; Events</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/about/parents') }}">Parents</a></li>
                    <li role="menuitem"><a class="menu__link" href="{{ url('/about/alumni') }}">Alumni</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/about/tender') }}">Tenders</a></li>
				</ul>
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Administration">
					<li class="menu__item"><a style="display:none;" href="}}"></a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration') }}">Overview</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/principal') }}">Principal</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/deputy') }}">Deputy Principal</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/senior') }}">Senior Teacher</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/pta') }}">PTA</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/baord') }}">Board of Governors</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/teaching') }}">Teaching staff</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/administration/nonteaching') }}">Non-Teaching staff</a></li>
				</ul>
				<!-- Submenu 3 -->
				<ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Academics">
					<li class="menu__item"><a style="display:none;" href="}}"></a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics') }}">Overview</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/library') }}">Library</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/guidance') }}">Guidance &amp; counceling </a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/sciences') }}">Sciences</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/humanities') }}">Humanities</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/languages') }}">Languges</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/mathematics') }}">Mathematics</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/academics/technical') }}">Technical &amp; Creative</a></li>
                </ul>
				<!-- Submenu 4 -->
				<ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Co-Curriculars">
					<li class="menu__item"><a style="display:none;" href="}}"></a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars') }}">OverView</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/rugby') }}">Rugby</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/hockey') }}">Hockey</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/football') }}">Football</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/volleyball') }}">VolleyBall</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/basketball') }}">BasketBall</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/handball') }}">HandBall</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/cocurriculars/indoorgames') }}">Indoor Games</a></li>
				</ul>
                <!-- Submenu 5 -->
                <ul data-menu="submenu-5" id="submenu-5" class="menu__level" tabindex="-1" role="menu" aria-label="Faith &amp; Service">
					<li class="menu__item"><a style="display:none;" href="}}"></a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/faith') }}">OverView</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/faith/SDA') }}">SDA</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/faith/CU') }}">C.U</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/faith/catholics') }}">Catholics</a></li>
					<li role="menuitem"><a class="menu__link" href="{{ url('/faith/muslims') }}">Muslims</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- End of Mobile Menu -->



    <!----- End of mobile Menu----> 
