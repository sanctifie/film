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
            <form action="{{ route('notes.store') }}" method="POST">@csrf
              <div class="form-group col-10">
                <label for="title">Titre du film à noter</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                @error('title')
                <div class="invalid-feedback">{{ $errors->first('title')}}</div>
                @enderror</div>
              <div class="form-group col-10">
                <label for="description">Votre note sur 5</label>
                <select class="form-control" name="note" id="note">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Mettez une note</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection