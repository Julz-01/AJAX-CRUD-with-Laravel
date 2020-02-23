@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form action="{{ url('/send')}}" method="POST">
                    @csrf
                      <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Product') }}</label>

                            <div class="col-md-6">
                                <input id="product" type="text" name="product" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" name="quantity" class="form-control" required>
                            </div>
                        </div>

                           <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="status" id="status">
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
<a class="btn btn-link" href="{{ url('/table_list')}}">
                                    {{ __(' View list') }}
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
