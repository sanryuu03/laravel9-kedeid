  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Poster Footer KeDe ID</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Poster Footer KeDe ID</li>
          </ol>
      </div>
  </div>


  <div class="container-fluid">
      <form method="post" action="{{ route('kedeid.post') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                  <label>Link Poster</label>
                  <input type="text" name="link_poster" class="form-control" value="<?= @$row->bidang_keahlian ?>">
              </div>


              <label>Poster</label>
              <br>
              <input type="file" name="poster" class="form-control">
          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
  </div>
  @endsection
