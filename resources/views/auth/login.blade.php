@extends("layouts.guest")
@section("title","connexion")
@section("content")

<section class="login-content">
    <div class="container">
       <div class="row align-items-center justify-content-center height-self-center">
          <div class="col-lg-8">
             <div class="card auth-card">
                <div class="card-body p-0">
                   <div class="d-flex align-items-center auth-content">
                      <div class="col-lg-7 align-self-center">
                         <div class="p-3">
                            <h2 class="mb-2">S'authentifier</h2>
                            <p>connectez-vous pour gérer votre entreprise.</p>
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" name="email" placeholder=" ">
                                        <label>Email <span class="text-danger">
                                            @error('email')
                                            {{$message}}
                                        @enderror</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                        <label>Password <span class="text-danger">
                                            @error('password')
                                            {{$message}}
                                        @enderror</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label control-label-1" for="customCheck1">Se rappeler de moi</label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <a href="auth-recoverpw.html" class="text-primary float-right">Mot de passe oublié?</a>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-success">s'authentifier</button>
                               {{-- <p class="mt-3">
                                  Create an Account <a href="auth-sign-up.html" class="text-primary">Sign Up</a>
                               </p> --}}
                            </form>
                         </div>
                      </div>
                      <div class="col-lg-5 content-right">
                         <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
