<?php

namespace App\Http\Controllers;

use App\Job;
use App\Company;
use App\User;
use App\Degree;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(15)->onEachSide(2);
        return view('job/index', [
            'items'=> $jobs,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate()
    {
        $jobs = Job::where('status', 'open')->orderBy('id', 'desc')->paginate(15);
        $response = [
            'pagination' => [
                'total' => $jobs->total(),
                'per_page' => $jobs->perPage(),
                'current_page' => $jobs->currentPage(),
                'last_page' => $jobs->lastPage(),
                'from' => $jobs->firstItem(),
                'to' => $jobs->lastItem()
           ],
           'data' => $jobs
        ];
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $degrees = Degree::all();
        return view('job/create',[
            'user'=>$user,
            'degrees'=>$degrees,
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
            'position'=>'required',
            'degree_id'=> 'required|integer',
            'company_id'=> 'required|integer',
            'immigration_offering_id'=> 'required|integer',
            'salary_range'=> 'required',
        ]);
        $user = Auth::user();
        $job = new Job($request->all());
        $job->user_id = $user->id;
        $job->status = 'open';
        $job->save();
        return redirect()->route('job.index', ['id'=>$job->id])->with('success', 'Job successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job, $id)
    {
        $user = Auth::user();
        $individuals = Job::find($id)->individuals()->paginate(15)->onEachSide(2);
        $job = Job::find($id);
        return view('job/show',[
            'user'      => $user,
            'item'      => $job,
            'individuals' => $individuals,
            'owner'     => $user->id == $job->user_id ? 1 : 0,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job, $id)
    {
        $user = Auth::user();
        $degrees = Degree::all();

        return view('job/edit',[
            'user'=>$user,
            'degrees'=>$degrees,
            'item'  => Job::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job, $id)
    {
        $this->validate($request, [
            'position'=>'required',
            'degree_id'=> 'required|integer',
            'company_id'=> 'required|integer',
            'immigration_offering_id'=> 'required|integer',
            'salary_range'=> 'required',
        ]);

        $job = Job::find($id);
        $job->update($request->all());
        
        return redirect()->route('job.edit', ['id'=>$job->id])->with('success', 'Job successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
