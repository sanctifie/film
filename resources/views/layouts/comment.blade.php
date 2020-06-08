@extends('layouts.app')
 @section('content')
<div class="movie-info border-b border-gray-800">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Inserer une critique') }}</div>
            <hr>
            <form action="{{ route('shares.store') }}" method="POST">
            @csrf
              <div class="form-group col-10">
                <label for="title">Titre du film à critiquer</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                @error('title')
                <div class="invalid-feedback">{{ $errors->first('title')}}</div>
                @enderror
                </div>
              <div class="form-group col-10">
                <label for="description">Votre critique</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">
                </textarea>
                @error('content')
                <div class="invalid-feedback">{{ $errors->first('description')}}</div>
                @enderror
                </div>
              <button type="submit" class="btn btn-primary">Create Critique</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection