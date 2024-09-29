@extends('../home')

@section('content')
<link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Hasil Rekomendasi</h4>
                    <div class="header-right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reset">Hapus Semua</button>
                        <div class="modal fade" id="reset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.history.reset') }}" method="POST">
                                        @csrf

                                        <div class="modal-body">
                                            <h4 class="text-center text-black">Anda ingin menghapus semua data hasil rekomendasi?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Ya</button>
                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Tidak</button>
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
                                    <th>Tanggal</th>
                                    <th>Hasil Rekomendasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                <tr>
                                    <td><h5>{{ $item->created_at->format('d F Y (H:i:s)')}}</h5></td>
                                    <td><h5>{{ $item->persen }} {{ $item->bibit }}</h5></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-backdrop="static" data-bs-toggle="modal" data-bs-target="#hapusData{{$item->id}}" type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>  

                                <div class="modal fade" id="hapusData{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.history.hapus', $item->id) }}" method="POST">
                                                @csrf
        
                                                <div class="modal-body">
                                                    <h4 class="text-center text-black">Anda ingin menghapus data ini?</h4>
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