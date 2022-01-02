@extends('layouts.admin_main')
@section('admincontent')
    <section class="section">

        <div class="section-header">
            <h1>Kategori <small>Tambah Data</small></h1>
        </div>

        <div class="section-body">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('kategori.index') }}">
                            <button type="button" class="btn btn-outline-info">
                                <i class="fas fa-arrow-circle-left"></i> Back
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection()
