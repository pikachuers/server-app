<table style="width: 100%" border="2">
	<thead>
		<tr>
			<td colspan=2 style="text-align: center;"><b>{{ Config::get('serverperpustakaan.namaserver') }}</b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Kepada: </td>
			<td>{{$nama ."-". $email }}</td>
		</tr>
		<tr>
			<td>Perihal: </td>
			<td>{{ $konten }}</td>
		</tr>
	</tbody>
</table>