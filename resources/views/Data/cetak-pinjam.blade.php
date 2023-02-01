<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table.static {
            position: relative;
            /* left:3% */
            border: 1px solid #543535;
        }

    </style>
    
    <title>Cetak Peminjaman</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Peminjaman Aset</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
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
            </tr>
            @foreach ($formCetak as $item)
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
                    <label class="">{{ $item->statuss->name }}</label>
                </td>
                @elseif($item->status == 2)
                <td>
                    <label class="">{{ $item->statuss->name }}</label>
                </td>
                @else($item->status == 3)
                <td>
                    <label class="">{{ $item->statuss->name }}</label>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>