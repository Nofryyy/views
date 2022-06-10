@extends('layouts.template')

@section('content')

<!DOCTYPE html>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Kontraktor</h1>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
	    <div class="card card-info card-outline">

        
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h1 class="my-4"> Form Item Barang</h1>
        <form id="contact-form" method="post" action="contact.php" role="form">
        <div class="messages"></div>
        <div class="controls">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Kode Barang*</label>
                <input id="form_name" type="text" name="Nama" class="form-control" placeholder="Auto Number*" required="required" data-error="Form is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Nama *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder=" Nama*" required="required" data-error="Form is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h5 class="mt-5"> Atribut</h5>
      <form id="contact-form" method="post" action="contact.php" role="form">
      <div class="messages"></div>
      <div class="controls">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="form_lastname">Jenis Barang *</label>
              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Jenis Barang *" required="required" data-error="Form is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="form_email">Harga Beli *</label>
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Harga Beli *" required="required" data-error="Form is required..">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="form_phone">Harga Jual</label>
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Harga Jual" data-error="Form is required..">
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_phone">Satuan</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Satuan" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_phone">Ukuran</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Ukuran" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12 my-2">
          <label for="berlaku_untuk">Item Sebagai :</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="Inventory">  Inventory </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="Fixed_Asset">  Fixed Asset </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="Barang_Bekas">  Barang Bekas </label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_phone">Catatan</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Catatan" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_phone">Spesifikasi</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Spesifikasi" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_phone">Input Oleh</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Input Oleh" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_phone">Update Oleh</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Update Oleh" data-error="Form is required..">
            <div class="help-block with-errors"></div>
          </div>
        </div>


        </div>
      </form>
    </div>
  </div>
</div>

@endsection