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

                   <form action="{{url('/resend')}}" method="POST">
                    @csrf
                      <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" class="form-control" required>
                            </div>
                        </div>


                  
                       
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="text" name="number" class="form-control" required>
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
