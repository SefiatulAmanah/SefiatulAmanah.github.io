@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Update Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('jurusan.update',$jurusan ->id_jurusan)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="jurusan">Update Data Jurusan</label>
                                    <input type="text" name="jurusan" id='jurusan 'class="form-control" placeholder=""
                                        aria-label="First" value="{{ old('jurusan', $jurusan->jurusan) }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
