@extends('layouts.master-employer')
@section('main_menu')
@endsection

@section('content')
    <div class="hero-body">
        <div class="container has-text-left">
            <div class="columns is-vtop">
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
                        @if ($key =='degree_id')
                        <tr>
                            <td>{{ str_replace("_"," ", $key) }}</td>
                            <td>{{$item->degree->name}}</td>
                        </tr>
                        @elseif ($key =='immigration_offering_id')
                        <tr>
                            <td>{{ str_replace("_"," ", $key) }}</td>
                            <td>{{$item->immigrationOffering->code}}</td>
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
                @if ($owner == 1)
                <br/>
                <br/>
                <h1 class="title">Applied Individuals</h1>
                <br/>
                <br/>
                {{ $individuals->links() }}
                @foreach ($individuals as $key => $individual)
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="columns">
                                    <div class="column">
                                    <p class="title is-4">{{$individual->firstname}} {{$individual->lastname}} </p>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div><strong>Phone:</strong> {{$individual->phone}}</div>
                                        <div><strong>Email:</strong> {{$individual->user->email}}</div>
                                    </div>
                                    <div class="column">
                                        <div><strong>State:</strong> {{$individual->residentState->name}}</div>
                                        <div><strong>City:</strong> {{$individual->city}}</div>
                                        <div><strong>Degree:</strong> {{$individual->degree->name}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="media-right">
                                <a href="{{URL::route('individual.show', ['id'=>$individual->id])}}" class="button is-outlined" class="button">More info</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $individuals->links() }}
                @endif
                </div>
                <div class="column has-text-centered">
                    <h1 class="title is-2">Management</h1>
                    <br>
                    <a href="{{URL::route('job.create')}}" class="button is-outlined" class="button">Create Job</a>
                </div>
            </div>
        </div>
    </div>
@endsection
