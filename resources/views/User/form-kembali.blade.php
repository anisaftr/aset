
<!DOCTYPE html>
<html lang="en">

    <title>Form Kembali</title>
        
        <ul class="navbar-nav my-3 mx-4" style="float:right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:blue"><i class="fas fa-user fa-xl"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Data Peminjaman</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <style>
              
            </style>


    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <!-- Navbar -->
            @include('Nav.header')
            <!-- End Navbar -->   


            <link rel="stylesheet" href="{{ asset('css/form-data.css') }}">
            <div class="container mt-5 mb-5 d-flex justify-content-center">
                <div class="card px-1 py-4">
                    <div class="card-header" style="text-align:center">
                        <h2>Form Pengembalian Aset</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('formkembali-simpan') }}" method="POST">
                        @csrf 
                            <div class="form-group mb-2">
                                <select class="form-control" name="bidang" id="bidang" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="Bidang">
                                <option selected>Bidang</option>
                                <option>Sekretariat</option>
                                <option>Persandian</option>
                                <option>Pengembangan Sumber Daya dan Layanan Publik (PSDLP)</option>
                                <option>Penyelenggaraan E-Government</option>
                                <option>Pengelolaan Informasi dan Komunikasi Publik (PIPK)</option>
                                </select>
                                @error('bidang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="nama" id="nama" placeholder="Nama" class="form-control @error('nama') is-invalid @enderror" autofocus>
                                @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="nip" id="nip" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="NIP">
                                @error('nip')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="Nama Barang">
                                @error('nama_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="kode_barang" id="kode_barang" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="Kode Barang">
                                @error('kode_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="jumlah" id="jumlah" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="Jumlah">
                                @error('jumlah')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="date" name="tglkembali" id="tglkembali" class="form-control @error('nama') is-invalid @enderror" placeholder="Tanggal Pinjam">
                                @error('tglpinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <center>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Kirim Pengembalian</button>
                            </div>
                            </center>
                        </form>
                    </div>
                    @include('sweetalert::alert')
                </div>
            </div>
            
                <!-- <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
