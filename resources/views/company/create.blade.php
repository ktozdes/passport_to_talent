@extends('layouts.master-employer')

@section('main_menu')
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-three-quarters">
                    <form action="{{URL::route('company.store')}}" method="post">
                        @include('input.text', [
                            'name'=>'name',
                            'label'=>'Company Name',
                            'placeholder'=>'Company Name',
                            'value'=> old('name')
                        ])

                        @include('input.text', [
                            'name'=>'website',
                            'label'=>'Website',
                            'placeholder'=>'google.com',
                            'value'=> old('website')
                        ])
                        @include('input.text', [
                            'name'=>'city',
                            'label'=>'City',
                            'placeholder'=>'Los Angeles',
                            'value'=> old('city')
                        ])
                        @include('input.selectbox', [
                            'name'=>'state_id',
                            'label'=>'State',
                            'placeholder'=>'Select State',
                            'value'=> old('state_id'),
                            'list'=>$states,
                            'option_id'=>'id',
                            'option_text'=>'name',
                        ])

                        @include('input.textarea', [
                            'name'=>'bio',
                            'label'=>'Bio',
                            'placeholder'=>'Long Description of Company',
                            'value'=> old('bio')
                        ])

                        <div class="field is-grouped is-grouped-right">
                          <div class="control">
                            <button class="button is-text">Cancel</button>
                          </div>
                          <div class="control">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="button is-link" type="Submit">Submit</button>
                          </div>
                        </div>
                    </form>
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
