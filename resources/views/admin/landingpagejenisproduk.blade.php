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

      <div class="form-group">
          <label>Caption</label>
          <input type="text" name="bidang_keahlian" class="form-control" value="<?= @$row->bidang_keahlian ?>">
      </div>


    <label>Foto Produk</label>
    <?php
      if (@$row->nama) {
    ?>
    <input type="hidden" name="foto_old" value="<?= @$row->foto ?>">
    <br>
    <img src="<?= base_url('uploads/pegawai/'.$row->foto) ?>" class="img-fluid" width="150">
    <br><br>
      <?php } ?>
    <input type="file" name="foto" class="form-control">
  </div>


    <div class="container-fluid">
    	<form method="post" action="" enctype="multipart/form-data">
    		{{-- <?php $this->load->view('pegawai/form',@$row,@$combostatus) ?> --}}

    		<button type="submit" class="btn btn-primary mt-3">Save</button>
    	</form>
</div>
  <!---Container Fluid-->
  @endsection
