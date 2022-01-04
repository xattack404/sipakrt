@extends('layouts.admin_main')
@section('admincontent')
    <section class="section">

        <div class="section-header">
            <h1>Data Warga</h1>
        </div>
        <div class="section-body">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-header">
                        <a href="{{ route('kategori.create') }}">
                            <button type="button" class="btn btn-primary">Tambah Data</button>
                        </a>
                    </div>
                    <div class="card-body" style="overflow: scroll">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">RT/RW</th>
                                    <th scope="col">NO HP</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $kategori)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="{{ route('kategori.edit', ['id' => $kategori->id]) }}">
                                                <button type="button" class="btn btn-sm btn-info">Edit</button>
                                            </a>
                                            <a href="{{ route('kategori.destroy', ['id' => $kategori->id]) }}"
                                                onclick="return confirm('Delete data?');">
                                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            <center>Data kosong</center>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {!! $data->appends(request()->except('page'))->render() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
