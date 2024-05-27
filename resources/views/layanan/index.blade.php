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
                            data-target="#layananModal"><span>Tambah
                                layanan
                            </span></a>
                    </div>
                </div>

                <table class="table table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Layanan</th>

                            <th>Harga Layanan </th>
                            <th>deskripsi Layanan </th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layanan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td> {{ $item->nama_layanan }}</td>
                                <td>{{ $item->harga_layanan }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>

                                    <button href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#editLayanan{{ $item->id }}">edit layanan</button>

                                </td>
                            </tr>



                            <div class="modal fade" id="editLayanan{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama_layanan }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('layanan.update', $item) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-row">

                                                    <div class="form-group col-md-12">
                                                        <label for="nama">Nama Layanan</label>
                                                        <input type="text" class="form-control" id="nama_layanan"
                                                            name="nama_layanan" placeholder="masukan nama layanan"
                                                            value="{{ $item->nama_layanan }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga Layanan</label>
                                                    <input type="text" class="form-control" id="harga_layanan"
                                                        name="harga_layanan" placeholder="masukan harga layanan"
                                                        value="{{ $item->harga_layanan }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">deskripsi Layanan</label>
                                                    <input type="texr" class="form-control" id="deskripsi"
                                                        name="deskripsi" placeholder="masukan deskripsi layanan"
                                                        value="{{ $item->deskripsi }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="waktu">Waktu Layanan</label>
                                                    <input type="number" class="form-control" id="deskripsi"
                                                        name="waktu" placeholder="masukan deskripsi layanan"
                                                        value="{{ $item->waktu }}">
                                                </div>


                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>





    </div>

</x-app-layout>
