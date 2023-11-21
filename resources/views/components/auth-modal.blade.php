{{-- registration modal started  --}}

<div class="modal fade" id="register-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="register-modal">Create New Account</h4>
                <button type="button" class="btn-close pt-4 pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 box">
                            <div class="mb-4">

                                {{-- <form method="post" id="registation-form" action="{{ route('frontend.Register') }}"
                                    class="customer-form"> --}}
                                <form method="post" id="registation-form"
                                    onsubmit="uploadData1('registation-form','{{ route('frontend.Register') }}','reg-alert','reg-alert-btn', event)"
                                    class="customer-form">

                                    @csrf
                                    <div id="reg-alert"></div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="full_name"
                                                    placeholder="Full Name *" required>
                                                <p class="form-feedback invalid-feedback" data-name="full_name"></p>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email *" required>
                                                <p class="form-feedback invalid-feedback" data-name="email"></p>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 ">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password *" required>
                                                <p class="form-feedback invalid-feedback" data-name="password"></p>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 ">
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Confirm Password *" required>
                                                <p class="form-feedback invalid-feedback"
                                                    data-name="password_confirmation">
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="text-center col-12" id="reg-alert-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Sign
                                                Up</button>
                                        </div>
                                        <div class="text-center col-12 align-middle pt-3">
                                            <a href="javascript:;"
                                                onclick="show_modal('login-modal');hide_modal('register-modal')"><i
                                                    class="icon an an-angle-double-left me-1"></i> Login into your
                                                account </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- registration modal ended  --}}


{{-- login modal started  --}}

<div class="modal fade" id="login-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login Into Your Account</h4>
                <button type="button" class="btn-close pt-4 pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            {{-- login form box --}}
                            <div class="py-3" id="login-form-box">
                                <form method="post" id="login-form"
                                    onsubmit="userLogin('login-form','{{ route('frontend.login') }}','login-alert','login-alert-btn', event)"
                                    class="customer-form">
                                    @csrf

                                    <div class="row">

                                        <div id="login-alert"></div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" required
                                                    placeholder="Your Email *">
                                                <p class="form-feedback invalid-feedback" data-name="email"></p>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password *" required>
                                                <p class="form-feedback invalid-feedback" data-name="password">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center mb-3" id="login-alert-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Sign
                                                In</button>
                                        </div>
                                        <div class="text-center mb-2">
                                            <a href="javascript:;"
                                                onclick="show_modal('register-modal');hide_modal('login-modal')">Create
                                                Account </a>
                                        </div>
                                        <div class="text-center mb-2">
                                            <a href="javascript:;"
                                                onclick="show_modal('reset-password-modal');hide_modal('login-modal')">Forgot
                                                Password ? </a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            {{-- resend verification email  --}}
                            <div class="py-3 hide" id="resend-form-box">
                                <form method="post" id="resend-form"
                                    onsubmit="uploadData1('resend-form','{{ route('frontend.sendReEmailVerificationLink') }}','resend-alert','resend-btn', event)"
                                    class="customer-form">
                                    @csrf

                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h2>Resent Email Verification Link</h2>
                                        </div>
                                        <div id="resend-alert"></div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Your Email *" required>
                                                <p class="form-feedback invalid-feedback" data-name="email"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12" id="resend-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2 ">Send
                                                Verification Link</button>
                                        </div>
                                        <div class="text-center col-12 mt-3">
                                            <a href="#" onclick="showLoginForm()">Back To
                                                Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- login modal ended  --}}


{{-- otp modal started  --}}

<div class="modal fade" id="otp-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="otp-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Device Verification</h4>
                <button type="button" class="btn-close pt-4 pe-4" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="py-3">
                                <form method="post" id="otp-verification-form"
                                    onsubmit="uploadData1('otp-verification-form','{{ route('frontend.loginOtpVerification') }}','otp-alert','otp-alert-btn', event)"
                                    class="customer-form">
                                    @csrf

                                    <div class="row">

                                        <div id="otp-alert"></div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>OTP <span class="required">*</span></label>
                                                <input type="number" class="form-control" name="otp"
                                                    placeholder="OTP" required>
                                                <p class="form-feedback invalid-feedback" data-name="otp"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12" id="otp-alert-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Verify</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- otp modal ended  --}}




{{-- reset password  modal started  --}}

<div class="modal fade" id="reset-password-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reset Password</h4>
                <button type="button" class="btn-close pt-4 pe-4" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            {{-- send email form box --}}
                            <div class="py-3" id="send-reset-password-form-box">
                                <form method="post" id="pass-reset-email-verification-form"
                                    onsubmit="sendPassResetOtp('pass-reset-email-verification-form','{{ route('frontend.passwordResetCheckUser') }}','pass-reset-alert','pass-reset-btn', event)"
                                    class="customer-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h6>Email Verification</h6>
                                        </div>
                                        <div id="pass-reset-alert"></div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="email" class="form-control" required
                                                    placeholder="Email">
                                                <p class="form-feedback invalid-feedback" data-name="email"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12 mb-3" id="pass-reset-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Send
                                                OTP</button>
                                        </div>
                                        <div class="text-center col-12">
                                            <a href="#"
                                                onclick="show_modal('login-modal');hide_modal('reset-password-modal')">Back
                                                To
                                                Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- otp verification for password reset   --}}


                            <div class="py-3 hide" id="otp-password-form-box">
                                <form method="post" id="pass-reset-otp-verification-form"
                                    onsubmit="VerifyPassResetOtp('pass-reset-otp-verification-form','{{ route('frontend.passwordResetOtpCheck') }}','pass-reset-otp-alert','pass-reset-otp-btn', event)"
                                    class="customer-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h6>Device Verification</h6>
                                        </div>
                                        <div id="pass-reset-otp-alert"></div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>OTP <span class="required">*</span></label>
                                                <input type="number" name="otp" class="form-control" required
                                                    placeholder="OTP">
                                                <p class="form-feedback invalid-feedback" data-name="otp"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12" id="pass-reset-otp-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Verify</button>
                                        </div>

                                        <div class="text-center col-12 mt-3">
                                            <a href="#"
                                                onclick="show_modal('login-modal');hide_modal('reset-password-modal')">Back
                                                To
                                                Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- resend password  --}}

                            <div class="py-3 hide" id="new-password-form-box">
                                <form method="post" id="new-password-form"
                                    onsubmit="uploadData1('new-password-form','{{ route('frontend.updatePassword') }}','new-password-alert','new-password-btn', event)"
                                    class="customer-form">
                                    @csrf

                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h6>Create New Password </h6>
                                        </div>
                                        <div id="new-password-alert"></div>

                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password">
                                                <p class="form-feedback invalid-feedback" data-name="password">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input type="password" class="form-control"
                                                    name="password_confirmation" placeholder="Confirm Password">
                                                <p class="form-feedback invalid-feedback"
                                                    data-name="password_confirmation">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-left col-lg-6" id="new-password-btn">
                                            <button type="submit"
                                                class="action_btn btn_small_two btn-text-medium round-btn-2">Update
                                                Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- reset password modal ended  --}}
