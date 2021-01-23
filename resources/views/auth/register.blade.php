@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background: black; opacity: 0.8">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <a class="" href="#"><img src="{{asset('images/planter.png')}}" style="height: 50px;" alt="planter-logo"></a>
                    </div>
                </div>
                <hr style="background-color: white">
                <div class="row justify-content-center" style="color: white; text-decoration: underline; font-size: 20px">{{ __('Register') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="fname" class="col-3 col-form-label text-md-right">{{ __('First Name') }}</label>
                                    <input id="fname" type="text" class="col-8 form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="lname" class="col-3 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                    <input id="lname" type="text" class="col-8 form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="gender" class="col-3 col-form-label text-md-right">{{ __('Gender') }}</label>
                                    <input id="gender" type="text" class="col-8 form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>

                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="dob" class="col-3 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                                    <input id="dob" type="date" class="col-8 form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="nic" class="col-3 col-form-label text-md-right">{{ __('NIC') }}</label>
                                    <input id="nic" type="text" class="col-8 form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>

                                    @error('nic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="contact" class="col-3 col-form-label text-md-right">{{ __('Contact No.') }}</label>
                                    <input id="contact" type="text" class="col-8 form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="address" class="col-3 col-form-label text-md-right">{{ __('Current Address') }}</label>
                                    <input id="address" type="text" class="col-8 form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="col-8 form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="designation" class="col-3 col-form-label text-md-right">{{ __('Designation') }}</label>
                                    <input id="designation" type="text" class="col-8 form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus>

                                    @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="estate" class="col-3 col-form-label text-md-right">{{ __('Estate Name') }}</label>
                                    <input id="estate" type="text" class="col-8 form-control @error('estate') is-invalid @enderror" name="estate" value="{{ old('estate') }}" required autocomplete="estate">

                                    @error('estate')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="col-8 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="col-8 form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="form-group  mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
