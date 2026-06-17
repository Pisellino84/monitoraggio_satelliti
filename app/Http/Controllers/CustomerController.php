<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 1. IMPORTANTE: Questo use deve stare in alto, prima della classe
use App\Models\Customer; 

class CustomerController extends Controller
{
    // Gli altri tuoi metodi del controller...

    // 2. Incolla il metodo pubblico all'interno della classe
    public function ranking()
    {
        // Carica i clienti ordinandoli per il maggior numero di satelliti posseduti
        $customers = Customer::withCount('satellites')
            ->orderBy('satellites_count', 'desc')
            ->get();

        return view('customers-ranking', compact('customers'));
    }
}