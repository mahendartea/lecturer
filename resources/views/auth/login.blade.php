<x-guest-layout>
   <div class="hero min-h-screen bg-base-200" data-theme="light">
      <div class="flex-col justify-center hero-content lg:flex-row">
         <div class="text-center lg:text-left">
            <h1 class="mb-5 text-5xl font-bold">
               Selamat Datang..
            </h1>
            <p class="mb-5 mr-5">
               Silahkan login untuk mengakses aplikasi sebagai Dosen atau Mahasiswa.
            </p>
            <p>Belum memiliki akun? silahkan <a href="{{ route('register') }}"> <span
                     class="text-blue-500">registrasi.</span> </a> </p>
         </div>
         <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            @if (session('status'))
               <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
               </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
               @csrf
               <div class="card-body">
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Email</span>
                     </label>
                     <input type="email" placeholder="email" class="input input-bordered" name="email"
                        :value="old('email')" required autofocus>
                  </div>
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Password</span>
                     </label>
                     <input type="password" name="password" required autocomplete="current-password"
                        placeholder="password" class="input input-bordered">

                     @if (Route::has('password.request'))
                        <label class="label mt-5">
                           <a class="label-text-alt" href="{{ route('password.request') }}">Forgot
                              password?</a>
                        </label>
                     @endif
                  </div>
                  <div class="form-control mt-6">
                     <input type="submit" value="Login" class="btn btn-primary">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</x-guest-layout>
