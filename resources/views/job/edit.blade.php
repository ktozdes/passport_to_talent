@extends('layouts.master-employer')

@section('main_menu')
@endsection

@section('content')
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-three-quarters">
                    <form action="{{URL::route('job.update', [$item->id] )}}" method="post">
                        @include('input.text', [
                            'name'=>'position',
                            'label'=>'Position',
                            'placeholder'=>'Position',
                            'value'=> $item->position
                        ])

                        @include('input.textarea', [
                            'name'=>'job_description',
                            'label'=>'Job Description',
                            'placeholder'=>'Long Description of position',
                            'value'=> $item->job_description
                        ])

                        @include('input.selectbox', [
                            'name'=>'degree_id',
                            'label'=>'Education',
                            'placeholder'=>'Select Education',
                            'value'=> $item->degree_id,
                            'list'=>$degrees,
                            'option_id'=>'id',
                            'option_text'=>'name',
                        ])

                        @include('input.selectbox', [
                            'name'=>'company_id',
                            'label'=>'Company',
                            'placeholder'=>'Select Company',
                            'value'=> $item->company_id,
                            'list'=>$user->companies,
                            'option_id'=>'id',
                            'option_text'=>'name',
                        ])

                        @include('input.selectbox', [
                            'name'=>'immigration_offering_id',
                            'label'=>'Immigration Offering',
                            'placeholder'=>'Select Immigration Offering',
                            'value'=> $item->immigration_offering_id,
                            'list'=>[
                                (object)['id'=>1, 'name'=> 'none'],
                                (object)['id'=>2, 'name'=> 'H1'],
                                (object)['id'=>3, 'name'=> 'F1'],
                            ],
                            'option_id'=>'id',
                            'option_text'=>'name',
                        ])

                        @include('input.textarea', [
                            'name'=>'education_description',
                            'label'=>'Education Description',
                            'placeholder'=>'Long Description of Education',
                            'value'=> $item->education_description
                        ])
                        @include('input.text', [
                            'name'=>'skills',
                            'label'=>'Skills',
                            'placeholder'=>'Skills',
                            'value'=> $item->skills
                        ])
                        @include('input.textarea', [
                            'name'=>'skills_description',
                            'label'=>'Skills Description',
                            'placeholder'=>'Long Description of skillS',
                            'value'=> $item->skills_description
                        ])
                        @include('input.text', [
                            'name'=>'employment_industry',
                            'label'=>'Employment Industry',
                            'placeholder'=>'Education',
                            'value'=> $item->employment_industry
                        ])
                        @include('input.text', [
                            'name'=>'salary_range',
                            'label'=>'Salary Range',
                            'placeholder'=>'4000$ - 6000$',
                            'value'=> $item->salary_range
                        ])
                        @include('input.textarea', [
                            'name'=>'salary_description',
                            'label'=>'Salary Description',
                            'placeholder'=>'With possible increase in case of good work.',
                            'value'=> $item->salary_description
                        ])
                        @include('input.textarea', [
                            'name'=>'offered_benefit',
                            'label'=>'Benefits',
                            'placeholder'=>'Free coffee everyday.',
                            'value'=> $item->offered_benefit
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
                    <h1 class="title is-2">Management</h1>
                    <br>
                    <a href="{{URL::route('job.create')}}" class="button is-outlined" class="button">Create Job</a>
                </div>
            </div>
        </div>
    </div>
@endsection
