@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4  mt-n6">
            <div class="row gx-4">
                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                 @endif
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Edit Row
                        </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Stationwise Table') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ url('add-table-row') }}" method="POST" role="form text-left">
                    @csrf

                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="validation1" class="form-control-label">{{ __('District') }}</label>
                                <div >
                                    <input class="form-control" id="validation1" value="{{$row->district}}" placeholder="Ex: Dhaka" name="district" required>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="validation2" class="form-control-label">{{ __('Station') }}</label>
                                <div >
                                    <input class="form-control" id="validation2" value="{{$row->station}}"  type="number" placeholder="Number"  name="station" required>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="validation3"  class="form-control-label">{{ __('PM2.5 ') }}</label>
                                <div >
                                    <input class="form-control" id="validation3" value="{{$row->pm}}"  type="number" placeholder="Value"  name="pm" step="0.01" required>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validation4"  class="form-control-label">{{ __('AQI') }}</label>
                                <div >
                                    <input class="form-control" id="validation4" value="{{$row->aqi}}" type="number" placeholder="Value" name="aqi" step="0.01" required>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validation5"  class="form-control-label">{{ __('Organization') }}</label>
                                <div >
                                    <input class="form-control" id="validation5"   value="{{$row->organization}}" placeholder="Name" name="organization" required>
                                        @error('organization')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="validation6" class="form-control-label">{{ __('Season') }}</label>
                                <div >
                                    <input class="form-control" id="validation6"  value="{{$row->season}}"  placeholder="Ex: Summer"  name="season" required>

                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Add' }}</button>
                    </div>
               </form>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection