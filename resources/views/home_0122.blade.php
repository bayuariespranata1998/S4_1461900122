@extends('layouts.app')
@section('title', 'Pasien')
@section('menu_pasien', 'active')

@section('content')
<h2 class="mt-5">Data Pasien</h2>
<p class="lead">Data Pasien</p>
<div class="d-flex justify-content-between pt-2">
    <div class="d-flex">
    </div>
    <div class="mr-2 mb-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Import</button>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLongTitle">Import Data Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('pasien.import') }}"  enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="file">Import File</label>
                    <input type="file" name="file" id="file" class="form-control" accept="xlsx,xls">
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection