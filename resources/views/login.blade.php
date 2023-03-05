@extends('layout.app2')
@section('container')

<section id="hero" class="hero d-flex align-items-center">

<div class="container">
    <div class="row">
    <section id="hero" class="hero d-flex align-items-center">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
            <br><br>
                <img class="mb-4" src="{{ asset('img/BG2.png') }}" alt="" width="380" height="340" data-aos="fade-up">

            <h6 class="mt-2" data-aos="fade-up" data-aos-delay="400">  Login ke administrator berfungsi untuk mengakses decision tree, data latih, & beberapa hal terkait algoritma C4.5 lainnya.
            </h6>
        </div>
    @csrf
    <main class="form-signin w-100 m-auto" data-aos="fade-up">
        @csrf
        <form action="{{ route('admin') }}" method="post">
            <br>
            <br>
                <h3 class="h4 mb-3 fw-normal" data-aos="fade-up" data-aos-delay="400">Login administrator</h3>
            <br>
            <div class="form-floating" data-aos="fade-up" data-aos-delay = "">
                <input type="text" name='username' class="form-control" id="username" placeholder="username" autofocus required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating"data-aos="fade-up" data-aos-delay="800">
                <input type="password" name='password' class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
             <br>   
             </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" data-aos="fade-up" data-aos-delay="1200">Login</button>
                <small class=" d-block text-center mt-4" data-aos="fade-up" data-aos-delay="1400">
                    silahkan menghubungi devloper untuk mendapatkan akses ke administrator
                    <br><br>&copy;canna-2023 | <a href="/kontak">Raafh</a>  
                </small> 
                
        </form>
    </main>

</section><!-- End Hero -->
</div>
</div>
</section><!-- End Hero -->

@endsection