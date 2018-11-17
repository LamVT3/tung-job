@component('mail::message')
<div>
    <p><img alt="" style="width: 36px;height: 36px;border-radius: 50%;" src="{{asset('images/'.$data['job']->company->company_logo)}}">
        <a target="_blank" href="{{route('job-detail', $data['job']->slug_title)}}"> {{$data['job']->job_title}}</a></p>
</div>
<div style="border: 1px solid grey; padding: 20px; border-radius: 5px">
    <p>Name: {{$data['name']}}</p>
    <p>Email: {{$data['email']}}</p>
    <p>About: {{$data['about']}}</p>
</div>
<div>
    <small style="color: #AEAEAE">This message was sent by {{env('APP_TITLE')}}</small>
</div>
@endcomponent
