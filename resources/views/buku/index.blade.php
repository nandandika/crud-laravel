<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 style="margin-left: 140px;">Data Buku</h2>
    <button type="button" class="btn btn-primary" style="margin-left: 140px;"><a href="{{ route('buku.create')}}" style="color:white; text-decoration: none;">Tambah Data</a></button>
    <table class="table table-bordered" border="1" style="width:80%; margin:auto;">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
        <?php //if (!empty($buku)) : ?>
        @foreach ($buku as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->judul_buku }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td><button type="button" class="btn btn-warning"><a href="{{route('buku.edit', $buku->id)}}" style="color:white; text-decoration: none;">Edit</a></button>
                <form class="btn btn=danger" action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </form></td>
        </tr>
        @endforeach
        {{-- <?php //else : ?> --}}
                {{-- <tr>
                    <td colspan="5" class="text-center">Data tidak ditemukan</td>
                </tr> --}}
            <?php //endif; ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>