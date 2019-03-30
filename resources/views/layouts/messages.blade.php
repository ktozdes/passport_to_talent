@if ($errors->any())
    <div class="notification is-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@if(session()->get('success'))
    <div class="notification is-success">
        {{ session()->get('success') }}  
    </div>
@endif
@if(session()->get('warning'))
    <div class="notification is-warning">
        {{ session()->get('warning') }}  
    </div>
@endif
@if(session()->get('danger'))
	<div class="notification is-danger">
        {{ session()->get('danger') }}  
    </div>
@endif