@extends('master')
@section('title', 'Contact')

@section('content')
<!-- About Section -->
<section id="about" class="home-section text-center bg-gray">
		<div class="heading-about marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>Contact Me</h2>
                    <p>Need to send a quick message?</p>
					</div>
           @if(Session::has('success'))
           <div class="alert alert-success">
            {{ Session::get('success') }} 
           </div>
          @endif

{!! Form::open(['route'=>'contact_us.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>


<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>


<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::text('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Submit</button>
</div>

{!! Form::close() !!}

			
				</div>
			</div>
			</div>
		</div>
		<div class="container">
</section>
@endsection
