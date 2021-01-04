@extends('layouts.app')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->

<section class="section-content padding-y">

  <!-- ============================ COMPONENT REGISTER   ================================= -->
  <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
    <article class="card-body">
      <header class="mb-4"><h4 class="card-title">Sign up</h4></header>
      <form method="post" action="/register">
        @csrf
        <div class="form-row">
          <div class="col form-group">
            <label>Full name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="" id="email" name="email">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group col-md-6">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="+998" id="phone" name="phone">
            <small class="form-text text-muted">Type your full phone number</small>
          </div>
        </div> <!-- form-group end.// -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>City</label>

            <select id="city" name="city" class="form-control">
              <option> Choose...</option>
              @foreach($cities as $city)
              <option value="{{ $city->id }}">{{$city->name}}</option>
              @endforeach
            </select>

          </div> <!-- form-group end.// -->

          <div class="form-group col-md-6">
            <label>District</label>
            <select id="district" name="district" class="form-control">
            </select>
          </div> <!-- form-group end.// -->

        </div> <!-- form-row.// -->
        <div class="form-row">
          <div class="col form-group">
            <label>Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Create password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div> <!-- form-group end.// --> 
          <div class="form-group col-md-6">
            <label>Repeat password</label>
            <input class="form-control" type="password" id="password-confirm" name="password-confirmation">
          </div> <!-- form-group end.// -->  
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> Register  </button>
        </div> <!-- form-group// -->      
        <div class="form-group"> 
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" checked="required">
            <div class="custom-control-label">I agree with<a href="#">terms and contitions</a>  </div>
          </label>
        </div> <!-- form-group end.// -->           
      </form>
    </article><!-- card-body.// -->
  </div> <!-- card .// -->
  <p class="text-center mt-4">Have an account? <a href="{{route('login')}}">Log In</a></p>
  <br><br>
  <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
  @endsection