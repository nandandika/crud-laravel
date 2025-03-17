{{-- <form action="{{ route('buku.store') }}" method="POST">
    @csrf
    Judul: <input type="text" name="judul_buku" required><br>
    Pengarang: <input type="text" name="pengarang" required><br>
    Tahun Terbit: <input type="text" name="tahun_terbit" required><br>
    Penerbit: <input type="text" name="penerbit" required><br>
    <button type="submit">Simpan</button>
</form> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <h2>Tambah Produk</h2>
        <form action="{{route('buku.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" required>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" required>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" required>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-secondary"><a href="{{route('buku.index')}}" style="color:white; text-decoration: none;">Kembali</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>