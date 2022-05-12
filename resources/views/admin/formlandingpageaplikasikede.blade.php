  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Aplikasi Kede</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Landing Aplikasi Kede</li>
          </ol>
      </div>



      <div class="container-fluid">
          <form method="post" action="{{ route('aplikasikede.post') }}" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                  <label>Header</label>
                  <input type="text" name="header" class="form-control" value="<?= @$row->bidang_keahlian ?>">
              </div>
              <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" value="<?= @$row->bidang_keahlian ?>">
              </div>
              <div class="form-group">
                  <label>Caption</label>
                  <input type="text" name="caption" class="form-control" value="<?= @$row->bidang_keahlian ?>">
              </div>


              <label>Foto</label>
              <br>
              <input type="file" name="picture_path" class="form-control">
              <button type="submit" class="btn btn-primary mt-3">Save</button>
          </form>
      </div>
      @endsection
