<x-app-layout>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <x-menu />

                </div>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <a href="#" class="btn btn-secondary" data-toggle="modal"
                            data-target="#exampleModal"><span>Pelanggan Baru</span></a>
                    </div>

                </div>

                <table class="table table-striped table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>
                            {{-- <th>Status Bayar</th> --}}
                            <th>Layanan </th>
                            <th>Tanggal Masuk </th>
                            <th>Opsi</th>
                            <th>Status Ambil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                <td> {{ $item->nama_pelanggan }}</td>
                                {{-- <td>{{ $item->status_bayar != false ? 'Sudah Bayar' : 'Belum Bayar' }} </td> --}}
                                <td><span class="status text-success"></span> {{ $item->layanan->nama_layanan }}</td>

                                <td>
                                    <?php echo $item->waktu_ambil < \Carbon\Carbon::now() ? '<span class="status text-success">&bull;</span>BISA DIAMBIL' : '<span class="status text-danger">&bull;</span>BELUM BISA DI AMBIL'; ?>

                                </td>


                                <td>
                                    <button href="#" class="btn btn-sm btn-secondary" data-toggle="modal"
                                        data-target="#pelanggan{{ $item->id }}"><span>Lihat Detail</span></button>


                                    <div class="modal fade" id="pelanggan{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" colspan="4">#nomornotas : </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td colspan="3">{{ $item->nama_pelanggan }}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Layanan</td>
                                                            <td colspan="3">{{ $item->nama_pelanggan }}</td>



                                                        </tr>
                                                        <tr>
                                                            <td>Total Biaya</td>
                                                            <td>{{ $item->nama_pelanggan }}</td>
                                                            <td>Belum bayar</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Ambil </td>
                                                            <td>{{ $item->nama_pelanggan }}</td>
                                                            <td>Belum ambil</td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </td>



                                <td class="d-flex p-2">

                                    @if (!$item->status_ambil)
                                        <form action="{{ route('pelanggan.confirm') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_pelanggan" value="{{ $item->id }}">
                                            <button class="btn btn-sm btn-danger" id="ambil_barang"><i
                                                    class="material-icons">&#xe5cd;</i></button>
                                        </form>
                                    @else
                                        <button class="btn btn-sm btn-success"><i
                                                class="material-icons">&#xe5ca;</i></button>
                                    @endif

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>

</x-app-layout>
