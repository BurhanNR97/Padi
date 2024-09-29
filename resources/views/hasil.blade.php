@extends('master')

@section('content')
    <!-- Navbar & Hero Start -->

    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="{{asset('img/logo.png')}}" alt="Logo">&ensp;
            SPK Pemilihan Bibit Padi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('beranda')}}" class="nav-item nav-link" style="color: black">Beranda</a>
                <a href="{{route('rekomendasi')}}" class="nav-item nav-link" style="color: black">Rekomendasi Bibit</a>
                <a href="{{route('padi')}}" class="nav-item nav-link" style="color: black">Varietas Bibit Padi</a>
            </div>
            <div class="dropdown">
                @php
                    if (Auth::check()) {
                        echo 
                        "<a href='javascript:void(0)' class='dropdown-toggle btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0' data-bs-toggle='dropdown'>Administrator</a>
                        <div class='dropdown-menu rounded'>
                            <a href='/admin/home' class='dropdown-item'><i class='fas fa-user-alt me-2'></i> Halaman Admin</a>
                            <a href='/logout' class='dropdown-item'><i class='fas fa-power-off me-2'></i> Log Out</a>
                        </div>";
                    } else {
                        echo 
                        "<a href='/login' class='btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0'>Login</a>";
                    }
                @endphp
            </div>
        </div>
    </nav>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mt-5 mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5">Hasil Pencarian</h1>
        </div>
        <div class="row container wow fadeInUp">
            <div class="row kotaks">
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3 teksku">Sistem merekomendasikan 100%</h5>
                            <span class="teksku text-black mb-2"><strong>Kriteria yang dipilih:</strong></span><br/>
                            @php
                                $k01 = explode('#', $k1);
                                $k02 = explode('#', $k2);
                                $k03 = explode('#', $k3);
                                $k04 = explode('#', $k4);
                                $k05 = explode('#', $k5);
                                echo "<span class='teksku text-black'>1. Musim $k01[1]</span><br/>";
                                echo "<span class='teksku text-black'>2. Lahan Sawah $k02[1]</span><br/>";
                                echo "<span class='teksku text-black'>3. $k03[1]/1000 butir</span><br/>";
                                echo "<span class='teksku text-black'>4. Umur/Masa Tanam Lahan Sawah $k04[1]</span><br/>";
                                echo "<span class='teksku text-black'>5. Potensi Hasil $k05[1]</span>";
                            @endphp
                            <div class="form-group mt-5">
                                <p class="d-inline-flex gap-1">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                      Perhitungan Metode
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                  <div class="card card-body">
                                      <!-- Kriteria -->
                                      <h6 class="teksku">Kriteria</h6>
                                      <div class="table-responsive">
                                          <table class="table-sm table-bordered">
                                              <tr>
                                                  <td align='center'><strong>Kode</strong></td>
                                                  <td align='center'><strong>Kriteria</strong></td>
                                                  <td align='center'><strong>Subkriteria</strong></td>
                                                  <td align='center'><strong>Bobot</strong></td>
                                              </tr>
                                              <tr>
                                                <td align='center'>K01</td>
                                                @php
                                                    $k01 = explode('#', $k1);
                                                    echo "<td>$k01[0]</td>";
                                                    echo "<td>$k01[1]</td>";
                                                    echo "<td align='center'>$k01[2]</td>";
                                                @endphp
                                              </tr>
                                              <tr>
                                                <td align='center'>K02</td>
                                                @php
                                                    $k01 = explode('#', $k2);
                                                    echo "<td>$k02[0]</td>";
                                                    echo "<td>$k02[1]</td>";
                                                    echo "<td align='center'>$k02[2]</td>";
                                                @endphp
                                              </tr>
                                              <tr>
                                                <td align='center'>K03</td>
                                                @php
                                                    $k01 = explode('#', $k3);
                                                    echo "<td>$k03[0]</td>";
                                                    echo "<td>$k03[1]</td>";
                                                    echo "<td align='center'>$k03[2]</td>";
                                                @endphp
                                              </tr>
                                              <tr>
                                                <td align='center'>K04</td>
                                                @php
                                                    $k01 = explode('#', $k4);
                                                    echo "<td>$k04[0]</td>";
                                                    echo "<td>$k04[1]</td>";
                                                    echo "<td align='center'>$k04[2]</td>";
                                                @endphp
                                              </tr>
                                              <tr>
                                                <td align='center'>K05</td>
                                                @php
                                                    $k01 = explode('#', $k1);
                                                    echo "<td>$k05[0]</td>";
                                                    echo "<td>$k05[1]</td>";
                                                    echo "<td align='center'>$k05[2]</td>";
                                                @endphp
                                              </tr>
                                          </table>
                                      </div>

                                      <!-- Bobot Referensi -->
                                      <h6 class="teksku mt-3">Bobot Referensi</h6>
                                      <div class="table-responsive">
                                          <table class="table-sm table-bordered">
                                              <tr>
                                                  <td align='center' rowspan="2"><strong>Alternatif</strong></td>
                                                  <td align='center' colspan="5"><strong>Kriteria</strong></td>
                                              </tr>
                                              <tr>
                                                <td align='center'><strong>K01</strong></td>
                                                <td align='center'><strong>K02</strong></td>
                                                <td align='center'><strong>K03</strong></td>
                                                <td align='center'><strong>K04</strong></td>
                                                <td align='center'><strong>K05</strong></td>
                                              </tr>
                                              <tr>
                                                <td>Inpara 08</td>
                                                @foreach ($a1 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Inpari 09</td>
                                                @foreach ($a2 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Ciherang</td>
                                                @foreach ($a3 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Mekongga</td>
                                                @foreach ($a4 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Bioprima</td>
                                                @foreach ($a5 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Malaysian Rice (MR)</td>
                                                @foreach ($a6 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Ketonggo</td>
                                                @foreach ($a7 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Cakrabuana</td>
                                                @foreach ($a8 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                              <tr>
                                                <td>Inpago 12</td>
                                                @foreach ($a9 as $item)
                                                <td align='center'>{{$item->bobot}}</td>
                                                @endforeach
                                              </tr>
                                          </table>
                                      </div>

                                      <h6 class="teksku mt-3">Bobot Referensi</h6>
                                      <div class="table-responsive">
                                        <table class="table-sm table-bordered">
                                            @foreach ($matriks as $i)
                                                <tr>
                                                    @foreach ($i as $item)
                                                        <td align='center'>{{$item}}</td>
                                                    @endforeach
                                                </tr>     
                                            @endforeach
                                        </table>
                                      </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container .kotaks{
        position: flex;
        justify-content: center;
        align-items: center
    }
    .teksku {
        color: black;
    }

    table th tr td{
        width: 200px;
    }
</style>

@endsection