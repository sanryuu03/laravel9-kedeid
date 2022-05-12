  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Tutorial Belanja</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Landing Tutorial Belanja</li>
          </ol>
      </div>
  </div>


  <div class="container-fluid">
      <form method="post" action="{{ route('tutorialbelanja.post') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label>Header</label>
              <input type="text" name="header" class="form-control" value="<?= @$row->bidang_keahlian ?>">
          </div>

          <div class="form-group">
              <label>Masukkan Link Youtube</label>
              <input type="text" name="link_youtube" class="form-control" value="<?= @$row->pendidikan_akhir ?>">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>
  </div>

  <div class="card-body">
      <table class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th width="1%">Header</th>
                  <th width="1%">Link Youtube</th>
                  <th width="1%">Created At</th>
                  <th width="1%">Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach($tutorialBelanja as $item)
              <tr>
                  <td>{{ $item->header }}</td>
                  <td>{{ $item->link_youtube }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>
                      <form action="{{ route('tutorialbelanja.destroy', $item ->id) }}" method="POST" class="inline-block">
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
