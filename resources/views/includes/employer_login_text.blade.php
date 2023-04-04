@if(!Auth::user() && !Auth::guard('company')->user())
<div class="emploginbox">
	<div class="container">		
		<div class="titleTop">
			<div class="subtitle">{{__('Are You Looking For Candidates!')}}</div>
           <h3>{{__('Post a Job Today')}}  </h3>
			<h4>{{__('and hire the right Candidates')}}</h4>
        </div>
		<p>Find your perfect match! Post a job today and connect with qualified candidates who fit your company culture and job requirements. Don't wait, hire the right talent now.</p>
		<div class="viewallbtn"><a href="{{route('register')}}">{{__('Post a Job')}}</a></div>
	</div>
</div>
@endif