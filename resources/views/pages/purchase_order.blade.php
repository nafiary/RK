@extends('master.master')

@section('user')
Shafly <span>Administrator</span>
@stop

@section('judul')
Purchase Order
@stop

@section('content')

<style type="text/css">
	div{
		/*border-style: solid;*/
	}
</style>
<div class="col-md-12" style="padding-bottom:100px;">
	<div style="width:800px; height:1131px; margin: auto; position:relative; border-color:#8bc34a; border-style:solid">
		<div class="col-md-12" style="margin-top: 20px">
			<div class="col-md-4" style="float:left"><h3>Purchase Order</h3></div>
		</div>
		<div class="col-md-12">
			<div class="col-md-2" style="padding-top:6px;"><h5>Code:</h5></div>
			<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik code"></div>
		</div>
		<div class="col-md-12" style="margin-top: -11px">
			<div class="col-md-2" style="padding-top:6px;"><h5>Tangal:</h5></div>
			<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik tanggal"></div>
		</div>

		<div class="col-md-12" style="margin-top: 50px">
			<div class="col-md-4" style="float:left"><h3>To:</h3></div>
		</div>
		<div class="col-md-12">
			<div class="col-md-2" style="padding-top:6px;"><h5>Nama:</h5></div>
			<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik nama"></div>
		</div>
		<div class="col-md-12" style="margin-top: -11px">
			<div class="col-md-2" style="padding-top:6px;"><h5>No. Telp:</h5></div>
			<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik telp"></div>
		</div>
		<div class="col-md-12" style="margin-top: -11px">
			<div class="col-md-2" style="padding-top:6px;"><h5>Alamat:</h5></div>
			<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik alamat"></div>
		</div>



		<div class="col-md-12" style="margin-top: 50pxpx">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Supplier</th>
						<th>Kategori</th>
						<th>Nama</th>
						<th>Merk</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop