<html>
<head>
	<title>Form Input Mata Kuliah</title>
</head>

<body>
	<center>
		<form method="POST" action=""> 
			<table>
				<tr>
					<th colspan="3">Form Input Data Mata Kuliah</th>
				</tr>

				<tr>
					<th colspan="3"></th>
				</tr>

				<tr>
					<th>Kode Mata Kuliah</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>

				<tr>
					<th>Nama Mata Kuliah</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>

				<tr>
					<th>SKS</th>
					<th>:</th>
					<td>
						<select name="SKS" id="sks">
							<option value=""> Pilih SKS </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>
							<option value="4"> 4 </option>
						</select>
					</td>
				</tr>

				<tr>
					<th colspan="3" align="center">
						<input type="submit" value="submit">
				</tr>
				
			</table>
	</center>
</body>