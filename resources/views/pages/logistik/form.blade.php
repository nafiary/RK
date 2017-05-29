@extends('master.master')

@section('user')
Shafly <span>Administrator</span>
@stop

@section('judul')
Form Update Data
@stop

@section('content')
<form class="form-horizontal" method="post" action="{{url('')}}/update">
	<div class="form-group">
		<label for="selector1" class="col-sm-2 control-label">Supplier</label>
		<div class="col-sm-8">
			<select name="selector1" id="selector1" class="form-control1">
				@foreach($supplier as $n)
					<option value="{{$n->id}}" <?php if($items->id_supplier==$n->id) echo "selected";?>>{{$n->nama_supplier}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="selector2" class="col-sm-2 control-label">Supplier</label>
		<div class="col-sm-8">
			<select name="selector2" id="selector2" class="form-control1">
				@foreach($kategori as $n)
					<option value="{{$n->id}}" <?php if($items->id_kategori==$n->id) echo "selected";?>>{{$n->kategori}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
		<div class="col-sm-8">
			<input type="text" class="form-control1" name="nama" value="{{$items->nama}}">
		</div>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Merk</label>
		<div class="col-sm-8">
			<input type="text" class="form-control1" name="merk" value="{{$items->merk}}">
		</div>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Harga</label>
		<div class="col-sm-8">
			<input type="text" class="form-control1" name="harga" value="{{$items->harga}}">
		</div>
	</div>
	<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Stok</label>
		<div class="col-sm-8">
			<input type="text" class="form-control1" name="stok" value="{{$items->stok}}">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-2">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="id" value="{{ $items->id }}">
			<button class="btn-success btn" type="submit">Submit</button>
			<a class="btn-default btn" href="{{url('')}}">Cancel</a>
		</div>
	</div>
</form>
@stop