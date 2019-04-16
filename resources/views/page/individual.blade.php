@extends('layouts.master-individual')

@section('main_menu')
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
            <div class="columns is-vtop">
                <div class="column is-three-quarters">
                    @if ($filter == 1)
                    <form action="{{ URL::route('individual') }}" method="get">
                        <article class="message is-info">
                          <div class="message-header">
                            Search Job
                          </div>
                          <div class="message-body">
                            <div class="content">
                              <div class="field is-grouped">
                                <p class="control is-expanded">
                                    <input class="input" name="search" type="text" value="{{Request::get('search')}}" placeholder="Job Title">
                                </p>
                                <div class="control">
                                    <div class="select">
                                        <select name="state_id">
                                                <option value="">Select States</option>
                                            @foreach ($states as $state)
                                                <option value="{{$state->id}}" {{Request::get('state_id') == $state->id ? 'selected': ''}}>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <p class="control">
                                    <button type="submit" class="button is-info">
                                    Search
                                    </button>
                                    <a href="{{ URL::route('individual') }}" class="button is-light">
                                    Clear
                                    </a>
                                </p>
                            </div>
                            </div>
                          </div>
                        </article>
                    </form>
                    @endif
                    
                    {{ $jobs->links() }}
                    @foreach ($jobs as $job)
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                            @if (in_array($individual->id, $job->individuals()->pluck('individual_id')->toArray()))
                                <span class="tag is-success is-medium">Applied</span>
                            @else
                                <a href="javascript:void(0)" job-id="{{$job->id}}" class="apply-to-job--button button is-link is-fullwidth is-outlined">Apply</a>
                            @endif
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
