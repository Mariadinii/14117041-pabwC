<!DOCTYPE html>
<html>

<head>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=" bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
    <title> Form Biodata </title>
<body>
	<div class="container">
		<h2>Biodata</h2>
		<form method="POST" action="TM_7hasil.php" enctype="multipart/form-data">
            
			<div class="form-group">
				<label for="Nama">Nama :</label>
				<input type="text" name="Nama" class="form-control" id="Nama" required>
			</div>
            
			<div class="form-group">
				<label for="Alamat">Alamat :</label>
				<input type="text" name="Alamat" class="form-control" id="Alamat">
			</div> 
			<div class="form-group">
				<label for="jk">Jenis Kelamin :</label> &nbsp;
				<input type="radio" name="jk" id="jk" value="Laki-laki">Laki-laki &nbsp;
				<input type="radio" name="jk" id="jk" value="Perempuan">Perempuan &nbsp;
			</div>
			<div class="form-group">
				<label for="Goldar">Golongan Darah :</label>
				<select class="form-control" name="Goldar" id="Goldar">
					<option disabled hidden selected>Pilih Golongan Darah</option>
					<option value="A">A</option>
					<option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
			</div>
			<label class="form-check-label">Hobby :</label>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Menyanyi" name="Hobby[]"> Rebahan
				</label>
			</div>
            <div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Rebahan" name="Hobby[]"> Main Game
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Membaca" name="Hobby[]"> Olahraga
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Travelling" name="Hobby[]"> Memasak
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Main Game" name="Hobby[]"> Melukis
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" value="Rebahan" name="Hobby[]"> Menulis
				</label>
			</div>
            <div class="form-group">
				<label for="Ket">Keterangan :</label>
				<textarea type="text" name="Ket" class="form-control" id="Ket"></textarea>
			</div>
			<button type="Submit" class="btn btn-primary" name="Submit">Simpan</button>
		</form>
	</div>
</body>
</html>