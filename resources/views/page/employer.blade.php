@extends('layouts.master-employer')

@section('main_menu')
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-centered">
        	<div class="columns is-vcentered">
                <div class="column">
                    {{ $jobs->links() }}
                    @foreach ($jobs as $job)
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                            <span class="tag is-success is-medium">Applied Individuals Number: 
                            {{$job->individuals->count()}}</span>
                            </div>
                        <div class="media-content">
                            <div class="content">
                                <strong>Position</strong>: {{$job->position}}
                                <br>
                                <br>

                                <div class="company-container">
                                    <small><strong>Company</strong>: {{$job->company->name}}</small>
                                </div>
                                <div class="salary-container">
                                    <small><strong>salary</strong>: {{$job->salary_range}}</small>
                                </div>
                                <div class="job-description-container">
                                    {{$job->job_description}}
                                </div>
                                <p class="has-text-right">
                                    <a href="{{URL::route('job.show', [$job->id] )}}" class="button is-small is-link is-outlined">More Info</a>
                                </p>
                            </div>
                        </div>
                        </article>
                    </div>
                    @endforeach
                    {{ $jobs->links() }}
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
