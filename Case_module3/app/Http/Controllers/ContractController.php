<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Product;
use App\Models\Category;
use App\Models\Periodic;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{

    public function index()
    {
        $contracts = Contract::all();

        return view('dashboard.contract.index', compact(['contracts']));
    }


    public function create()
    {
        $products_main = DB::table('products')
            ->where('category_id', '=', 1)
            ->get();
        $products_sub = DB::table('products')
            ->where('category_id', '<>', 1)
            ->get();
        $categories = Category::all();
        $periodics = Periodic::all();

        return view('dashboard.contract.create', compact(['categories', 'products_main', 'products_sub', 'periodics']));
    }

    public function store(Request $request)
    {
        $contract = new Contract();
        $contract->name = $request->contract_name;
        $contract->save();

        return response()->json($contract);
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
        //
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
        //
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
