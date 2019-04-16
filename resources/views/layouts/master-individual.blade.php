@include('layouts.header')

@section('body_class', 'individual')

@include('layouts.top')

@include('layouts.messages')

@yield('content')

@include('layouts.footer')