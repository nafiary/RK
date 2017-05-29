<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Input;

class ReceiptP extends Controller
{
    public function show(){
		return view('pages.receiptP.receiptP');
	}

	public function export(){
		$data['code'] = Input::get('code');
		$data['tanggal'] = Input::get('tanggal');
		$data['nama'] = Input::get('nama');
		$data['telp'] = Input::get('telp');
		$data['alamat'] = Input::get('alamat');

		$data['nominal'] = Input::get('nominal');
		$data['terbilang'] = Input::get('terbilang');
		// dd($data);

	    $pdf = PDF::loadView('pages.receiptP.form_receiptP', compact('data'))->setPaper('a4', 'potrait');
 
    	return $pdf->stream();
	}
}
