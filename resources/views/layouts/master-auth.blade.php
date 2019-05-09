@include('layouts.header')

@section('body_class', 'auth')

@include('layouts.top')

@include('layouts.messages')

@yield('content')

@include('layouts.footer')