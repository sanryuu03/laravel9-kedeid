  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page KeDe ID</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">KeDe ID</li>
          </ol>
      </div>

      <div class="container-fluid">
          <h3 class="my-4">Poster Footer KeDe ID</h3>
          <a href="{{  url('/admin/formkedeid') }}" class="btn btn-sm btn-primary mb-3">
              <i class="fa fa-plus fa-sm"></i> Add
          </a>
          <table id="datatable" class="table table-bordered table-striped table-sm">
              <thead class="bg-primary">
                  <tr>
                      <th>No</th>
                      <th>Poster</th>
                      <th>Link Poster</th>
                      <th>Created At</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 0;?>
                  @foreach($kedePromo as $item)
                  <?php $no++ ;?>
                  <tr>
                      <td>{{ $no }}</td>
                      <td><img width="150px" src="{{ url('/storage/'.$item->poster) }}"></td>
                      <td>{{ $item->link_poster }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>
                          <form action="{{ route('kedeid.destroy', $item->id) }}" method="POST" class="inline-block">
                              {!! method_field('post') . csrf_field() !!}
                              <button type="submit" class="btn btn-danger">
                                  Delete
                              </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  <!---Container Fluid-->
  @endsection
