<?php

namespace App\Http\Controllers;

use App\Models\PaydayLoan;
use Illuminate\Http\Request;

class PaydayLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paydayloans.index', [
            'title' => 'Ranking chwilówek',
            'paydayloans' => PaydayLoan::all(),
        ]);
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
     * @param  \App\Models\PaydayLoan  $paydayloan
     * @return \Illuminate\Http\Response
     */
    public function show(PaydayLoan $paydayloan)
    {
        return view('paydayloans.show', [
            'title' => 'Szczegóły chwilówki',
            'paydayloan' => $paydayloan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaydayLoan  $paydayloan
     * @return \Illuminate\Http\Response
     */
    public function edit(PaydayLoan $paydayloan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaydayLoan  $paydayloan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaydayLoan $paydayloan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaydayLoan  $paydayloan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaydayLoan $paydayloan)
    {
        //
    }
}
