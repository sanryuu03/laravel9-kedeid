  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Jenis Produk</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Landing Jenis Produk</li>
          </ol>
      </div>
  </div>


  <div class="container-fluid">
      <form method="post" action="{{ route('jenisproduk.post') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
              <label>Caption</label>
              <input type="text" name="caption" class="form-control">
          </div>


          <label>Foto Produk</label>
          <br>
          <input type="file" name="picture_path" class="form-control">

          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
  </div>

  .<div class="container-fluid">
      <div class="card-body">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="1%">Caption</th>
                      <th width="1%">Foto Produk</th>
                      <th width="1%">OPSI</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($gambarProduk as $item)
                  <tr>
                      <td>{{ $item->caption }}</td>
                      <td><img width="150px" src="{{ url('/storage/'.$item->picture_path) }}"></td>
                      <td>
                      <form action="{{ route('jenisproduk.destroy', $item->id) }}" method="POST" class="inline-block">
                          {!! method_field('post') . csrf_field() !!}
                          <button type="submit" class="btn btn-danger">
                              Delete
                          </button>
                      </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
  <!---Container Fluid-->
  @endsection
