<div class="job-list" style="width: 100%">
    <div class="thumb">
        <a href="{{route('job-detail', $item->slug_title)}}"><img width="100px" height="100px" src="{{asset('images/'.$item->company->company_logo)}}" alt=""></a>
    </div>
    <div class="job-list-content">
        <h4><a href="{{route('job-detail', $item->slug_title)}}">{{$item->job_title}}</a>
            @if($item->job_type == 'Full-Time')
                <span class="full-time">Full-Time</span>
            @else
                <span class="part-time">Part-Time</span>
            @endif
        </h4>
        <p></p>
        <div class="job-tag">
            <div class="pull-left">
                <div class="meta-tag">
                    @if ($item->job_tag != "")
						<?php $count = 1;?>
                        @foreach(explode(',', $item->job_tag) as $tag)
                            @if($count <= 3)
                                <span><a class="btn btn-border btn-sm" href="{{route('result-search-tag')}}?tag={{$tag}}">{{$tag}}</a></span>
								<?php $count++;?>
                            @endif
                        @endforeach
                    @endif
                    <span><i class="ti-location-pin"></i>{{$item->location}}</span>
					<?php $difftime = strtotime(date('Y-m-d H:i:s')) - strtotime($item->created_at); ?>
                    @if($difftime / 60 < 60)
                        <span><i class="ti-time"></i>{{floor($difftime / 60)}} minute(s) ago</span>
                    @elseif($difftime / 3600 < 60)
                        <span><i class="ti-time"></i>{{floor($difftime / 3600)}} hour(s) ago</span>
                    @else
                        <span><i class="ti-time"></i>{{floor($difftime / 84600)}} day(s) ago</span>
                    @endif
                </div>
            </div>
            <div class="pull-right">
                <a href="{{route('job-detail', $item->slug_title)}}" class="btn btn-common btn-rm">Apply Job</a>
            </div>
        </div>
    </div>
</div>