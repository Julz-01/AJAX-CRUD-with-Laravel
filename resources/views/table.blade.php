@extends('layouts.app')

@section('table-content')
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
      <th>gender</th>
      <th>address</th>
      <th>number</th>
      <th>remove</th>
      <th>edit</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $dt)
    <tr>
     
      <td>{{$dt->name}}</td>
      <td>{{$dt->gender}}</td>
      <td>{{$dt->address}}</td>
      <td>{{$dt->number}}</td>
      <td>
        <form action="{{url('table').'/'.$dt->id}}" method="POST">
          <button class="btn btn-danger delete_form" type="button" data-ids ="{{$dt->id}}">
                                   Delete
                                </button>
                            </form>
      </td>
      <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{$dt->id}}" >
 edit
</button></td>
    </tr>
  @endforeach
  </tbody>
  </table>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
 
    @foreach($data as $dt)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
    <form method="POST">
    @csrf
    @method('PUT')
                     <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                                <input id="up_name{{$dt->id}}" type="text" name="up_name{{$dt->id}}" class="form-control"  value="{{$dt->name}}" required="">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                            <div class="col-md-6">
                                <input id="up_address{{$dt->id}}" type="text" name="up_address{{$dt->id}}" class="form-control"  value="{{$dt->address}}" required="">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
<select id="up_gender{{$dt->id}}" name="up_gender{{$dt->id}}" class="form-control" >
 @if($dt->gender == 'Female')
  <option value="{{$dt->gender}}">{{$dt->gender}}</option>
  <option value="Male">Male</option>
  @endif
@if($dt->gender == 'Male')
 <option value="{{$dt->gender}}">{{$dt->gender}}</option>
  <option value="Female">Female</option>
  @endif
</select>

                           
                            </div>
                        </div>

                         <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('number') }}</label>

                            <div class="col-md-6">
                                <input id="up_number{{$dt->id}}" type="text" name="up_number{{$dt->id}}" class="form-control"  value="{{$dt->number}}" required>
                            </div>
                        </div>
      </div>
      <div class="modal-footer"> 
        <button type="button" data-ids ="{{$dt->id}}" class="btn btn-primary update_form">Save changes</button>
     </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
      </div>
    </div>
  </div>
</div>

   @endforeach

@endsection
