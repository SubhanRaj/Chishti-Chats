<x-auth>
    <x-slot:title>
        Register for Chishti Chats
    </x-slot:title>
    <section class="signup_area signup_area_height">
        <div class="row ms-0 me-0">
            <div class="sign_left signup_left">
                <h2>A Great community awaits for you</h2>
                <img class="position-absolute top" src="{{asset('assets/img/signup/top_ornamate.png')}}" alt="top">
                <img class="position-absolute bottom" src="{{asset('assets/img/signup/bottom_ornamate.png')}}" alt="bottom">
                <img class="position-absolute middle wow fadeInRight" src="{{asset('assets/img/signup/man_image.png')}}" alt="bottom">
                <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
            </div>
            <div class="sign_right signup_right">
                <div class="sign_inner signup_inner">
                    <div class="text-center">
                        <h3>Create your Account</h3>
                        <p>Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </div>
                    <div class="divider">
                        <span class="or-text">or</span>
                    </div>
                    <form action="#" class="row login_form">
                        <div class="col-sm-6 form-group">
                            <div class="small_text">First name</div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="John">
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="small_text">Last name</div>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Doe">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="small_text">Your email</div>
                            <input type="email" class="form-control" id="email" placeholder="someone@kmclu.ac.in">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="small_text">Password</div>
                            <input id="signup-password" name="signup-password" type="password" class="form-control" placeholder="8+ characters required" autocomplete="off">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="small_text">Confirm password</div>
                            <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="8+ characters required" autocomplete="off">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="check_box">
                                <input type="checkbox" value="None" id="squared2" name="check">
                                <label class="l_text" for="squared2">Remember Me</span></label>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn action_btn thm_btn">Create an account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-auth>