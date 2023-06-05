@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Create Data Jurusan</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('jurusan.store') }}" method="POST">
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="row">
                                <label for="">Tambahkan Data Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="" aria-label="First">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-dark" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
