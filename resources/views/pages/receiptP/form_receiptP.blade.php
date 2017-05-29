<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Export PDF</title>
</head>
<body>
	<table>
		<tr>
			<td><h2>Receipt of Payment</h2></td>
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
				<h3>{{ $data['nominal'] }}</h3>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<h4>{{ $data['terbilang'] }}</h4>
			</td>
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