@extends('base')


@section('content')

    <main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <img src="{{ asset('assets/img/CHED Logo New_20210406_CMYK_border.svg') }}" alt="Ched Login Logo" class="auth-logo">
                    {{-- <a href="#!" class="logo d-flex align-items-center w-auto">
                        <span class="d-none d-lg-block">CHRIS</span>
                    </a> --}}
                </div><!-- End Logo -->

                <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    </div>

                    <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Username</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Your Email</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="confirm-password" name="password" class="form-control" id="confirm-password" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                    </form>

                </div>
                </div>

            </div>
            </div>
        </div>

        </section>

    </div>
    </main><!-- End #main -->


@endsection
