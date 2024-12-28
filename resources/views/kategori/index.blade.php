@extends('layout.main')

@section('content')
<section class="content">
    <h2>Daftar Kategori Barang</h2>
    <a href="add-item.html" class="btn-primary">Tambah Baru</a>
    <table style="margin-top: 30px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Laptop</td>
          <td>
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
</section>
@endsection