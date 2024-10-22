<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data | Test Coding Maulana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('ktps.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Pilih Nomor KK</label><br>

                                <input type="radio" id="input_baru" name="kk_option" value="baru" checked
                                    onclick="toggleInput()">
                                <label for="input_baru">Input Baru</label>

                                <input type="radio" id="pilih_kk" name="kk_option" value="pilih"
                                    onclick="toggleInput()">
                                <label for="pilih_kk">Pilih dari Daftar</label>
                            </div>

                            <label for="pilih_kk">Pilih dari Daftar</label>


                            <!-- Input Nomor KK baru -->
                            <div class="form-group" id="no_kk_input">
                                <label class="font-weight-bold">Nomor KK Baru</label>
                                <input type="text" name="no_kk_baru" class="form-control"
                                    placeholder="Nomor KK Baru">
                            </div>

                            <!-- Select Nomor KK dari database (disembunyikan awalnya) -->
                            <div class="form-group" id="no_kk_select" style="display:none;">
                                <label class="font-weight-bold">Pilih Nomor KK</label>
                                <select name="no_kk_pilih" class="form-control">
                                    <option value="">Pilih Nomor KK</option>
                                    @foreach ($no_kk_list as $no_kk)
                                        <option value="{{ $no_kk }}">{{ $no_kk }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIK</label>
                                <input type="text" name="no_ktp" class="form-control" placeholder="NIK" required>
                                @error('no_ktp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="font-weight-bold">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control"
                                            placeholder="Nama" required>
                                        @error('tanggal_lahir')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="font-weight-bold">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value=""> Pilih </option>
                                            <option value="L"> Laki - Laki </option>
                                            <option value="P"> Perempuan </option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="font-weight-bold">Agama</label>
                                        <select class="form-control" name="agama">
                                            <option value=""> Pilih </option>
                                            <option value="Islam"> Islam </option>
                                            <option value="Hindu"> Hindu </option>
                                            <option value="Budha"> Budha </option>
                                            <option value="Kristen"> Kristen </option>
                                            <option value="Katholik"> Katholik </option>
                                        </select>
                                        @error('agama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan"
                                    required>
                                @error('pekerjaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                    required>
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script> --}}

    <script>
        function toggleInput() {
            if (document.getElementById('input_baru').checked) {
                document.getElementById('no_kk_input').style.display = 'block';
                document.getElementById('no_kk_select').style.display = 'none';
            } else if (document.getElementById('pilih_kk').checked) {
                document.getElementById('no_kk_input').style.display = 'none';
                document.getElementById('no_kk_select').style.display = 'block';
            }
        }
    </script>

</body>

</html>
