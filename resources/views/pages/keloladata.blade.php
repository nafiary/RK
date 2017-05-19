@extends('master.master')

@section('user')
Shafly <span>Administrator</span>
@stop

@section('judul')
Kelola Data
@stop

@section('content')
<div class="form-group">
<div class="col-sm-12" style="text-align:right">
		<a class="btn-primary btn" href="{{url('')}}/input">Input</a>
	</div>
</div>
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
		@foreach($items as $index=>$n)
		<tr <?php if($index%2==1) echo "class='success';"?>>
			<th scope="row">{{$index+1}}</th>
			<td>{{$n->nama_supplier}}</td>
			<td>{{$n->kategori}}</td>
			<td>{{$n->nama}}</td>
			<td>{{$n->merk}}</td>
			<td>{{$n->harga}}</td>
			<td>{{$n->stok}}</td>
			<td>
				<a type="button" class="btn btn-info" href="{{url('')}}/form/{{$index+1}}">Edit</a>
				<a type="button" class="btn btn-danger" href="{{url('')}}/delete/{{$n->id_items}}">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $items->render() !!}

<!-- <a href="{{url('')}}/coba">tes</a> -->
@stop