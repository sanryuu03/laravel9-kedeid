  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Testimoni</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Testimoni</li>
          </ol>
      </div>
  </div>

  <div class="container-fluid">
      <form method="post" action="{{ route('testimoni.post') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
              <label>Foto Profil</label>
              <br>
              <input type="file" name="picture_path" class="form-control">

          <div class="form-group">
              <label>Nama</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Caption</label>
              <input type="text" name="caption" class="form-control">
          </div>
          <div class="form-group">
              <label>Belanja Produk</label>
              <input type="text" name="buy" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
  </div>

  <div class="container-fluid">
      <h3 class="my-4">Testimoni</h3>
      <table id="datatable" class="table table-bordered table-striped table-sm">
          <thead class="bg-primary">
              <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Caption</th>
                  <th>Belanja Produk</th>
                  <th>Created At</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <?php $no = 0;?>
                  @foreach($testimoni as $item)
                  <?php $no++ ;?>
                  <tr>
                      <td>{{ $no }}</td>
                      <td><img width="150px" src="{{ url('/storage/'.$item->picture_path) }}"></td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->caption }}</td>
                      <td>{{ $item->buy }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>
                      <form action="{{ route('testimoni.destroy', $item->id) }}" method="POST" class="inline-block">
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
  <!---Container Fluid-->
  @endsection
