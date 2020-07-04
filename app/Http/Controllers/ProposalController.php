<?php

namespace App\Http\Controllers;

use App\Proposal;
use App\Company;
use Illuminate\Http\Request;

class ProposalController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(proposal $proposal)
    {
        //
    }

    public function approveProposal(Request $request)
    {
        //
        // return $request;
        $proposal = Proposal::find($request->proposal_id);
        $proposal->approve = 1;
        $proposal->tgl_approve = date("Y-m-d");
        $proposal->save();

        return response()->json( ["data" => "ok"] );

    }

    public function rejectProposal(Request $request)
    {
        //
        // return $request;
        $proposal = Proposal::find($request->proposal_id);
        $proposal->approve = 3;
        $proposal->tgl_approve = date("Y-m-d");
        $proposal->save();

        return response()->json( ["data" => "ok"] );


    }
    public function batalProposal(Request $request)
    {
        //
        // return $request;
        $proposal = Proposal::find($request->proposal_id);
        $proposal->approve = 2;
        $proposal->tgl_approve = date("Y-m-d");
        $proposal->save();

        return response()->json( ["data" => "ok"] );


    }


}
