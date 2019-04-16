@extends('layouts.master-employer')

@section('main_menu')
@endsection

@section('content')
	<div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vtop">
                <div class="column is-three-quarters">
                    {{ $items->links() }}
                    <table class="table is-fullwidth">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Position</th>
                          <th>Company</th>
                          <th>Submission</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $item)
                        <tr>
                          <th>{{$item->id}}</th>
                          <td>{{$item->position}}</td>
                          <td>{{$item->company->name}}</td>
                          <td>{{100}}</td>
                          <td>{{$item->status}}</td>
                          <td>
                            <a href="{{URL::route('job.show', [$item->id] )}}" class="button is-info is-outlined">Show</a>
                            <a href="{{URL::route('job.edit', [$item->id] )}}" class="button is-outlined">Edit</a>
                            <a href="#" delete-href="{{URL::route('job.destroy', [$item->id] )}}" class="button is-danger is-outlined" data-toggle="modal" data-target="#defaultModal">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $items->links() }}
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
