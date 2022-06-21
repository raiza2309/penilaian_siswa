@extends("template")
@yield("content")
<main class="container form-signin w-100 m-auto min-vh-100">
  <form action="{{url("login")}}" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
    <a href="{{url('register')}}">Register</a>
  </form>
</main>