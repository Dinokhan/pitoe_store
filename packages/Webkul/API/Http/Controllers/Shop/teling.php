@extends('layout.main')
@section('title', $title)
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Input Pengeluaran</h4>
      </div>
      <div class="card-body ">
        <form method="post" method="post" action="{{route('credit.store')}}" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="row">
            <label class="col-md-3 col-form-label">Penanggung Jawab</label>
            <div class="col-md-9">
              <div class="form-group">
                <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" readonly="">
                <input type="hidden" name="table_number" class="form-control" value="1" id="inputNama" placeholder="ex: 12">
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-md-3 col-form-label">Cabang</label>
            <div class="col-md-9">
              <div class="form-group">
                <input type="text" name="lokasi" value="{{auth()->user()->lokasi}}" class="form-control" readonly="">
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-md-3 col-form-label">Jenis Penerimaan</label>
            <div class="col-md-9">
              <div class="form-group">
               <select class="form-control" name="payment_id">
                <option value="">-- Pilih Terima --</option>
                @foreach ($pay as $row)
                @if ($row->name == 'Kredit')
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-md-3 col-form-label">Keperluan</label>
          <div class="col-md-9">
            <div class="form-group">
             <select class="form-control" name="keperluan">
              <option value="">-- Pilih Keperluan --</option>
              <option value="Keperluan Kantor">Keperluan Kantor</option>
              <option value="Setoran ke Pusat">Setoran ke Pusat</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Nominal</label>
        <div class="col-md-9">
          <div class="form-group">
            <input id="masking1" type="text" name="total" class="form-control" id="inputKredit" placeholder="Masukkan Rupiah">
            <input type="hidden" name="created_by" value="{{auth()->user()->id}}" class="form-control" >

          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Bukti</label>
        <div class="col-md-9">
          <div class="form-group">
            <span class="btn btn-rose btn-round btn-file">
              <span class="fileinput-new">Pilih Gambar</span>
              <input type="file" name="image" id="image" required="">
            </span>
          </div>

        </div>
      </div>

    </div>
    <div class="card-footer ">
      <div class="row">
        <label class="col-md-3"></label>
        <div class="col-md-9">
          <button type="reset" class="btn btn-fill btn-danger">Reset</button>
          <button type="submit" class="btn btn-fill btn-success">Masuk</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div></div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">{{$title}}</h4>
        <!-- Example split danger button -->
        
      </div>
      <div class="card-body">
        <div class="toolbar">
        </div>
        <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead style="font-size: 10px; ">
            <tr>
              <th >No</th>
              <th width="10%">Penanggung Jawab</th>
              <th>Pembayaran</th>
              <th>Keperluan</th>
              <th>Cabang</th>
              <th>Uang Masuk</th>
              <th>Uang Keluar</th>
              <th>Saldo</th>
              <th>Tanggal</th>

              <th  class="disabled-sorting text-right">Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th colspan="5" class="text-center">Total</th>
              <th>Uang Masuk</th>
              <th>Uang Keluar</th>
              <th>Saldo</th>
              <th>Tanggal</th>

              <th class="disabled-sorting text-center">Actions</th>
            </tr>
          </tfoot>
          <tbody>
            @php
            $nomor = 1;
            function rupiah($m)
            {
              $rupiah = "Rp ".number_format($m,0,",",".").",-";
              return $rupiah;
            }
            @endphp
            <?php $uang_keluar = 0; ?>
            <?php $uang_masuk = 0; ?>
            <?php $saldo = 0; ?>
            @foreach ($data as $row)
            <tr>
             <td>{{$nomor++}}</td>
             <td>{{$row->name}}</td>
             <td>{{$row->payment->name}}</td>
             <td>{{$row->keperluan}}</td>
             <td>{{$row->lokasi}}</td>
             @if ($row->payment->name!='Kredit')
             <td>Rp <?php echo number_format($row->total); ?></td>
             @endif
             <td>
               @if  ($row->payment->name=='Kredit')
               <td>Rp <?php echo number_format($row->total); ?></td>
               @endif
             </td>
             <td>Rp <?php echo number_format($row->total); ?></td>
             <td>{{$row->created_at}}</td>
             <td class="text-center">
              @if ($row->payment->name!='Kredit')
              @include('backend.admin.order.modal')
              <form id="data-{{ $row->id }}" action="{{route('kas.destroy',$row->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('delete')}}
              </form>
              <a href="{{url('admin/order/'.$row->id.'/edit')}}" data-toggle="modal" data-target="#modal-edit{{$row->id}}"  class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
              @csrf
              @method('DELETE')
              @if (auth()->user()->level == 'Owner')

              <button type="submit" onclick="deleteRow( {{ $row->id }} )" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></button>
              @endif
              @else
              @include('backend.admin.kas.modal')
              <form id="data-{{ $row->id }}" action="{{route('kas.destroy',$row->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('delete')}}
              </form>
              <a href="{{url('admin/kas/'.$row->id.'/edit')}}" data-toggle="modal" data-target="#modal-edit{{$row->id}}"  class="btn btn-round btn-primary btn-icon btn-sm like"><i class="fas fa-file"></i></a>
              @csrf
              @method('DELETE')
              @if (auth()->user()->level == 'Owner')
              
              <button type="submit" onclick="deleteRow( {{ $row->id }} )" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></button>
              @endif
              @endif

            </td>
          </tr>
          @if ($row->payment->name!='Kredit')
          <?php $uang_masuk += $row->total; ?>
          @endif

          @if ($row->payment->name=='Kredit')
          <?php $uang_keluar += $row->total; ?>
          @endif

          <?php $saldo = $uang_masuk - $uang_keluar ; ?>
          @endforeach
        </tbody>
        <tr>
          <td colspan="5"></td>
          <td>Rp. {{number_format($uang_masuk)}}</td>
          <td>Rp. {{number_format($uang_keluar)}}</td>
          <td>Rp. {{number_format($saldo)}}</td>
          <td colspan="2"></td>
        </tr>
      </table>
    </div>
  </div>
</div>
</div>
@section('script')
<script type="text/javascript"> 
  $(document).ready(function () {

    $('#table-datatables').DataTable({
      "scrollX": true,
      dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
      "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
              return typeof i === 'string' ?
              i.replace(/[\Rp,]/g, '')*1 :
              typeof i === 'number' ?
              i : 0;
            };
            // Total Uang Masuk
            total = api
            .column( 6 )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            // Total over this page
            pageTotal = api
            .column( 6, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            var reverse = pageTotal.toString().split('').reverse().join(''),
            a  = reverse.match(/\d{1,3}/g);
            a  = a.join('.').split('').reverse().join('');
            // Update footer
            $( api.column( 6 ).footer() ).html(
              'Rp '+ a
              );

            // Total Uang Keluar
            total2 = api
            .column( 5 )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            // Total over this page
            pageTotal2 = api
            .column( 5, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            var reverse = pageTotal2.toString().split('').reverse().join(''),
            b  = reverse.match(/\d{1,3}/g);
            b  = b.join('.').split('').reverse().join('');
            // Update footer
            $( api.column( 5 ).footer() ).html(
              'Rp '+ b
              );

            // Total Uang Akhir
            total3 = api
            .column( 7 )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            // Total over this page
            pageTotal3 = api
            .column( 7, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
              return pageTotal2 - pageTotal
            }, 0 );

            var reverse = pageTotal3.toString().split('').reverse().join(''),
            c  = reverse.match(/\d{1,3}/g);
            c  = c.join('.').split('').reverse().join('');
            // Update footer
            $( api.column( 7 ).footer() ).html(
              'Rp '+ c
              );

          }
        });
  });
</script>
<script type="text/javascript">

  var rupiah = document.getElementById('rupiah');
  rupiah.addEventListener('keyup', function(e){
    rupiah.value = formatRupiah(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split       = number_string.split(','),
    sisa        = split[0].length % 3,
    rupiah        = split[0].substr(0, sisa),
    ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
  </script>
  @endsection
  @endsection
