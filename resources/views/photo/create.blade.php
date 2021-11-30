@extends('master')
@section('title') Photo Upload @stop
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-lg-4">
                <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Upload Photo</label>
                        <input type="file" class="form-control" accept="image/jpeg" name="photo[]" multiple>
                    </div>
                    <button class="btn btn-primary">Upload</button>
                </form>

                {{ asset('storage/images/61a5d72aeed82_photo.jpg')  }}
            </div>
        </div>
    </div>

    @stop
