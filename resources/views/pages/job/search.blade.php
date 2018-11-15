<form method="get" action="{{action('JobResultController@showResultJob')}}">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <input class="form-control" id="job-keywords" type="text" name="keyword" value="{{@$name}}" placeholder="job title / keywords / company name" autocomplete="off">
                <i class="ti-time"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="form-group">
                {{--<input class="form-control" type="email" placeholder="city / province / zip code">
                <i class="ti-location-pin"></i>--}}
                <select  class="form-control" name="location">
                    <option value="ha noi" @if(@$location == "ha noi") selected @endif>Ha Noi</option>
                    <option value="da nang" @if(@$location == "da nang") selected @endif>Da Nang</option>
                    <option value="ho chi minh" @if(@$location == "ho chi minh") selected @endif>Ho Chi Minh</option>
                </select>
                <i class="ti-location-pin"></i>
            </div>
        </div>
        <div class="col-md-1 col-sm-6">
            <button type="submit " class="btn btn-search-icon"><i class="ti-search"></i></button>
        </div>
    </div>
</form>

@section('script')

    <script>
        var url = "{{route('search-job')}}"
        $('#job-keywords').typeahead({
            source: function (query, process) {
                return $.get(url, { query: query }, function (data) {

                    return process(data);
                });
            }
        });
    </script>
@endsection
