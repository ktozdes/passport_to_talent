@extends('layouts.master-employer')
@section('main_menu')
@endsection

@section('content')
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-three-quarters">
                    <table class="table is-fullwidth">
                      <thead>
                        <tr>
                            <th>Property</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item->getAttributes() as $key => $attribute)
                        @if ($key =='state_id')
                        <tr>
                            <td>{{ str_replace("_"," ", $key) }}</td>
                            <td>{{$item->state->name}}</td>
                        </tr>
                        @elseif ($key != 'id' && $key != 'user_id' )
                        <tr>
                            <td>{{ str_replace("_"," ", $key) }}</td>
                            <td>{{$attribute}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="column">
                    <h1 class="title is-2">Management</h1>
                    <br>
                    <a href="{{URL::route('job.create')}}" class="button is-outlined" class="button">Create Job</a>
                </div>
            </div>
        </div>
    </div>
@endsection
