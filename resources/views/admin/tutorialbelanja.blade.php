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

      <div class="form-group">
          <label>Header</label>
          <input type="text" name="bidang_keahlian" class="form-control" value="<?= @$row->bidang_keahlian ?>">
      </div>

      <div class="form-group">
          <label>Masukkan Link Youtube</label>
          <input type="text" name="pendidikan_akhir" class="form-control" value="<?= @$row->pendidikan_akhir ?>">
      </div>

  </div>


    <div class="container-fluid">
    	<form method="post" action="" enctype="multipart/form-data">
    		{{-- <?php $this->load->view('pegawai/form',@$row,@$combostatus) ?> --}}

    		<button type="submit" class="btn btn-primary mt-3">Save</button>
    	</form>
</div>
  <!---Container Fluid-->
  @endsection
