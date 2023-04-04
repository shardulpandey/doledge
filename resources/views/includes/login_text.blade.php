
<div class="userloginbox">
	<div class="container">		
		<div class="titleTop">
           <h3>{{__('Are You Looking For Job!')}} </h3>
        </div>
		<p>Your job search ends here! Explore a wide range of job opportunities and find the perfect match for your skills and experience. Start your career journey today!</p>
		
		@if(!Auth::user() && !Auth::guard('company')->user())
		<div class="viewallbtn"><a href="{{route('register')}}"> {{__('Get Started Today')}} </a></div>
		@else
		<div class="viewallbtn"><a href="{{url('my-profile')}}">{{__('Build Your CV')}} </a></div>
		@endif
	</div>
</div>
