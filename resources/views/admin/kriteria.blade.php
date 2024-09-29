@extends('../home')

@section('content')
<link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kriteria</h4>
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
                                    <form action="{{ route('tambah.kriteria') }}" method="POST">
                                        @csrf

                                        <div class="modal-body">
                                            <label for="addKodeKriteria" class="text-black">Kode Kriteria</label>
                                            <div class="input-group custom input-warning mb-3">
                                                <input readonly required name="addKodeKriteria" value="{{ $kode }}" type="text" class="form-control form-control-lg" placeholder="Kode"/>
                                            </div>
                                            <label for="addKriteria" class="text-black">Kriteria</label>
                                            <div class="input-group custom input-warning mb-3">
                                                <input required name="addKriteria" type="text" class="form-control form-control-lg" placeholder="Masukkan kriteria"/>
                                            </div>
                                            <label for="addJenis" class="text-black">Jenis Atribut</label>
                                            <div class="input-group custom input-warning">
                                                <select required name="addJenis" class="default-select form-control wide mb-3">
                                                    <option value="" selected disabled hidden>- Pilih -</option>
                                                    <option value="cost">Cost/Biaya</option>
                                                    <option value="benefit">Benefit/Keuntungan</option>
                                                </select>
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
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                <tr>
                                    <td><h5>{{ $item->kode }}</h5></td>
                                    <td><h5>{{ $item->kriteria }}</h5></td>
                                    <td><h5>{{ $item->jenis }}</h5></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-backdrop="static" data-bs-toggle="modal" data-bs-target="#ubahData{{$item->kode}}" type="button" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" data-backdrop="static" data-bs-toggle="modal" data-bs-target="#hapusData{{$item->kode}}" type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>   
                                
                                <div class="modal fade" id="ubahData{{$item->kode}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Perbarui Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.kriteria.update', $item->kode) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <label for="editKriteria" class="text-black">Kode Kriteria</label>
                                                    <div class="input-group custom mb-3 input-warning">
                                                        <input readonly required name="editKriteria" value="{{ $item->kode }}" type="text" class="form-control form-control-lg" placeholder="Kode"/>
                                                    </div>
                                                    <label for="editKriteria" class="text-black">Kriteria</label>
                                                    <div class="input-group custom mb-3 input-warning">
                                                        <input required name="editKriteria" value="{{ $item->kriteria }}" type="text" class="form-control form-control-lg" placeholder="Masukkan kriteria"/>
                                                    </div>
                                                    <label for="editJenis" class="text-black">Jenis Atribut</label>
                                                    <div class="input-group custom input-warning">
                                                        <select required name="editJenis" class="default-select form-control wide mb-3">
                                                            @php
                                                                if ($item->jenis == 'cost') {
                                                                    echo "<option selected value='cost'>Cost/Biaya</option>
                                                                    <option value='benefit'>Benefit/Keuntungan</option>";
                                                                } else
                                                                if ($item->jenis == 'benefit') {
                                                                    echo "<option value='cost'>Cost/Biaya</option>
                                                                    <option selected value='benefit'>Benefit/Keuntungan</option>";
                                                                }
                                                            @endphp
                                                        </select>
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

                                <div class="modal fade" id="hapusData{{$item->kode}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.kriteria.hapus', $item->kode) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <h4 class="text-center text-black">Anda ingin menghapus data ini?</h4>
                                                    <h3 class="text-center text-black">{{$item->kode}} - {{$item->kriteria}}</h3>
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
                                    <th>KriteriaKriteria</th>
                                    <th>Jenis</th>
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

<!-- Required vendors -->
<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Datatable -->
<script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

@endsection