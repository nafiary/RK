<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Input;

class Quotation extends Controller
{
    public function show(){
		return view('pages.quotation.quotation');
	}

	public function export(){
		$data['code'] = Input::get('code');
		$data['tanggal'] = Input::get('tanggal');
		$data['nama'] = Input::get('nama');
		$data['telp'] = Input::get('telp');
		$data['alamat'] = Input::get('alamat');

		$index=1;
		for($index; $index<=8; $index++){
			$data[$index.'1'] = Input::get($index.'1');
			$data[$index.'2'] = Input::get($index.'2');
			$data[$index.'3'] = Input::get($index.'3');
			$data[$index.'4'] = Input::get($index.'4');
			$data[$index.'5'] = Input::get($index.'5');
			$data[$index.'6'] = Input::get($index.'6');
		}

		$data['note1'] = Input::get('note1');
		$data['note2'] = Input::get('note2');
		$data['note3'] = Input::get('note3');
		$data['total'] = Input::Get('total');
		// dd($data);

	    $pdf = PDF::loadView('pages.quotation.form_quotation', compact('data'))->setPaper('a4', 'potrait');
 
    	return $pdf->stream();
	}
}
