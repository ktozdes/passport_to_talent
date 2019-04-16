<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passport To Talents</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

    @yield('custom_scripts')
    
    <script type="text/javascript">
		var app_urls = {};
        app_urls.home = {!! json_encode(url('/')) !!}
        app_urls.apply_to_job = '{!! URL::route('individual.apply_to_job' ) !!}'
	</script>

	<link  href="{{ URL::asset('public/css/main.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('public/js/app.js') }}"></script>
    <script src="{{ URL::asset('public/js/main.js') }}"></script>
	

</head>