<!--Footer-->
<div class="largebanner shadow3">
<div class="adin">
{!! $siteSetting->above_footer_ad !!}
</div>
<div class="clearfix"></div>
</div>

<style>
    #go-top-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

#go-top-btn i {
  font-size: 20px;
}

</style>
<div class="footerWrap"> 
    <div class="container">
        <div class="row"> 

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>{{__('Quick Links')}}</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>
                    <li><a href="https://www.doledge.com/register">Register Now</a></li>
                     <li><a href="http://doledge.com/cms/about-us">About Us</a></li>
                     <li><a href="https://doledge.com/contact-us">Contact Us</a></li>
                     <li><a href="https://www.doledge.com/cms/disclaimer">{{__('Disclaimer')}}</a></li>
                    <li><a href="https://www.doledge.com/cms/terms-of-use">{{__('Terms & Confitions')}}</a></li>
                     <li><a href="https://www.doledge.com/cms/privacy-policy">{{__('Privacy Policy')}}</a></li>
                    <li><a href="https://www.doledge.com/cms/refund-and-cancellation-policy">Refund and Cancellation Policy</a></li>
                     <li><a href="https://www.doledge.com/cms/fraud-alert">Fraud Alert</a></li>
                   
                    

                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobseeker Services</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="https://doledgeindia.com/">Home</a></li>
                    <li><a href="https://doledgeindia.com/register/">Register</a></li>
                    <li><a href="https://doledgeindia.com/zap-your-resume-2/">Zap Your Resume</a></li>
                    <li><a href="https://doledgeindia.com/highlight-your-resume-2/">Highlight Your Resume</a></li>
                    <li><a href="https://doledgeindia.com/job-search-assistant-3-months/">Job Search Assistant-3 Months</a></li>
                    <li><a href="https://doledgeindia.com/job-search-assistant-6-months/">Job Search Assistant-6 Months</a></li>
                    <li><a href="https://doledgeindia.com/social-profiler/">Social Profiler</a></li>
                    <li><a href="https://doledgeindia.com/profile-update-2/">Profile Update</a></li>
                    <li><a href="https://doledgeindia.com/professional-website-entry/">Personal Portfolio</a></li>
                    <li><a href="https://doledgeindia.com/interview-preparation-2/">Interview Preparation</a></li>
                </ul>
            </div>

            <!--Jobs By Industry-->
            <div class="col-md-3 col-sm-6">
                <h5>{{__('Jobs By Cities')}}</h5>
                <!--Industry menu Start-->
                <ul class="quicklinks">
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=707">New Delhi</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=4460">Hyderabad</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=1126">Gurgaon</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=783">Ahmedabad</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=3659">Chennai</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=1558">Bangalore</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=4460">Hyderabad</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=594">Chandigarh</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=5022">Noida</a></li>
                    <li><a href="http://doledge.com/jobs?city_id%5B%5D=2707">Mumbai</a></li>
                </ul>
                <!--Industry menu End-->
                <div class="clear"></div>
            </div>

            <!--About Us-->
            <div class="col-md-3 col-sm-12">
                <h5>{{__('Contact Us')}}</h5>
                <div class="address">{{ $siteSetting->site_street_address }}</div>
                <div class="email"> <a href="mailto:{{ $siteSetting->mail_to_address }}">{{ $siteSetting->mail_to_address }}</a> </div>
                <div class="phone"> <a href="tel:{{ $siteSetting->site_phone_primary }}">{{ $siteSetting->site_phone_primary }}</a></div>
                <!-- Social Icons -->
                <div class="social">@include('includes.footer_social')</div>
                <!-- Social Icons end --> 
<button id="go-top-btn"><i class="fas fa-arrow-up"></i></button>

            </div>
            <!--About us End--> 

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script>
    const goTopBtn = document.getElementById("go-top-btn");

goTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

</script>


<!-- Owl Carousel plugin script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $('.testimonialsLists').owlCarousel({
      items: 4,
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
  });
</script>
        </div>
    </div>
</div>
<!--Footer end--> 
<!--Copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}</div>
            </div>
        </div>

    </div>
</div>
