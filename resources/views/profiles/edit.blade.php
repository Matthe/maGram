@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           id="title" name="title" value="{{ old('title') ?? $user->profile->title}}"
                           required autocomplete="title" autofocus>

                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                           id="description" name="description" value="{{ old('description') ?? $user->profile->description}}"
                           required autocomplete="description" autofocus>

                    @error('description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
                    <input type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                           id="url" name="url" value="{{ old('url') ?? $user->profile->url}}"
                           required autocomplete="url" autofocus>

                    @error('url')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input id="image" type="file" class="form-control-file" name="image" >

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
