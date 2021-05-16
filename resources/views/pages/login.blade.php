<x-app-layout>
    <!-- Login -->
    <section class="login container">
      <div class="row my-4 text-center text-md-start" style="color: rgba(0, 0, 0, 0.63); font-weight: 600">
        <div class="col">
          <h2>Login</h2>
        </div>
      </div>
      <div class="row d-flex flex-column flex-md-row align-items-center justify-content-center mb-5">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col">
          <img src="{{ asset('assets/img/Register.png') }}" alt="Landing" width="625" class="d-none d-md-block" />
        </div>
        <div class="col">
          <div class="login-form d-flex flex-column" style="color: #5e5e5e">
            <form method="POST" action="{{ route('signin') }}">
                @csrf
              <div class="mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />
              </div>
              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>

              <div class="d-flex flex-row align-items-center justify-content-center">
                <button type="submit" class="btn mt-3" style="background: linear-gradient(89.64deg, #4ec64f 4.71%, #7fda49 96.14%); color: #ffffff">Sign In</button>
              </div>
              <div class="text-center mt-4"><a>Don't have an account? </a><a href="{{ route('register') }}" style="color: #58ca5a; cursor: pointer">Sign Up</a></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login -->
</x-app-layout>
