@extends('../home')

@section('content')
<link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Bibit Padi</h4>
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
                                    <form action="{{ route('tambah.padi') }}" method="POST">
                                        @csrf

                                        <div class="modal-body">
                                            <label for="addKodePadi" class="text-black">Kode Bibit</label>
                                            <div class="input-group custom mb-3 input-warning">
                                                <input readonly required name="addKodePadi" value="{{ $kode }}" type="text" class="form-control form-control-lg" placeholder="Kode"/>
                                            </div>
                                            <label for="addNamaBibit" class="text-black">Nama Bibit Padi</label>
                                            <div class="input-group custom input-warning">
                                                <input required name="addNamaBibit" type="text" class="form-control form-control-lg" placeholder="Masukkan nama bibit"/>
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
                                    <th>Nama Bibit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                <tr>
                                    <td><h5>{{ $item->kode }}</h5></td>
                                    <td><h5>{{ $item->nama }}</h5></td>
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
                                            <form action="{{ route('admin.padi.update', $item->kode) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <label for="editKodePadi" class="text-black">Kode Bibit</label>
                                                    <div class="input-group custom mb-3 input-warning">
                                                        <input readonly required name="editKodePadi" value="{{ $item->kode }}" type="text" class="form-control form-control-lg" placeholder="Kode"/>
                                                    </div>
                                                    <label for="editNamaBibit" class="text-black">Nama Bibit Padi</label>
                                                    <div class="input-group custom input-warning">
                                                        <input required name="editNamaBibit" value="{{ $item->nama }}" type="text" class="form-control form-control-lg" placeholder="Masukkan nama bibit"/>
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
                                            <form action="{{ route('admin.padi.hapus', $item->kode) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <h4 class="text-center text-black">Anda ingin menghapus data ini?</h4>
                                                    <h3 class="text-center text-black">{{$item->kode}} - {{$item->nama}}</h3>
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
                                    <th>Nama Bibit</th>
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