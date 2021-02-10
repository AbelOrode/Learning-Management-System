<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeeCategoryAmount;
use Illuminate\Http\Request;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount(){
        $data['allData'] = FeeCategoryAmount::all();
        return view('backend.setup.fee_amount.view_fee_amount', $data);
    }
}
