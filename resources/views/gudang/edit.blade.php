@extends('layout.main')

@section('content')
<section class="forms-container">
  <div class="form-section">
    <h2>Perbarui Gudang {{ $gudang->nama }}</h2>
    <form class="input-form" action="{{ route('gudang.perbarui', $gudang->id ) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="warehouseName">Nama Gudang</label>
        <input
          type="text"
          id="warehouseName"
          name="nama"
          value="{{ $gudang->nama }}"
          required
        />
      </div>
      <button type="submit" class="btn-submit">Tambahkan Gudang</button>
    </form>
  </div>
</section>
@endsection