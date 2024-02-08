<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Pdf;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BillController extends Controller
{
    public function bill()
    {
        $bills = Bill::all();
        return view('frontend.bill', compact('bills', ));
    }

    public function addBill(Request $request, )
    {
        $bill = new Bill([
            'pan_id' => $request->pan_id,
            'item' => $request->item,
            'quantity' => $request->quantity,
            'vat' => $request->vat,
            'total' => $request->total,

        ]);
        $bill->save();
        return redirect()->back();
    }

    public function updateBill(Request $request, $id)
    {
        Bill::findOrFail($id)([
            'pan_id' => $request->pan_id,
            'item' => $request->item,
            'quantity' => $request->quantity,
            'vat' => $request->vat,
            'total' => $request->total,
        ]);
        return redirect()->back();
    }
   
}
