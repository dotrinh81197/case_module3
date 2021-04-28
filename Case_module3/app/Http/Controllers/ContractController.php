<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Product;
use App\Models\Category;
use App\Models\ContractDetail;
use App\Models\Periodic;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\Console\Input\Input;

class ContractController extends Controller
{

    public function index()
    {
        $contracts = Contract::all();

        return view('dashboard.contract.index', compact(['contracts']));
    }

    public function getProduct_subList()
    {
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $periodics = Periodic::all();
        return view('dashboard.contract.list_product_sub', compact(['products_sub', 'periodics']));
    }

    public function store(Request $request)
    {

        $contract = new Contract();
        $full_name =  $contract->full_name = $request->full_name;
        $email = $contract->email = $request->email;
        $phone = $contract->phone = $request->phone;
        $address = $contract->address = $request->address;
        $gender = $contract->gender = $request->gender;
        $dob = $contract->dob = $request->dob;
        $cmnd = $contract->cmnd = $request->cmnd;
        $job = $contract->job = $request->job;
        $contract->user_id = Auth::user()->id;

        $contract->save();

        // $terms = $request->input('term', []);
        // $periodics_id = $request->input('periodic_id', []);
        // $fees_recurring = $request->input('fee_recurring', []);
        // $insurances_money = $request->input('insurance_money', []);


        $products = $request->input('products', []);

        // $products is array

        for ($i = 0; $i < count($products); $i++) {
            //lay ra duoc id cua product
            $product_id = $products[$i];

            for ($y = 0; $y < count($products); $y++) {
                $price = new Price();
                $price->product_id = $product_id;

                $term = $request->input('term', [$y][0]);
                $price->term = $term[$y][0];

                $periodic_id = $request->input('periodic_product', [$y][0]);
                $price->periodic_id = $periodic_id[$y][0];

                $fee_recurring = $request->input('fee_recurring', [$y][0]);
                $price->fee_recurring = $fee_recurring[$y][0];

                $insurance_money = $request->input('insurance_money', [$y][0]);
                $price->insurance_money = $insurance_money[$y][0];
                $price->save();
            }

            if ($products[$i] != '') {
                $contract->product()->attach($products[$i]);
            }
        };

        echo "ĐÃ GỞI HỒ SƠ YÊU CẦU BẢO HIỂM ";
    }
    public function create()
    {
        $products_main = Product::withoutTrashed('products')
            ->where('category_id', 1)
            ->get();
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $categories = Category::withTrashed();
        $periodics = Periodic::all();
        $products = Product::all();
        return view('dashboard.contract.create', compact(['categories', 'products_main', 'products_sub', 'periodics']));
    }

    public function storeProductMain(Request $request)
    {
        $contract = new Contract();

        $contract->product_id = $request->product_main;
        //info
        $full_name =  $contract->full_name = $request->full_name;
        $email = $contract->email = $request->email;
        $phone = $contract->phone = $request->phone;
        $address = $contract->address = $request->address;
        $gender = $contract->gender = $request->gender;
        $dob = $contract->dob = $request->dob;
        $cmnd = $contract->cmnd = $request->cmnd;
        $job = $contract->job = $request->job;

        $contract->term = $request->term;
        $contract->periodic_id = $request->periodic_id;
        $contract->insurance_money = $request->insurance_money;
        $contract->fee_recurring = $request->fee_recurring;
        $contract->status = 0;
        $contract->user_id = Auth::user()->id;

        $contract->save();

        $contract->product_id = $request->product_main;



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
