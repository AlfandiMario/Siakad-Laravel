@extends('template_backend.home')
@section('heading', 'Edit Mata Kuliah')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('mapel.index') }}">Mata Kuliah</a></li>
  <li class="breadcrumb-item active">Edit Mata Kuliah</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mata Kuliah</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('mapel.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
                <div class="form-group">
                  <label for="nama_mapel">Nama Mata Kuliah</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" value="{{ $mapel->nama_mapel }}" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Kuliah') }}">
                </div>
                <div class="form-group">
                  <label for="paket_id">Paket</label>
                  <select id="paket_id" name="paket_id" class="form-control @error('paket_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Paket Mata Kuliah --</option>
                    <option value="9"
                        @if ($mapel->paket_id == '9')
                            selected
                        @endif
                    >Semua</option>
                    @foreach ($paket as $data)
                      <option value="{{ $data->id }}"
                        @if ($mapel->paket_id == $data->id)
                            selected
                        @endif
                      >{{ $data->ket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                        <option value="">-- Pilih Kelompok Mata Kuliah --</option>
                        <option value="A"
                            @if ($mapel->kelompok == 'A')
                                selected
                            @endif
                        >Mata Kuliah Umum</option>
                        <option value="B"
                            @if ($mapel->kelompok == 'B')
                                selected
                            @endif
                        >Mata Kuliah Khusus</option>
                        <option value="C"
                            @if ($mapel->kelompok == 'C')
                                selected
                            @endif
                        >Mata Kuliah Keahlian</option>
                    </select>
                </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
        window.location="{{ route('mapel.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataMapel").addClass("active");
</script>
@endsection