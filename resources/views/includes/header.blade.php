<style>

.main-nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.main-nav li {
  display: block;
  position: relative;
}

.main-nav a {
display: block;
    padding: 16px 15px;
    font-weight: 600;
    text-decoration: none;
    color: #7f7f7f;
        border-bottom: 2px solid #fff;
}

.main-nav a:hover {
      border-bottom-color: #ff7f00;
}

.mega-menu {
  position: absolute;
top: 35px;
  left: -600px;
  padding: 20px;
    border-radius: 12px;
  z-index: 999;
  background-color: #fff;
  box-shadow: 0 3px 3px rgba(0,0,0,0.3);
  display: none;
}

.has-mega-menu:hover .mega-menu {
  display: block;
}

.mega-menu-inner {
  display: flex;
  flex-wrap: wrap;
  width: 1200px;
  max-width: 100%;
}
.column {
  width: 25%;
  padding: 10px;
  box-sizing: border-box;
}

.column h3 {
  margin-top: 0;
}

.column ul {
  margin: 0;
  padding: 0;
}

.column li {
  margin-bottom: 10px;
}
@media screen and (max-width: 767px) {
  .main-nav {
    display: block;
  }
  
  .mega-menu {
    position: static;
    box-shadow: none;
  }
  
  .has-mega-menu:hover .mega-menu {
    display: block;
    position: static;
  }
  
  .mega-menu-inner {
    flex-direction: column;
  }
  
  .column {
    width: 100%;
    padding: 10px;
  }
  
  .sub-menu {
    position: static;
    box-shadow: none;
  }
  
  .has-sub-menu:hover .sub-menu {
    display: block;
    position: static;
  }
}

</style>
<div class="header" id="myHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12"> <a href="{{url('/')}}" class="logo"><img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="{{ $siteSetting->site_name }}" width="150px" /></a>
                <div class="navbar-header navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-10 col-md-12 col-12" style="align-self: center;"> 

                <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light">
					
                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ Request::url() == route('index') ? 'active' : '' }}"><a href="{{url('/')}}" class="nav-link">{{__('Home')}}</a> </li>
                          <nav class="main-nav">
  <ul>
    <li class="has-mega-menu">
      <a href="https://doledgeindia.com/" style="padding: 16px 10px;">Services</a>
      <div class="mega-menu">
        <div class="mega-menu-inner">
          <div class="column">
            <h5>Resume Writing</h5>
            <ul>
               <li><a href="https://doledgeindia.com/text-resume-middle-level/" rel="nofollow"   style="padding: 6px 0px!important;">Text Resume-Middle Level</a></li>
               <li><a href="https://doledgeindia.com/text-resume-senior-level/" rel="nofollow"   style="padding: 6px 0px!important;">Text Resume-Senior Level</a></li>
               <li><a href="https://doledgeindia.com/visual-resume-middle-level/" rel="nofollow"  style="padding: 6px 0px!important;">Visual Resume-Middle Level</a></li>
               <li><a href="https://doledgeindia.com/visual-resume-senior-level/" rel="nofollow"  style="padding: 6px 0px!important;">Visual Resume-Senior Level</a></li>
               <li> <a href="https://doledgeindia.com/" rel="nofollow" style="padding: 6px 0px!important;color:#ff7f00">View More</a></li>
            </ul>          </div>
          <div class="column">
            <h5>International Resume</h5>
            <ul>
                                  <li> <a href="https://doledgeindia.com/international-resume-middle-level/" rel="nofollow" style="padding:6px 0px!important;">International Resume-Middle Level</a></li>
                                  <li> <a href="https://doledgeindia.com/international-resume-senior-level/" rel="nofollow" style="padding: 6px 0px!important;">International Resume-Senior Level</a></li>
                                  <li> <a href="https://doledgeindia.com/visual-resume-international-middle-level/" rel="nofollow" style="padding: 6px 0px!important;">Visul Resume International-Middle Level</a></li>
                                  <li> <a href="https://doledgeindia.com/social-profiler/" rel="nofollow" style="padding: 6px 0px!important;">Social Profiler</a></li>
                                  <li> <a href="https://doledgeindia.com/" rel="nofollow" style="padding: 6px 0px!important;color:#ff7f00">View More</a></li>
                                  
            </ul>
          </div>
          <div class="column">
            <h5>Career Growth</h5>
            <ul>
              <li> <a href="https://doledgeindia.com/zap-your-resume-2/" rel="nofollow" style="padding: 6px 0px!important;">Zap Your Resume</a></li>
                                  <li> <a href="https://doledgeindia.com/highlight-your-resume-2/" rel="nofollow" style="padding: 6px 0px!important;">Highlight  Your Resume</a></li>
                                  <li> <a href="https://doledgeindia.com/job-search-assistant-6-months/" rel="nofollow" style="padding: 6px 0px!important;">Job Search Assistant-6 Months</a></li>
                                  <li> <a href="https://doledgeindia.com/professional-website-entry/" rel="nofollow" style="padding: 6px 0px!important;">Personal Portfolio</a></li>
                                  <li> <a href="https://doledgeindia.com/" rel="nofollow" style="padding: 6px 0px!important;color:#ff7f00">View More</a></li>
                                  
            </ul>
          </div>
          <div class="column">
            <h5>Screening Services</h5>
            <ul>
              <li> <a href="https://doledgeindia.com/address-verification-digital/" rel="nofollow" style="padding: 6px 0px!important;">Address Verification (Digital)</a></li>
                                  <li style="margin: 10px 0px;"> <a href="https://doledgeindia.com/previous-employment-verification-2/" rel="nofollow" style="padding: 6px 0px!important;">Previous Employment Verification</a></li>
                                  <li style="margin: 10px 0px;"> <a href="https://doledgeindia.com/current-employment-verification-2/" rel="nofollow" style="padding: 6px 0px!important;">Current Employment Verification</a></li>
                                  <li style="margin: 10px 0px;"> <a href="https://doledgeindia.com/education-verification-2/" rel="nofollow" style="padding: 6px 0px!important;">Education Verification</a></li>
                                  <li> <a href="https://doledgeindia.com/" rel="nofollow" style="padding: 6px 0px!important;color:#ff7f00">View More</a></li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>

                            
							@if(Auth::guard('company')->check())
							<li class="nav-item"><a href="{{url('/job-seekers')}}" class="nav-link">{{__('Seekers')}}</a> </li>
							@else
							<li class="nav-item"><a href="{{url('/jobs')}}" class="nav-link">{{__('Jobs')}}</a> </li>
							@endif

							<li class="nav-item {{ Request::url()}}"><a href="{{url('/companies')}}" class="nav-link">{{__('Companies')}}</a> </li>
                            @foreach($show_in_top_menu as $top_menu) @php $cmsContent = App\CmsContent::getContentBySlug($top_menu->page_slug); @endphp
                            <li class="nav-item {{ Request::url() == route('cms', $top_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $top_menu->page_slug) }}" class="nav-link">{{ $cmsContent->page_title }}</a> </li>
                            @endforeach
							<li class="nav-item {{ Request::url() == route('blogs') ? 'active' : '' }}"><a href="{{ route('blogs') }}" class="nav-link">{{__('Blog')}}</a> </li>
                            <li class="nav-item {{ Request::url() == route('contact.us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}" class="nav-link">{{__('Contact us')}}</a> </li>
                            @if(Auth::check())
                            <li class="nav-item dropdown userbtn"><a href="">{{Auth::user()->printUserImage()}}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                                    <li class="nav-item"><a href="{{ route('my.profile') }}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a> </li>
                                    <li class="nav-item"><a href="{{ route('view.public.profile', Auth::user()->id) }}" class="nav-link"><i class="fa fa-eye" aria-hidden="true"></i> {{__('View Public Profile')}}</a> </li>
                                    <li><a href="{{ route('my.job.applications') }}" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('My Job Applications')}}</a> </li>
                                    <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                                    <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>
                            @endif @if(Auth::guard('company')->check())
                            <li class="nav-item postjob"><a href="{{route('post.job')}}" class="nav-link register">{{__('Post a job')}}</a> </li>
                            <li class="nav-item dropdown userbtn"><a href="">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('company.home')}}" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                                    <li class="nav-item"><a href="{{ route('company.profile') }}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a></li>
                                    <li class="nav-item"><a href="{{ route('post.job') }}" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Post Job')}}</a></li>
                                    <li class="nav-item"><a href="{{route('company.messages')}}" class="nav-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}}</a></li>
                                    <li class="nav-item"><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                                    <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>
                            
                             <li class="nav-item"><a href="{{route('login')}}" class="nav-link" style="background: #17d27c;color: #fff; padding: 10px 18px;border-radius: 40px;margin-top: 8px;">{{__('Our Services')}}</a> </li>
                            
                            @endif @if(!Auth::user() && !Auth::guard('company')->user())
                            <li class="nav-item"><a href="{{route('login')}}" class="nav-link" style="background: #17d27c;color: #fff; padding: 10px 18px;border-radius: 40px;margin-top: 8px;">{{__('Sign in')}}</a> </li>
							<li class="nav-item"><a href="{{route('register')}}" class="nav-link register">{{__('Register')}}</a> </li>                            
                            @endif
                            <!---<li class="dropdown userbtn"><a href="{{url('/')}}"><img src="{{asset('/')}}images/lang.png" alt="" class="userimg" /></a>
                                <ul class="dropdown-menu">
                                    @foreach($siteLanguages as $siteLang)
                                    <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-{{$siteLang->iso_code}}').submit();" class="nav-link">{{$siteLang->native}}</a>
                                        <form id="locale-form-{{$siteLang->iso_code}}" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="locale" value="{{$siteLang->iso_code}}"/>
                                            <input type="hidden" name="return_url" value="{{url()->full()}}"/>
                                            <input type="hidden" name="is_rtl" value="{{$siteLang->is_rtl}}"/>
                                        </form>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>-->
                           
                        </ul>

                        <!-- Nav collapes end --> 

                    </div>
                 
    
                    <div class="clearfix"></div>
                </nav>

                <!-- Nav end --> 

            </div>
        </div>

        <!-- row end --> 

    </div>

    <!-- Header container end --> 

</div>




 <script>
      const hamburger = document.querySelector('.ddi');
      const sidebar = document.querySelector('.sidebar');

      hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('open');
      });
    </script>

<?php /*?>@if(!Auth::user() && !Auth::guard('company')->user())
	<div class="">my dive 2</div>
@endif<?php */?>