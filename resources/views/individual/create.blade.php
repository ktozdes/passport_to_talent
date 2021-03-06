@extends('layouts.master-individual')

@section('main_menu')
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-left">
            <div class="columns is-vcentered">
                <div class="column is-three-quarters">
                    <form action="{{URL::route('individual.store')}}" method="post">

                        @include('input.text', [
                            'name'=>'firstname',
                            'value'=> old('firstname'),
                            'label'=>'First Name',
                            'placeholder'=>'First Name',
                            'required'=>1,
                        ])
                        @include('input.text', [
                            'name'=>'lastname',
                            'value'=> old('lastname'),
                            'label'=>'Last Name',
                            'placeholder'=>'Last Name',
                            'required'=>1,
                        ])
                        @include('input.text', [
                            'name'=>'middlename',
                            'value'=> old('middlename'),
                            'label'=>'Middle Name',
                            'placeholder'=>'Middle Name',
                        ])

                        @include('input.textarea', [
                            'name'=>'bio',
                            'label'=>'Bio',
                            'placeholder'=>'Long Description of Yourself',
                            'value'=> old('bio')
                        ])
                        @include('input.text', [
                            'name'=>'city',
                            'value'=> old('city'),
                            'label'=>'City',
                            'placeholder'=>'City',
                        ])
                        @include('input.text', [
                            'name'=>'phone',
                            'value'=> old('phone'),
                            'label'=>'Phone',
                            'placeholder'=>'Phone',
                        ])

                        @include('input.text', [
                            'name'=>'education',
                            'value'=> old('education'),
                            'label'=>'Education',
                            'placeholder'=>'Education',
                        ])

                        @include('input.textarea', [
                            'name'=>'education_description',
                            'value'=> old('education_description'),
                            'label'=>'Education Description',
                            'placeholder'=>'More detailed information about education.',
                        ])

                        @include('input.text', [
                            'name'=>'immigration_status',
                            'value'=> old('immigration_status'),
                            'label'=>'Immigration Status',
                            'placeholder'=>'Immigration Status',
                        ])

                        @include('input.selectbox', [
                            'name'=>'immigration_seeking',
                            'value'=> old('immigration_seeking'),
                            'label'=>'immigration Seeking',
                            'placeholder'=>'Select Immigration Seeking',
                            'list'=>[
                                (object)['id'=>1, 'name'=> 'none'],
                                (object)['id'=>2, 'name'=> 'H1'],
                                (object)['id'=>3, 'name'=> 'F1'],
                            ],
                            'option_id'=>'id',
                            'option_text'=>'name',
                        ])


                        @include('input.text', [
                            'name'=>'skills',
                            'value'=> old('skills'),
                            'label'=>'Skills',
                            'placeholder'=>'Skills',
                        ])

                        @include('input.textarea', [
                            'name'=>'skills_description',
                            'value'=> old('skills_description'),
                            'label'=>'Skills Description',
                            'placeholder'=>'More detailed information about skills.',
                        ])

                        @include('input.text', [
                            'name'=>'employment_industry',
                            'value'=> old('employment_industry'),
                            'label'=>'Employment Industry',
                            'placeholder'=>'Employment Industry',
                        ])

                        @include('input.textarea', [
                            'name'=>'previous_positions',
                            'value'=> old('previous_positions'),
                            'label'=>'Previous Positions',
                            'placeholder'=>'More detailed information about Previous Positions.',
                        ])

                        
                        @include('input.selectbox', [
                            'name'=>'residence_state',
                            'label'=>'Residence State',
                            'placeholder'=>'Select State',
                            'value'=> old('residence_state'),
                            'list'=>$states,
                            'option_id'=>'id',
                            'option_text'=>'name',
                            'required'=>1,
                        ])

                        @include('input.selectbox', [
                            'name'=>'degree_id',
                            'label'=>'Degree',
                            'placeholder'=>'Select Degree',
                            'value'=> old('degree_id'),
                            'list'=>$degrees,
                            'option_id'=>'id',
                            'option_text'=>'name',
                            'required'=>1,
                        ])

                        @include('input.selectbox', [
                            'name'=>'major_id',
                            'label'=>'Major',
                            'placeholder'=>'Select Major',
                            'value'=> old('major_id'),
                            'list'=>$majors,
                            'option_id'=>'id',
                            'option_text'=>'name',
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
