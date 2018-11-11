<form method="get" action="{{action('JobResultController@showResultJob')}}">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="form-group">
                <input class="form-control" name="keyword" id="job-keywords"type="text" placeholder="job title / keywords / company name">
                <i class="ti-time"></i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="form-group">
                <input class="form-control" id="job-province" type="email" placeholder="city / province / zip code">
                <i class="ti-location-pin"></i>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="search-category-container">
                <label class="styled-select">
                    <select class="dropdown-product selectpicker">
                        <option>All Categories</option>
                        <option>Finance</option>
                        <option>IT & Engineering</option>
                        <option>Education/Training</option>
                        <option>Art/Design</option>
                        <option>Sale/Markting</option>
                        <option>Healthcare</option>
                        <option>Science</option>
                        <option>Food Services</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="col-md-1 col-sm-6">
            <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
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
