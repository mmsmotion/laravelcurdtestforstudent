@extends('master')
@section('title')
    Article Create
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Article Title</label>
                            <input type="text" name="title" class="form-control form-control-lg" value="{{ old('title') }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select" id="" >
                                @foreach(\App\Models\Category::all() as $c)
                                    <option value="{{ $c->id }}" {{ $c->id == old('category') ? 'selected' : '' }}>{{ $c->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" rows="7" >{{ old('description') }}</textarea>
                        </div>
                        <button class="btn btn-lg btn-primary">Create Article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
