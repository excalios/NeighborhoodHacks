<x-app-layout>
    <section class="register container">
      <div class="row my-4 text-center text-md-start" style="color: rgba(0, 0, 0, 0.63); font-weight: 600">
        <div class="col">
          <h2>Register</h2>
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
          <div class="register-form d-flex flex-column" style="color: #5e5e5e">
            <form method="POST" action="{{ route('signup') }}">
                @csrf
              <div class="mb-2">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"/>
              </div>
              <div class="mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}"/>
              </div>
              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"/>
              </div>
              <div class="mb-2">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
              </div>
              <div class="mb-2">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"/>
              </div>
              <div class="mb-2">
                <label for="province_id" class="form-label">Province</label>
                <select id="province_id" class="form-select" name="province_id">
                  <option selected disabled>Select Province</option>
                  <option value="1">Kalimantan Selatan</option>
                </select>
              </div>
              <div class="mb-2">
                <label for="regency_id" class="form-label">City</label>
                <select id="regency_id" class="form-select" name="regency_id">
                  <option selected disabled>Select Province</option>
                  <option value="1">Banjarmasin</option>
                </select>
              </div>
              <div class="d-flex flex-row align-items-center justify-content-center">
                <button type="submit" class="btn mt-3" style="background: linear-gradient(89.64deg, #4ec64f 4.71%, #7fda49 96.14%); color: #ffffff">Sign Up</button>
              </div>
              <div class="text-center mt-4">
                <a>Already have an account? <a href="{{ route('login') }}" style="color: #58ca5a; cursor: pointer">Sign In</a></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Register -->
</x-app-layout>
