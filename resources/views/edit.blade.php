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

                 <form action="{{ url('/update_id').'/'.$data->id}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Product') }}</label>

                            <div class="col-md-6">
                                <input id="up_product" type="text" name="up_product" class="form-control" value="{{$data->product}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="up_quantity" type="text" name="up_quantity" class="form-control" value="{{$data->quantity}}" required>
                            </div>
                        </div>

                           <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="up_status" id="up_status">
                                    <option value="Active">Active</option>
                                    <option value="Not Actice">Not Actice</option>
                                </select>
                            </div>
                        </div>
                      

                          <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                       </form>
<a class="btn btn-link" href="">
                                    {{ __('send') }}
                                </a>
                            </div>
                        </div>

            
                </div>



            </div>
        </div>
    </div>
</div>

@endsection
