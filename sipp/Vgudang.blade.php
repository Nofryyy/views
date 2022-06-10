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
        <h1 class="my-4"> Search Gudang </h1>
        <form id="contact-form" method="post" action="contact.php" role="form">
        <div class="messages"></div>
        <div class="controls">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_name" type="text" name="Nama" class="form-control" placeholder="Search Gudang*" required="required" data-error="Form is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <button type="button" name="button" class="btn btn-success">Search</button>
            </div>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">kode</th>
                  <th scope="col">Gudang</th>
                  <th scope="col">Dapartement</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aktif</th>
                  <th scope="col">User Update</th>
                  <th scope="col">Tanggal update</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-4 mt-5">
            <h5>Unit Yang Mengerjakan</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Kode</th>
                  <th scope="col">Nama Unit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>

        </form>
      </div>
    </div>
  </div>

  @endsection