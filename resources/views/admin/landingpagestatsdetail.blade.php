  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page stats detail</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Landing stats detail</li>
          </ol>
      </div>
      <form method="post" action="{{ route('stats.post') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

      <div class="form-group">
          <label>Caption Kiri</label>
          <input type="text" name="caption_kiri" class="form-control">
      </div>

      <div class="form-group">
          <label>Caption Tengah</label>
          <input type="text" name="caption_tengah" class="form-control">
      </div>

      <div class="form-group">
          <label>Caption Kanan</label>
          <input type="text" name="caption_kanan" class="form-control">
      </div>
  </div>


  <div class="container-fluid">
          <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
      </form>

  <div class="card-body">
      <table class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th width="1%">Caption Kiri</th>
                  <th width="1%">Caption Tengah</th>
                  <th width="1%">Caption Kanan</th>
                  <th width="1%">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @foreach($statsDetail as $item)
              <tr>
                  <td>{{ $item->caption_kiri }}</td>
                  <td>{{ $item->caption_tengah }}</td>
                  <td>{{ $item->caption_kanan }}</td>
                  <td>
                      <form action="{{ route('stats.delete', $item ->id) }}" method="POST" class="inline-block">
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
