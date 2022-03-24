<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore the Jungle with Daskom</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicon/favicon-16x16.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar-ex-admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/form-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Fira+Code:wght@400&display=swap" rel="stylesheet">   
</head>
<body style="background-color: #2c4d16">
  <div class="modal fade" id="CaasInput" tabindex="-1" aria-labelledby="CaasInputLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-background">
        <div class="p-4 text-center">
            <span class="text-center rec-title">Buat Shifts Baru</span>
        </div>
        <div class="modal-body  text-center">
        <form method="POST" action="\addShift">
                @csrf
            <label class="pb-2 text-area-set" for="namashift">Tahap:</label>
            <select class="form-select-costum text-area-fill" id="namashift" name="namashift" value="SHIFT 1">
                <option name="namashift" value="SHIFT 1">SHIFT 1</option>
                <option name="namashift" value="SHIFT 2">SHIFT 2</option>
                <option name="namashift" value="SHIFT 3">SHIFT 3</option>
                <option name="namashift" value="SHIFT 4">SHIFT 4</option>
                <option name="namashift" value="SHIFT 5">SHIFT 5</option>
                <option name="namashift" value="SHIFT 6">SHIFT 6</option>
                <option name="namashift" value="SHIFT 7">SHIFT 7</option>
            </select> 
            <div class="pt-2 pb-2">
                <label style="display: block" class="text-area-set" for="hari">Tanggal :
                <input class="text-center text-area-fill" type="date" name="hari" placeholder="tanggal" required>
            </div>
            <div class="pt-2 pb-2">
                <label style="display: block" class="text-area-set" for="jam_start">Waktu Mulai :
                <input class="text-center text-area-fill" type="time" name="jam_start" placeholder="jam" required>
            </div>
            <div class="pt-2 pb-2">
              <label style="display: block" class="text-area-set" for="jam_end">Waktu Selesai :
              <input class="text-center text-area-fill" type="time" name="jam_end" placeholder="jam" required>
          </div>
            <div class="pt-2 pb-2">
              <label style="display: block" class="text-area-set" for="kuota">Kuota :  
              <input autocomplete="off" class="text-center text-area-fill" type="number" name="kuota" placeholder="Kuota" required>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="button-cancel" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="button-submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Reset Plot-->
  <div class="modal fade" id="ResetPlot" tabindex="-1" aria-labelledby="ResetPlotLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-background">
        <div class="p-4 pb-1 text-center">
            <span class="text-center rec-title">RESET PLOT</span>
        </div>
        <div class="modal-body  text-center">
        <form method="POST" action="\resetplot">
                @csrf
            <div class="pb-2">
              <span class="text-admin-warning">Apakah Anda yakin Reset Plottingan?</span> 
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="button-submit" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="button-cancel">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal DelAll SHIFT-->
  <div class="modal fade" id="delAllShift" tabindex="-1" aria-labelledby="delAllShiftLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-background">
        <div class="p-4 pb-1 text-center">
            <span class="text-center rec-title">DELETE ALL SHIFT</span>
        </div>
        <div class="modal-body  text-center">
        <form method="POST" action="\delAllShift">
                @csrf
            <div class="pb-2">
              <span class="text-admin-warning">Apakah Anda yakin menghapus seluruh SHIFT?</span> 
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="button-submit" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="button-cancel">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@include('layouts/navbarAdminBack')
@section('navbackadmin')
@endsection

<section>
<div class="container pb-5">
    <div class="pt-5 d-flex justify-content-center">
        <div class="checker-box pt-5">
          <div class="text-center text-nim-head">
            <span>SHIFT Daskom Choose You</span>
          </div>
          @if($countshift!=0)
          <div class="text-center pt-4 pb-2">
            <div>
                <a href="\ResultPlot"><button type="submit" class="button-submit-find ms-1">Lihat Plottingan</button></a>
              </div>
          </div>
          @else
          @endif
          <div class="text-center pt-3 pb-3">
            <span class="text-admin-warning">Kepada Admin, Mohon teliti sebelum mengaktifkan pengisian jadwal, terima kasih</span>
          </div>
          <div class="text-center pt-3 pb-3" style="background-color: rgb(125, 238, 97);border-radius: 1rem;padding: 0 20px 0 20px;">
            <span style="color:#000;font-weight:700;font-size:28px">Total Jadwal : {{$countshift}}</span>
          </div>
        </div>
      </div>
    <div class="p-3">
        <div class="card-body">
            <div class="d-flex justify-content-center pb-1">
              @if($ceklulus->isPlotRun==0)
                <div class="d-flex text-center">
                  <div >
                    <button style="font-size:17px;color:whitesmoke;" type="button" class="button-submit-find mx-lg-2 mx-0" data-bs-toggle="modal" data-bs-target="#CaasInput">Shift Baru</button>
                  </div>
                  <div > 
                    <button style="background-color:#bd3838;font-size:17px;color:whitesmoke;" type="button" class="button-submit-find mx-lg-2 mx-0" data-bs-toggle="modal" data-bs-target="#ResetPlot">Reset Plot</button>
                  </div>
                  <div >
                    <button style="background-color:#8DD1C0;font-size:17px;color:whitesmoke;" type="button" class="button-submit-find mx-lg-2 mx-0" data-bs-toggle="modal" data-bs-target="#delAllShift">Reset Shift</button>
                  </div>
              @else
              @endif
            </div>
            </div>
            <div class="text-center pb-4">
              <a href="/ListShift"><button type="button" class="button-submit-find mx-lg-2 mx-0">
              Refresh 
              </button></a>
              </div>
            @if($countshift!=0)
            <table class="table table-bordered table-hover table-striped text-center align-middle">
                <thead>
                    <tr>
                        <th class="table-content-custom mobile-hide">No.</th>
                        <th class="table-content-custom mobile-hide">SHIFT</th>
                        <th class="table-content-custom ">Tanggal</th>
                        <th class="table-content-custom ">Waktu</th>
                        <th class="table-content-custom ">Kuota</th>
                        <th class="table-content-custom ">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($shift as $p)
                    <tr>
                        <td class="table-content-custom mobile-hide">{{ $no++ }}</td>
                        <td class="table-content-custom mobile-hide">{{ $p->namashift }}</td>
                        <td class="table-content-custom ">{{ \Carbon\Carbon::parse($p->hari)->isoFormat('dddd, D MMMM Y') }}</td>
                        <td class="table-content-custom ">{{ $p->jam_start }} - {{ $p->jam_end }} WIB</td>
                        <td class="table-content-custom ">{{ $p->kuota }}</td>
                        <td class="table-content-custom ">
                          @if($ceklulus->isPlotRun==0)
                            <a href="/EditShift/{{$p->id}}"><button style="font-size: 1rem" class="button-submit-find">Edit</button></a>
                            <a href="/delShiftconfirm/{{$p->id}}" ><button class="button-cancel">Hapus</button></a>
                          @else
                          <span style="color: green;font-weight:600">Isi Jadwal Caas sedang berlangsung</span> 
                          @endif             
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
              <div class="">{{ $shift->links('pagination::pagination') }}</div>
            </div>
            @else
            <div class="text-center text-nim-head">
              <span>Belum ada Jadwal yang dibuat</span>
            </div>
            @endif
        </div>
    </div>
</div>
</section>
</body>
</html>