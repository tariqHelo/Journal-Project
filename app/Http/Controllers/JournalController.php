<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Http\Requests\Journal\StoreJournalRequest;
use App\Http\Requests\Journal\UpdateJournalRequest;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $journals = Journal::all();
       // dd($journals);
        return view('admin.journal.index')
        ->withJournals($journals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('admin.journal.create',[
            'journal' => new Journal()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJournalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJournalRequest $request)
    {
       // dd($request->all());
        $journal = Journal::create($request->all());
        \Session::flash("msg", "s:You are adedd Sucssfuly");
        return redirect()->route('journal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        return view('admin.journal.edit')
        ->withJournal($journal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJournalRequest  $request
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJournalRequest $request, Journal $journal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        //
    }
}
