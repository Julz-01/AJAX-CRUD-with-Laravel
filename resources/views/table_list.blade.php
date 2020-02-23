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
      <th>product</th>
      <th>quantity</th>
      <th>status</th>
      <th>action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $dt)
    <tr>
     
      <td>{{$dt->name}}</td>
      <td>{{$dt->product}}</td>
      <td>{{$dt->quantity}}</td>
      <td>{{$dt->status}}</td>
      <td>
     <form action="{{ url('/destroy_id').'/'.$dt->id}}" method="POST">
      @csrf
      @method('DELETE')
  <button class="btn btn-danger">delete</button>       
     </form>
      <a href="{{url('/edit').'/'.$dt->id}}" class="btn btn-primary">
     Edit   
      </a> 
      </td>
    </tr>
  @endforeach
  </tbody>
 
  </table>
</div>
                </div>
                 <a href="{{url('/send_view')}}"> List
  </a>
            </div>
        </div>
    </div>
</div>
@endsection
