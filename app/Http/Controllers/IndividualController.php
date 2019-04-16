<?php

namespace App\Http\Controllers;

use App\Individual;
use Illuminate\Http\Request;


use App\State;
use App\User;
use App\Major;
use App\Degree;
use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    public function individual(Request $request)
    {
        $stateID = $request->input('state_id', 0);
        $jobTitle = $request->input('search', '');

        if ($jobTitle != '' || $stateID != 0){
            $query = Job::join('companies', 'jobs.company_id', '=', 'companies.id');
            if ($stateID != 0) {
                $query = $query->where('companies.state_id', $stateID);
            }
            if ($jobTitle != '') {
                $query = $query->where('position','like','%' . $jobTitle . '%');
            }
            $jobs = $query->orderBy('jobs.id', 'desc')->paginate(15)->onEachSide(2);
        }
        else{
            $jobs = Job::orderBy('id', 'desc')->paginate(15)->onEachSide(2);
        }

        return view('page/individual', [
            'jobs' => $jobs,
            'states' => State::all(),
            'individual'=> Auth::user()->individual,
            'filter' => 1,
        ]);
    }
    public function applied()
    {
        $jobs = Job::whereHas('individuals', function ($query) {
            $query->where('individuals.id', Auth::user()->id);
        })->paginate(15)->onEachSide(2);
        return view('page/individual', [
            'jobs' => $jobs,
            'individual'=> Auth::user()->individual,
            'filter' => 0,
        ]);
    }
    public function applyToJob($id)
    {
        if (!is_numeric($id)){
            return response()->json([
                'message' => 'Job ID is not set.'], 400);
        }
        Job::find($id)->individuals()->attach(Auth::user()->id, ['status'=> 'applied']);

        return response()->json([
                'success'   =>1,
                'message'   => 'You applied to Job with id:'.$id], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->individual->count() > 0) {
            return redirect()->route('individual.edit', ['id'=>$user->individual[0]->id]);
        }
        $states = State::all();
        $degrees = Degree::all();
        $majors = Major::all();
        return view('individual/create',[
            'states'    =>$states,
            'degrees'   =>$degrees,
            'majors'    =>$majors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required',
            'lastname'=>'required',
            'residence_state'=> 'required|integer',
            'degree_id'=> 'required|integer',
            'immigration_seeking'=> 'required|integer',
        ]);
        
        $user = Auth::user();
        if ($user->individual->count() > 0) {
            return redirect()->route('individual.edit', ['id'=>$user->companies[0]->id])->with('warning', 'Profile already exists for this user.');
        }

        $individual = new Individual($request->all());
        $individual->user_id = $user->id;
        $individual->save();
        return redirect()->route('individual.edit', ['id'=>$individual->id])->with('success', 'Profile successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function show(Individual $individual, $id = false)
    {
        $user = Auth::user();
        $individual = Auth::user()->individual;
        if (is_numeric($id) && $id > 0 ){
            $individual = Individual::find($id);
        }
        return view('individual/show',[
            'individual'=> $individual,
            'owner'     => $user->id == $individual->user_id ? 1 : 0,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit(Individual $individual, $id)
    {
        $user = Auth::user();
        $individual = Individual::find($id);
        if ($user->id !== $individual->user_id){
            return redirect('individual/show')->with('warning', 'You don\'t have permission to edit other profiles.');
        }
        if ($user->individual->count()===0) {
            return redirect('individual/create')->with('warning', 'No Profile. Please create one.');
        }
        $states = State::all();
        $degrees = Degree::all();
        $majors = Major::all();
        return view('individual/edit',[
            'states'=>$states,
            'degrees'=>$degrees,
            'majors'=>$majors,
            'item'  => $individual,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Individual $individual, $id)
    {
        $this->validate($request, [
            'firstname'=>'required',
            'lastname'=>'required',
            'residence_state'=> 'required|integer',
            'degree_id'=> 'required|integer',
            'immigration_seeking'=> 'required|integer',
        ]);

        $individual = Individual::find($id);
        $individual->update($request->all());
        
        return redirect()->route('individual.edit', ['id'=>$individual->id])->with('success', 'Profile successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individual $individual)
    {
        //
    }
}
