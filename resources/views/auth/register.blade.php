@extends("template")
@section("content")

<main class="container form-signin w-100 m-auto min-vh-100">
  <form action="{{url("login")}}" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign un</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" name="confirmation_password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    <a href="{{url('login')}}">Log In</a>
  </form>
</main>