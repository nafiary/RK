<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Export PDF</title>
</head>
<body>
	<table>
		<tr>
			<td><h2>Purchase Order</h2></td>
		</tr>
		<tr>
			<td>Code:</td>
			<td>{{ $data['code'] }}</td>
		</tr>
		<tr>
			<td>Tanggal:</td>
			<td>{{ $data['tanggal'] }}</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td><h3>To</h3></td>
		</tr>
		<tr>
			<td>Nama:</td>
			<td>{{ $data['nama'] }}</td>
		</tr>
		<tr>
			<td>NO. telp:</td>
			<td>{{ $data['telp'] }}</td>
		</tr>
		<tr>
			<td>Alamat:</td>
			<td>{{ $data['alamat'] }}</td>
		</tr>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td colspan="5">
				<table style="margin-top: 40px">
					<tr style="white-space:nowrap">
						<th>No</th>
						<th>Nama Barang</th>
						<th>Jumlah</th>
						<th>Deskripsi</th>
						<th>Harga Per Unit</th>
						<th>Diskon</th>
						<th>Total</th>
					</tr>
					<?php 
						$index=1;
						for($index; $index<=8; $index++){
					?>
					<tr>
						<td>{{ $index }}</td>
						<td>{{ isset($data[$index.'1']) ? $data[$index.'1'] : '' }}</td>
						<td>{{ isset($data[$index.'2']) ? $data[$index.'2'] : '' }}</td>
						<td>{{ isset($data[$index.'3']) ? $data[$index.'3'] : '' }}</td>
						<td>{{ isset($data[$index.'4']) ? $data[$index.'4'] : '' }}</td>
						<td>{{ isset($data[$index.'5']) ? $data[$index.'5'] : '' }}</td>
						<td>{{ isset($data[$index.'6']) ? $data[$index.'6'] : '' }}</td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="6">TOTAL</td>
						<td>{{ isset($data['total']) ? $data['total'] : '' }}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td><p style="margin-top: 40px">Note:</p></td>
		</tr>
		<tr>
			<td>1</td>
			<td>{{ isset($data['note1']) ? $data['note1'] : '-' }}</td>
		</tr>
		<tr>
			<td>2</td>
			<td>{{ isset($data['note2']) ? $data['note2'] : '-' }}</td>
		</tr>
		<tr>
			<td>3</td>
			<td>{{ isset($data['note3']) ? $data['note3'] : '-' }}</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3"><p style="margin-top: 180px">Dibuat oleh</p></td>
			<td><p style="margin-top: 180px">Disetujui Oleh</p></td>
		</tr>
	</table>
</body>
</html>