<?php
include '../include/header.php';

?>

<form class="form-signin" style="padding-left:600px;padding-right:600px;padding-top:100px;">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login Buggy</h1>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">© 2022-2023</p>
</form>