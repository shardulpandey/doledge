<div class="section greybg">
    <div class="container">
        <div class="topsearchwrap">

        <h3 style="text-align: center;padding-bottom: 15px;">{{__('Browse Jobs By Functional Area')}}</h3>

                <div class="srchint">
                   <ul class="row catelist">
    <?php
        $functionalAreas = App\FunctionalArea::lang()->active()->get();
    ?>
    @foreach($functionalAreas as $functionalArea)
        <li class="col-md-4 col-sm-6">
            <a href="{{route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])}}" title="{{$functionalArea->functional_area}}">
                {{$functionalArea->functional_area}}
            </a>
        </li>
    @endforeach
</ul>
                    <!--Categories end-->
                </div>

          

            
        </div>
    </div>
</div>