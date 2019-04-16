<?php

namespace App\Http\Controllers;

use App\Company;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->companies->count() > 0) {
            return redirect()->route('company.edit', ['id'=>$user->companies[0]->id]);
        }
        $states = State::all();
        return view('company/create',[
            'states'=>$states,
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
            'name'=>'required|unique:companies',
            'state_id'=> 'required|integer',
            'city'=> 'required',
        ]);
        
        $user = Auth::user();
        if ($user->companies->count() > 0) {
            return redirect()->route('company.edit', ['id'=>$user->companies[0]->id])->with('warning', 'Company already exists for this user.');
        }

        $company = new Company([
            'name' => $request->input('name'),
            'city' => $request->input('city'),
            'bio' => $request->input('bio'),
            'website' => $request->input('website'),
            'state_id' => $request->input('state_id'),
            'user_id' => Auth::user()->id,
        ]);
        $company->save();
        return redirect()->route('company.edit', ['id'=>$company->id])->with('success', 'Company successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company, $id)
    {
        $user = Auth::user();
        return view('company/show',[
            'user'      => $user,
            'item'      => Company::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, $id)
    {
        $user = Auth::user();
        if ($user->companies->count()===0) {
            return redirect('company/create')->with('warning', 'No company. Please create one.');
        }
        $states = State::all();
        return view('company/edit',[
            'states'=>$states,
            'item'  => Company::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'state_id'=> 'required|integer',
            'city'=> 'required',
        ]);

        $company = Company::find($id);
        $company->update($request->all());
        
        return redirect()->route('company.edit', ['id'=>$company->id])->with('success', 'Company successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
