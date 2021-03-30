@extends('Barang.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>DAFTAR PENJUALAN BUKU 'OKAY' BOOKSTORE</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barang.create') }}"> Input barang</a>
            </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <form method="get" action="{{route('barang.search')}}" id="myForm">
            <div class="form-group">
            <label for="keyword">Cari</label>
            <input type="search"name="keyword"class="form-control"id="keyword"aria-describedby="keyword"  placeholder="Ketikkan yang dicari">
            </div>
            <button type="submit" class="btn btn-success mt-3">cari</button>
        </form>
        <table class="table table-bordered">
            <tr>
            <th>Id_barang</th>
            <th>kode_barang</th>
            <th>namabarang</th>
            <th>kategori_barang</th>
            <th>harga</th>
            <th>qty</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($barang as $brg)
                <tr>
                    <td>{{  $brg->id_barang }}</td>
                    <td>{{  $brg->kode_barang }}</td>
                    <td>{{  $brg->nama_barang }}</td>
                    <td>{{  $brg->kategori_barang }}</td>
                    <td>{{  $brg->harga }}</td>
                    <td>{{  $brg->qty }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('barang.show',['barang'=>$brg->id_barang]) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('barang.edit',['barang'=>$brg->id_barang]) }}">Edit</a>
                        <button type="button" data-toggle="modal" data-target="#delete{{$brg->id_barang}}" class="btn btn-danger">Delete</button>
                    </td>
                </tr>   
                <div class="modal" id="delete{{$brg->id_barang}}" tabindex="-1">
                    <form action="{{ route('barang.destroy',['barang'=>$brg->id_barang]) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete Option</h5>
                              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>are you sure to delete this data?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-primary">yes</button>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>           
            @endforeach
        </table>
       {{ $barang->links("pagination::bootstrap-4") }}
@endsection