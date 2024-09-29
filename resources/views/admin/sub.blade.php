@extends('../home')

@section('content')
<link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Sub Kriteria</h4>
                    <div class="header-right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</button>

                        <div class="modal fade" id="tambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('tambah.sub') }}" method="POST">
                                        @csrf

                                        <div class="modal-body">
                                            <label for="addKriteria" class="text-black">Kriteria</label>
                                            <div class="input-group custom input-warning">
                                                <select name="addKriteria" class="default-select form-control wide mb-3">
                                                    @foreach ($kriteria as $item)
                                                        <option value="{{$item->kriteria}}">{{$item->kode}} - {{$item->kriteria}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label for="addSub" class="text-black">Sub-Kriteria</label>
                                            <div class="input-group custom input-warning">
                                                <input required name="addSub" type="text" class="form-control form-control-lg" placeholder="Masukkan subkriteria"/>
                                            </div>
                                            <label for="addBobot" class="text-black mt-3">Bobot</label>
                                            <div class="input-group custom input-warning">
                                                <input required name="addBobot" type="text" onkeypress="return hanyaAngka(event)" maxlength="2" class="form-control form-control-lg" placeholder="Masukkan kriteria"/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Sub-Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $i => $item)
                                @php
                                    $n = $i + 1;
                                @endphp
                                <tr>
                                    <td><h5>{{ $n++ }}</h5></td>
                                    <td><h5>{{ $item->kriteria }}</h5></td>
                                    <td><h5>{{ $item->subkriteria }}</h5></td>
                                    <td><h5>{{ $item->bobot }}</h5></td>
                                    <td>
                                        <div class="d-flex">
                                            <!--<a href="javascript:void(0)" data-backdrop="static" data-bs-toggle="modal" data-bs-target="#ubahData{{$item->id}}" type="button" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a> -->
                                            <a href="javascript:void(0)" data-backdrop="static" data-bs-toggle="modal" data-bs-target="#hapusData{{$item->id}}" type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>   
                                
                                <div class="modal fade" id="ubahData{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Perbarui Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.sub.update', $item->id) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <label for="editKriteria" class="text-black">Kode Kriteria</label>
                                                    <div class="input-group custom mb-3 input-warning">
                                                        <input readonly required name="editKriteria" value="{{ $item->id }}" type="text" class="form-control form-control-lg" placeholder="Kode"/>
                                                    </div>
                                                    <label for="editKriteria" class="text-black">Kriteria</label>
                                                    <div class="input-group custom input-warning">
                                                        <input required name="editKriteria" value="{{ $item->kriteria }}" type="text" class="form-control form-control-lg" placeholder="Masukkan kriteria"/>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="hapusData{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.sub.hapus', $item->id) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <h4 class="text-center text-black">Anda ingin menghapus data ini?</h4>
                                                    <h3 class="text-center text-black">{{$item->kriteria}} - {{$item->subkriteria}}</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                @empty

                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Sub-Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

<!-- Required vendors -->
<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Datatable -->
<script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

@endsection