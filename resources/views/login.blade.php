@extends('layouts.app') 
@section('sidebar')
    <!-- Optionally, you can leave the sidebar empty or define something specific -->
@endsection
<div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-group d-block d-md-flex row">
          <div class="card col-md-7 p-4 mb-0">
            <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
            @csrf
              <h1>Login </h1>
              <p class="text-body-secondary">Sign In to your account</p>
              <div class="input-group mb-3"><span class="input-group-text">
                  <svg class="icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg></span>
                <input class="form-control" type="text" placeholder="Email" name="email">
              </div>
              <div class="input-group mb-4"><span class="input-group-text">
                  <svg class="icon">
                    <use xlink:href="nodesass_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg></span>
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">Login</button>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-link px-0" type="button">Forgot password?</button>
                </div>
              </div>
            </form>
            </div>
          </div>
          <div class="card col-md-5 text-white bg-primary py-5">
            <div class="card-body text-center">
              <div>
                <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>