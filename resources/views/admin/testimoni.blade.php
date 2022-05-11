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

<div class="container-fluid">
    <h3 class="my-4">Testimoni</h3>
    <a href="{{  url('/admin/formlandingpageaplikasikede') }}" class="btn btn-sm btn-primary mb-3">
        <i class="fa fa-plus fa-sm"></i> Add
    </a>
    <table id="datatable" class="table table-bordered table-striped table-sm">
        <thead class="bg-primary">
        <tr>
                <th>ID</th>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Caption</th>
                <th>Belanja Produk</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                {{-- <td><?= $item->id ?></td>
                <td><?= $no++ ?></td>
                <td>
                    <img src="<?= base_url('uploads/pegawai/'.$item->foto) ?>" width="50" height="50" class="zoomImage" onclick="zoomImage('<?= base_url('uploads/pegawai/'.$item->foto) ?>')">
                </td>
                <td><?= $item->bagian ?></td>
                <td><?= $item->bagian ?></td>
                <td><?= $item->nidn ?></td> --}}

            </tr>
        </tbody>
    </table>



</div>
</div>
  <!---Container Fluid-->
  @endsection
