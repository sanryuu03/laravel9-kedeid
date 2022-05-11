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
                {{-- <td><?= $no++ ?></td>
                <td><?= $no++ ?></td>
                <td><?= $item->nama ?></td>
                <td><?= $item->kode ?></td>
                <td><?= date('d-m-Y H:i:s',strtotime($item->created_at)) ?></td>
                <td>
                    <a href="<?= base_url('status/edit/'.$item->id) ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm delete" data-url="<?= base_url('status/delete/'.$item->id) ?>" data-toggle="modal" data-target="#deleteModal">
                        <i class="fa fa-trash"></i>
                    </a>
                </td> --}}

            </tr>
        </tbody>
    </table>



</div>
</div>
  <!---Container Fluid-->
  @endsection
