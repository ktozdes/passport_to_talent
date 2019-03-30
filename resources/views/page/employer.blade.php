@extends('layouts.master')

@section('main_menu')
        <li class="is-active"><a href="{{ URL::route('employer') }}">Employer</a></li>
        <li><a href="{{ URL::route('company.create') }}">Manage Company</a></li>
        <li><a href="{{ url('#') }}">Jobs</a></li>
        <li><a href="{{ URL::route('profile.edit') }}">Profile</a></li>
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-centered">
        	<div class="columns is-vcentered">
                <div class="column">
                    <figure class="image">
                        <img src="https://picsum.photos/1900/400/?random" alt="Description">
                    </figure>
                </div>
            </div>
            <div class="columns is-vcentered">
                <div class="column is-three-quarters">
                    <figure class="image is-4by3">
                        <img src="https://picsum.photos/800/600/?random" alt="Description">
                    </figure>
                </div>
                <div class="column">
                    <h1 class="title is-2">Overview Info</h1>
                    <h2 class="subtitle is-4">Personal Info</h2>
                    <br>
                    <p class="has-text-centered">Salam popolam</p>
                    <p class="has-text-centered">
                        <a class="button is-medium is-info is-outlined">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
