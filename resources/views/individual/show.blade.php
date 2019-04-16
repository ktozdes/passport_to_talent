@extends('layouts.master-individual')

@section('main_menu')
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-three-quarters has-text-left">
                    @if (isset($individual->firstname))
                    <div class="card">
                      <div class="card-content">
                        <div class="media">
                          <div class="media-left">
                            <figure class="image is-48x48">
                              <img src="<?php echo e(asset('public/img/default-avatar.png')); ?>" alt="default avatar"/>
                            </figure>
                          </div>
                          <div class="media-content">
                            <p class="title is-4">{{$individual->firstname}} {{$individual->lastname}} {{$individual->middlename}} </p>
                            <p class="subtitle is-6">{{$individual->bio}}</p>
                          </div>
                        </div>

                        <table class="table is-fullwidth">
                          <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($individual->getAttributes() as $key => $attribute)
                            @if ($key =='degree_id')
                            <tr>
                                <td>{{ str_replace("_"," ", $key) }}</td>
                                <td>{{$individual->degree->name}}</td>
                            </tr>
                            @elseif ($key =='major_id')
                            <tr>
                                <td>{{ str_replace("_"," ", $key) }}</td>
                                <td>{{$individual->major->name}}</td>
                            </tr>
                            @elseif ($key =='residence_state')
                            <tr>
                                <td>{{ str_replace("_"," ", $key) }}</td>
                                <td>{{$individual->residentState->name}}</td>
                            </tr>
                            @elseif ($key =='company_id')
                            <tr>
                                <td>{{ str_replace("_"," ", $key) }}</td>
                                <td><a href="{{URL::route('company.show', ['id'=>$item->company_id ])}}">{{$item->company->name}}</a></td>
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
                      @if ($owner == 1)
                      <footer class="card-footer">
                        <a href="{{ URL::route('individual.edit', ['id'=>$individual->user_id]) }}" class="card-footer-item">Edit</a>
                      </footer>
                      @endif
                    </div>
                    @else
                        <div class="card">
                          <header class="card-header">
                            <p class="card-header-title">
                              No Profile
                            </p>
                          </header>
                          <div class="card-content">
                            <div class="content">
                              You haven't create profile yet. Please create one.
                            </div>
                          </div>
                          <footer class="card-footer">
                            <a href="{{ URL::route('individual.create') }}" class="card-footer-item">Create</a>
                          </footer>
                        </div>
                    @endif
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
