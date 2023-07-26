<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'transactions'=> Transaction::where('date_transaction', 'LIKE', '2023-07%')
            ->orderByDesc ('date_transaction')
            ->get(),
            'total' => Transaction::sum('amount')
        ]; 
        
        return view ('transactionList', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('transactionAdd', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction=new Transaction;
        // $transaction->name = $request->name;
        $transaction->name = $request->input('name');
        $transaction->date_transaction = $request->input('date');
        $transaction->amount = $request->input('amount');
        
        $category=Category::find($request->input('category'));
        $category->transactions()->save($transaction);
        
        $transaction->save();

        return Redirect::route('transactionList') -> with ('success' , 'Transaction enregistré avec succès'); // Redirect::route('') == HEADER:LOCATION 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'categories' => Category::all(),
            'id' => $id
        ];
        return view ('transactionEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request);exit;

        $update = Transaction::find($id);
        $update->name = $request->input('name');
        $update->date_transaction = $request->input('date');
        $update->amount = $request->input('amount');
        $update->category_id = $request->input('category');

        $update->save();

        return Redirect::route('transactionList') -> with ('success' , 'Transaction modifé avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
