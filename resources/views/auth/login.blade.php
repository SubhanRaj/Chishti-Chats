<x-auth>
    <x-slot:title>
        Login to Chishti Chats
    </x-slot:title>

    <section class="signup_area">
        <div class="row ms-0 me-0">
            <div class="sign_left signin_left">
                <h2>We are design changers do what matters.</h2>
                <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                <img class="position-absolute middle" src="img/signup/door.png" alt="bottom">
                <div class="round"></div>
            </div>
            <div class="sign_right signup_right">
                <div class="sign_inner signup_inner">
                    <div class="text-center">
                        <h3>Sign in to Ama platform</h3>
                        <p>Don’t have an account yet? <a href="signup.html">Sign up here</a></p>
                        <a href="#" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">Sign in with Gmail</span></a>
                    </div>
                    <div class="divider">
                        <span class="or-text">or</span>
                    </div>
                    <form action="#" class="row login_form">
                        <div class="col-lg-12 form-group">
                            <div class="small_text">Your email</div>
                            <input type="email" class="form-control" id="email" placeholder="info@Ama.com">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="small_text">Confirm password</div>
                            <div class="confirm_password">
                                <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off">
                                <a href="#" class="forget_btn">Forgotten password?</a>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn action_btn thm_btn">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-auth>