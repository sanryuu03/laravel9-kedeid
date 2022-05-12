  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Form FAQ</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form FAQ</li>
          </ol>
      </div>

<div class="container-fluid">
    <h3 class="my-4">List FAQ's</h3>
    <a href="{{  url('/admin/formfaqs') }}" class="btn btn-sm btn-primary mb-3">
        <i class="fa fa-plus fa-sm"></i> Add
    </a>
    <table id="datatable" class="table table-bordered table-striped table-sm">
        <thead class="bg-primary">
        <tr>
            <th>No</th>
            <th>Judul Pertanyaan</th>
            <th>Jawaban</th>
            <th>Created At</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                  <?php $no = 0;?>
                  @foreach($faq as $item)
                  <?php $no++ ;?>
                  <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $item->question }}</td>
                      <td>{{ $item->answer }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>
                      <form action="{{ route('faq.destroy', $item->id) }}" method="POST" class="inline-block">
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
