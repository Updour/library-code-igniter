{form_input}<!-- iini bersifat finamis karna akan menggantikan form action
<form action="{index}insert/buku" method="POST" role="form" > -->
	<legend>Form Input Buku</legend>

	<div class="form-group">
		<label for="">judul buku</label>
		<input type="text" class="form-control" name="judul_buku" placeholder="masukkan judul buku">
	</div>

	<div>
		<label for="">Jumlah Halaman</label>
		<input type="text" class="form-control" name="jumlah_halaman" placeholder="masukkan jumlah halaman">
	</div>
	
	<div>
		<label for="">Penerbit</label>
		<input type="text" class="form-control" name="penerbit" placeholder="masukkan penerbit">
	</div>
	
	<div>
		<label for="">Tahun Terbit</label>
		<input type="year" class="form-control" name="tahun_terbit" placeholder="masukkan tahun terbit">
	</div>
	
	<div>
		<label for="">Kategori</label>
		<input type="text" class="form-control" name="kategori" placeholder="masukkan kategori">
	</div>

	<button type="submit" class="btn btn-primary">Input Buku</button>
</form>