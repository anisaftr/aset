<!DOCTYPE html>
<html lang="en">
<title>Form</title>
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
                    <h1 class="mt-4">Data Peminjaman</h1>
                        <div class="card" style="background:white">
                            <div class="card-header">
                                <div class="card-tools">
                                <a href="{{ route('cetak-pinjam') }}" target="_blank" class="btn btn-success"> <i class="fa-solid fa-print"></i> Cetak Data </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Bidang</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Barang</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                    @foreach ($form as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->bidang }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nip }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->tglpinjam)) }}</td>
                                        @if($item->status == 1)
                                        <td>
                                            <label class="" style="color:#DFD220">{{ $item->statuss->name }}</label>
                                        </td>
                                        @elseif($item->status == 2)
                                        <td>
                                            <label class="" style="color:green">{{ $item->statuss->name }}</label>
                                        </td>
                                        @else($item->status == 3)
                                        <td>
                                            <label class="" style="color:red">{{ $item->statuss->name }}</label>
                                        </td>
                                        @endif
                                        
                                        <td>
                                            <a href="{{ url('setuju', $item->id) }}"><i class="fa-solid fa-check" style="color:blue"></i></a> 
                                            | 
                                            <a href="{{ url('tidaksetuju', $item->id) }}"><i class="fa-solid fa-xmark" style="color:red"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-footer">

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
