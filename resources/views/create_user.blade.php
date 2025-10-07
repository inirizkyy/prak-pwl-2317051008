@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="h3 mb-4 fw-bold">Buat Pengguna Baru</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NPM</label>
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NPM">
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select">
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <a href="#" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
