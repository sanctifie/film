@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Mon activité</div>
      <div class="card-body">
      @if(session('status'))
        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif
        <h2>Mes critiques</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Titre du Film</td>
              <td>Critique</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $row)
            <tr>
              <td>{{$row->title }}</td>
              <td>{{$row->description }}</td>
              <td>
                <form action="" method="">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach</tbody>
        </table>
        <hr>
        <h2>Film rating</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Titre du Film</td>
              <td>Critique</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>@foreach($data as $row)
            <tr>
              <td>{{$row->title }}</td>
              <td>{{$row->note }} / 5</td>
              <td>
                <form action="" method="">
                @csrf
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection