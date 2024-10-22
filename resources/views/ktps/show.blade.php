<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data KTP - Test Coding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        <hr>
                        <h4>Data diri dari : {{ $ktp->nama }}</h4>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>KK</label>
                                    <input type="text" class="form-control" readonly value="{{ $ktp->no_kk }}">
                                </div>
                                <div class="col-md-6">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" readonly value="{{ $ktp->no_ktp }}">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" readonly value="{{ $ktp->nama }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control" readonly
                                            value="{{ $ktp->tanggal_lahir }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" readonly
                                            value="{{ $ktp->jenis_kelamin }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Agama</label>
                                        <input type="text" class="form-control" readonly value="{{ $ktp->agama }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" readonly value="{{ $ktp->alamat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" readonly
                                            value="{{ $ktp->pekerjaan }}">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('ktps.index') }}" class="btn btn-md btn-secondary">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
