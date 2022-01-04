@extends('layouts.admin_main')
@section('admincontent')
    <section class="section">

        <div class="section-header">
            <h1>Data Warga <small>Tambah Data</small></h1>
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
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Ketua RT</label>
                                <input type="text" name="nama_ketua_rt" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>RT/RW</label>
                                <select required name="kategori" class="form-control" data-live-search="true">
                                    <option value="1">RT1/RW1 </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>* Foto Baru</label> <br>
                                <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')"
                                    required />
                            </div>

                            <div class="form-group">
                                <b>Preview Gambar</><br>
                                    <img id="preview" src="" alt="" width="35%" />
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function tampilkanPreview(foto, idpreview) { //membuat objek gambar
                var gb = foto.files;
                //loop untuk merender gambar
                for (var i = 0; i < gb.length; i++) { //bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview = document.getElementById(idpreview);
                    var reader = new FileReader();
                    if (gbPreview.type.match(imageType)) { //jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) {
                            return function(e) {
                                element.src = e.target.result;
                            };
                        })(preview);
                        //membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    } else { //jika tipe data tidak sesuai
                        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                    }
                }
            }
        </script>
    </section>
@endsection()
