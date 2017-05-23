<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\items;
use DB;
use Response;
use PDF;
use Illuminate\Support\Facades\Input;

class LogistikController extends Controller {
	public function coba(){
		$filename = '/pdf/hospital.pdf';
		$path = public_path($filename);

		return Response::make(file_get_contents($path), 200, [
		    'Content-Type' => 'application/pdf',
		    'Content-Disposition' => 'inline; filename="'.$filename.'"'
		]);
	}

	public function tambahBarang(){
		$data['supplier'] = DB::table('supplier')->get();
		$data['kategori'] = DB::table('kategori_item')->get();

		return view('pages.form2')->with($data);
	}

	public function storeData(Request $request){
		$items = new items;

		$items->id_supplier = $request->selector1;
		$items->id_kategori = $request->selector2;
		$items->nama = $request->nama;
		$items->merk = $request->merk;
		$items->harga = $request->harga;
		$items->stok = $request->stok; 

		if($items->save()) return redirect('/');
		else return redirect('input');
	}

	public function updateBarang($id){
		$data['items'] = items::find($id);
		$data['supplier'] = DB::table('supplier')->get();
		$data['kategori'] = DB::table('kategori_item')->get();

		return view('pages.form')->with($data);
	}

	public function show(){
		// $query = "select * from items, kategori_item, supplier where items.id_supplier=supplier.id and items.id_kategori=kategori_item.id";
		// $items = DB::select($query);
		$barang = DB::table('items')
				->select('items.id as id_items','items.id_supplier', 'supplier.nama_supplier', 'kategori_item.kategori', 'items.id_kategori', 'items.nama', 'items.merk', 'items.harga', 'items.stok')
				->join('supplier', 'items.id_supplier', '=', 'supplier.id')
				->join('kategori_item', 'items.id_kategori', '=', 'kategori_item.id')
				->paginate(6);

		// dd($barang);
		return view('pages.keloladata', ['items' => $barang]);
	}

	public function delete($id){
		$items = items::find($id);
		$items->delete();

		return redirect('/');
	}

	public function sendData(Request $request){
		$barang = items::find($request->id);

		// dd($request);

		$barang->id_supplier = $request->selector1;
		$barang->id_kategori = $request->selector2;
		$barang->nama = $request->nama;
		$barang->merk = $request->merk;
		$barang->harga = $request->harga;
		$barang->stok = $request->stok;

		if($barang->save()) return redirect('/');
		else return redirect('/update/$request->id');
	}

}
