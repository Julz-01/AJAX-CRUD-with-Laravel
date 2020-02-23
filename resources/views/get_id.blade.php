@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form action="{{url('/up_id').'/'.$data->id}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="up_name" class="form-control" value="{{$data->name}}" required>
                            </div>
                        </div>


                  
                       
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="text" value="{{$data->number}}" name="up_number" class="form-control" required>
                            </div>
                        </div>




                          <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" >
                                  Submit 
                                </button>
<a class="btn btn-link" href="{{ url('/rtable') }}">
                                    {{ __(' send list') }}
                                </a>

                        
                            </div>
                        </div>

                   </form>
                </div>



            </div>
        </div>
    </div>
</div>

@endsection
