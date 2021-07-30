<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;



class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $Payment = Payment::create($request->all());

        return response()->json($Payment, 201);
    }

    public function index()
    {
        $payments = Payment::all();
        return response()->json(['payments' => $payments], 200);

    }

    public function show(Payment $Payment)
    {
        return $Payment;
    }


    public function update(Request $request, Payment $Payment)
    {
        $Payment->update($request->all());

        return response()->json($Payment, 200);
    }

    public function delete(Payment $Payment)
    {
        $Payment->delete();

        return response()->json(null, 204);
    }
}
