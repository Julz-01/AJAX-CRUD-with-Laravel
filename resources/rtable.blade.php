   
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Table</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="table-responsive">
  <table class="table">
   <thead>
    <tr>
    
      <th>name</th>
      <th>number</th>
  

    </tr>
  </thead>
  <tbody>
  @foreach($data as $dt)
    <tr>
     
      <td>{{$dt->name}}</td>
      <td>{{$dt->number}}</td>
    </tr>

  </tbody>
@endforeach
  </table>


@endsection
