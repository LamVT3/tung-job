<form method="get" action="{{action('JobResultController@showResultJob')}}">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="form-group" id="search_keyword">
                <input class="form-control" id="job-keywords" type="text" name="keyword" value="{{@$name}}" placeholder="job title / keywords / company name" autocomplete="off">
                <i class="ti-time"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="form-group">
                {{--<input class="form-control" type="email" placeholder="city / province / zip code">
                <i class="ti-location-pin"></i>--}}
                <select  class="form-control" name="location" style="-webkit-appearance: none;-moz-appearance: none;appearance: none;">
                    <option value="Ha Noi" @if(@$location == "Ha Noi") selected @endif>Ha Noi</option>
                    <option value="Da Nang" @if(@$location == "Da Nang") selected @endif>Da Nang</option>
                    <option value="Ho Chi Minh" @if(@$location == "Ho Chi Minh") selected @endif>Ho Chi Minh</option>
                    <option value="Others" @if(@$location == "Others") selected @endif>Others</option>
                </select>
                <i class="ti-location-pin"></i>
            </div>
        </div>
        <div class="col-md-2 col-sm-6">
            <button type="submit" class="btn btn-search-icon" style="width: 100%"> Finds job</button>
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
