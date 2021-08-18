
<p>Hi, This is <strong>{{ $data['name'] }}</strong> </p>

<h4>Message: </h4> 
<p>{{ $data['message'] }}.</p>

<p>It would be appriciative, if you gone through this feedback.</p>

Reply to <a href = "mailto:{{$data['email']}}">{{ $data['name'] }}</a>

<br>
Thanks, <br>
{{ config('app.name')}}