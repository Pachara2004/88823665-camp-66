@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" onsubmit="return validateForm()" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="invalid-feedback">Name cannot be empty</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="invalid-feedback" id="emailError">Invalid email format</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="pass" class="form-control"
                                placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="invalid-feedback" id="passwordError">Password must contain uppercase, lowercase, and
                                a number</div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" id="mycheckbox" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                    <div class="invalid-feedback" id="checkboxError">You must agree to the terms</div>

                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <button type="button" class="btn" onclick="clickme">TEST JS</button>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function validateForm() {
            let isValid = true;

            let name = document.getElementById("name");
            let email = document.getElementById("email");
            let password = document.getElementById("pass");
            let checkbox = document.getElementById("mycheckbox");

            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;

            // Reset validation
            document.querySelectorAll(".invalid-feedback").forEach(el => el.style.display = "none");
            document.querySelectorAll(".form-control").forEach(el => el.classList.remove("is-invalid"));

            // Validate Name
            if (name.value.trim() === "") {
                name.classList.add("is-invalid");
                document.getElementById("nameError").style.display = "block";
                isValid = false;
            }

            // Validate Email
            if (!emailPattern.test(email.value.trim())) {
                email.classList.add("is-invalid");
                document.getElementById("emailError").style.display = "block";
                isValid = false;
            }

            // Validate Password
            if (!passwordPattern.test(password.value.trim())) {
                password.classList.add("is-invalid");
                document.getElementById("passwordError").style.display = "block";
                isValid = false;
            }

            // Validate Checkbox
            if (!checkbox.checked) {
                document.getElementById("checkboxError").style.display = "block";
                isValid = false;
            }

            return isValid; // ❗️ คืนค่า false ถ้าไม่ผ่าน validation
        }
    </script>
@endsection
