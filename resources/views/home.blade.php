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

                   <form method="POST">
                    @csrf
                      <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                           <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" name="address" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="text" name="number" class="form-control" required>
                            </div>
                        </div>



                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

                          <div class="form-group">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" id="submit_form">
                                    {{ __('Submit') }}
                                </button>
<a class="btn btn-link" href="{{ route('table') }}">
                                    {{ __(' User list') }}
                                </a>

                                <a class="btn btn-link" href="{{ url('/resend_view') }}">
                                    {{ __('Send') }}
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
