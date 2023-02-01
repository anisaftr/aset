<!DOCTYPE html>
<html lang="en">
<title>Data Barang</title>
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
                        <div class="card" style="background:white">
                            <div class="card-header">
                                <div class="card-tools">
                                    <a href="{{ route('create-data') }}" class="btn btn-success"> <i class="fas fa-plus-square"></i> Tambah Data </a>
                                    <a href="{{ route('exportdata') }}" class="btn btn-success"> <i class="fas fa-file-export"></i> Export </a>
                                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-file-import"></i> Import </a>
                                    
                                </div>
                            </div> 

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Barang</th>
                                        <th>Merk</th>
                                        <th>Tahun Pembelian</th>
                                        <th>Asal Usul Cara</th>
                                        <th>Kondisi</th>
                                        <th>Ket</th>
                                        <th>Detail</th>
                                    </tr>
                                    @foreach ($dtBarang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $item->merk }}</td>
                                        <td>{{ $item->tahun }}</td>
                                        <td>{{ $item->asal_cara }}</td>
                                        <td>{{ $item->kondisi }}</td>
                                        <td>{{ $item->ket }}</td>
                                        <td>
                                            <a href="{{ url('edit-data', $item->id) }}"><i class="fas fa-edit"></i></a> 
                                            | 
                                            <a href="{{ url('delete-data', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                       
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('importdata') }}" method="post" enctype="multipart/form-data">
                                    
                                    <div class="modal-body">
                                            <div class="form-group">
                                            
                                                @csrf
                                                <div class="form-group">
                                                    <input type="file" name="file" required="required">
                                                </div>
                                            
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Selesai</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                
                            </div>
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
        <!-- Page level custom scripts -->
        <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
