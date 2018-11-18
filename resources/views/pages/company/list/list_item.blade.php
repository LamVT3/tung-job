<div class="job-list" style="width: 100%;">
    <div class="thumb">
        <a href="{{route('company-detail', $item->slug_company_name)}}">
            <img width="100px" height="100px" src="{{asset('images/'.$item->company_logo)}}" alt="">
        </a>
    </div>
    <div class="job-list-content" id="list-company-review">
        <h4><a href="{{route('company-detail', $item->slug_company_name)}}">{{$item->company_name}}</a></h4>
        <p></p>
        <div class="pull-left">
            <div class="meta-tag">
                <span style="font-weight: bold"><i class="ti-location-pin"></i> {{$item->company_location}}</span>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{route('company-detail', $item->slug_company_name)}}" class="btn btn-common btn-rm">Overview</a>
        </div>
    </div>
</div>