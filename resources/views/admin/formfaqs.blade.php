  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Page Form FAQ</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Form FAQ</li>
          </ol>
      </div>
  </div>


  <div class="container-fluid">
      <form method="post" action="{{ route('faq.post') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

                <div class="form-group">
          <label>Judul Pertanyaan</label>
          <input type="text" name="question" class="form-control">
      </div>
      <div class="form-group">
          <label>Jawaban</label>
          <input type="text" name="answer" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
  </div>
  @endsection
