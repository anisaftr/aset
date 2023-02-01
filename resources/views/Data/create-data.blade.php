<!DOCTYPE html>
<html lang="en">
    <title>Create Data</title>
    <body class="sb-nav-fixed">  
        <div id="layoutSidenav">
            <!-- Navbar -->
            @include('Nav.header')
            <!-- End Navbar -->  
            <!-- Navbar -->
            @include('Nav.navbar')
            <!-- End Navbar -->               
            <!-- Sidebar -->
            @include('Nav.sidebar')
            <!-- End Sidebar -->   
            <div id="layoutSidenav_content">
                <main>
                <div class="content">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Barang</h1>
                        <div class="card-header">
                            <h2>Create Data Barang</h2>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('simpan-data') }}" method="POST">
                            @csrf 
                                <div class="form-group mb-2">
                                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang">
                                    @error('nama_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang">
                                    @error('kode_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk">
                                    @error('merk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun">
                                    @error('tahun')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="asal_cara" id="asal_cara" class="form-control" placeholder="Asal Usul Cara">
                                    @error('asal_cara')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="kondisi" id="kondisi" class="form-control" placeholder="Kondisi">
                                    @error('kondisi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="ket" id="ket" class="form-control" placeholder="Ket">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan Data</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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
