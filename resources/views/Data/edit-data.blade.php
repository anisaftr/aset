<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="/css/index.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

    <title>Edit Data</title>
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
                            <h2>Edit Data Barang</h2>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('update-data', $dt->id) }}" method="POST">
                            @csrf 
                                <div class="form-group mb-2">
                                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang" required value="{{ $dt->nama_barang }}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang"required value="{{ $dt->kode_barang }}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk"required value="{{ $dt->merk }}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun"required value="{{ $dt->tahun }}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="asal_cara" id="asal_cara" class="form-control" placeholder="Asal Usul Cara"required value="{{ $dt->asal_cara }}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="kondisi" id="kondisi" class="form-control" placeholder="Kondisi"required value="{{ $dt->kondisi }}">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="ket" id="ket" class="form-control" placeholder="Ket"required value="{{ $dt->ket }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Ubah Data</button>
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
