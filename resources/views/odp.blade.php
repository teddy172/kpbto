@extends('layout/main')<!-- ini kode parent -->

@section('kontainer')<!-- kodenya tulis disini -->
<table class="table">
				<thead>
					<tr>
						<th scope="col">NO</th>
						<th scope="col">STO</th>
						<th scope="col">ODC</th>
						<th scope="col">Nama</th>
						<th scope="col">Pasif</th>
						<th scope="col">Port tersedia</th>
						<th scope="col">Lokasi</th>
					</tr>
				</thead>
				<tbody class="table-group-divider">
					<tr>
						<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
					</tr>
				</tbody>
				</table> 
@endsection