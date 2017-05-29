@extends('master.master')

@section('user')
Shafly <span>Administrator</span>
@stop

@section('judul')
Quotation
@stop

@section('content')

<style type="text/css">
	div{
		/*border-style: solid;*/
	}
</style>
<form method="post" action="{{url('')}}/exportQ">
<div class="col-md-12" style="padding-bottom:100px;">
	<div style="width:800px; height:1131px; margin: auto; position:relative; border-color:#8bc34a; border-style:solid">
	<div class="col-md-12" style="margin-top: 20px">
		<div class="col-md-4" style="float:left"><h3>Quotation</h3></div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2" style="padding-top:6px;"><h5>Code:</h5></div>
		<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik code" name="code"></div>
	</div>
	<div class="col-md-12" style="margin-top: -11px">
		<div class="col-md-2" style="padding-top:6px;"><h5>Tangal:</h5></div>
		<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik tanggal" name="tanggal"></div>
	</div>

	<div class="col-md-12" style="margin-top: 50px">
		<div class="col-md-4" style="float:left"><h3>To:</h3></div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2" style="padding-top:6px;"><h5>Nama:</h5></div>
		<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik nama" name="nama"></div>
	</div>
	<div class="col-md-12" style="margin-top: -11px">
		<div class="col-md-2" style="padding-top:6px;"><h5>No. Telp:</h5></div>
		<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik telp" name="telp"></div>
	</div>
	<div class="col-md-12" style="margin-top: -11px">
		<div class="col-md-2" style="padding-top:6px;"><h5>Alamat:</h5></div>
		<div class="col-md-3"><input type="text" style="width:80%; border-style:none; background-color:#f8f8f8" placeholder="ketik alamat" name="alamat"></div>
	</div>



	<div class="col-md-12" style="margin-top: 100px">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Deskripsi</th>
					<th>Harga Per Unit</th>
					<th>Diskon</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $index=1; ?>
				<?php for($index; $index <=8; $index++){ ?>
				<tr <?php if($index%2==0) echo "class='success'"; ?>>
					<td>{{$index}}</td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>" placeholder="ketik" name="{{$index}}1"></td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>" placeholder="ketik" onkeyup="sync{{$index}}()" name="{{$index}}2" id="{{$index}}2"></td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>" placeholder="ketik" name="{{$index}}3"></td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>" placeholder="ketik" onkeyup="sync{{$index}}()" name="{{$index}}4" id="{{$index}}4"></td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>" placeholder="ketik" onkeyup="sync{{$index}}()" name="{{$index}}5" id="{{$index}}5"></td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8; <?php if($index%2==0) echo 'background-color:#dff0d8'; ?>"  name="{{$index}}6" id="{{$index}}6" value="0"></td>
				</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="6">Total</th>
					<th><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8;" id="total" name="total" onkeypress="hitung()"></th>
				</tr>
			</tfoot>
		</table>
	</div>

	<div class="col-md-12">
		<div class="col-md-12">
			<table>
				<tr>
					<td>Note:</td>
				</tr>
				<tr>
					<td>1</td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8;" name="note1" placeholder="ketik"></td>
				</tr>
				<tr>
					<td>2</td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8;" name="note2" placeholder="ketik"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><input type="text" style="width:100%; border-style:none; background-color:#f8f8f8;" name="note3" placeholder="ketik"></td>
				</tr>
			</table>
		</div>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="col-md-12" style="margin-top: 20px">
	</div>
</div>
	<div style="width:800px; margin: 50px auto; position:relative;">
		<button class="btn-success btn" type="submit">Buat</button>
	</div>
</div>
</form>
<script>
	<?php
		$index = 1;
		for($index; $index<=8; $index++){
	?>
		function sync{{$index}}()
		{
		  var n1 = document.getElementById({{$index}}2);
		  var n2 = document.getElementById({{$index}}4);
		  var diskon = document.getElementById({{$index}}5);
		  var total = document.getElementById({{$index}}6);
		  var total2 = document.getElementById('total');
		  total.value = n2.value * n1.value * diskon.value / 100;
		  total2.value = parseFloat(document.getElementById('16').value)
		  				+ parseFloat(document.getElementById('26').value)
		  				+ parseFloat(document.getElementById('36').value)
		  				+ parseFloat(document.getElementById('46').value)
		  				+ parseFloat(document.getElementById('56').value)
		  				+ parseFloat(document.getElementById('66').value)
		  				+ parseFloat(document.getElementById('76').value)
		  				+ parseFloat(document.getElementById('86').value);

		  console.log(total2.value);
		}
	<?php } ?>
</script>

@stop