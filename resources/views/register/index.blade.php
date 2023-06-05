
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <br><br><br><br>
            <h1 class="h2 mb-3 fw-font-font-weight-normal text-center col">Register</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating mb-1">
                    <label for="name">nama</label>
                    <input type="text" name='name' class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="" required value="{{ old('name') }}" >
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-1">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="" required value="{{ old('username') }}" >
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-1">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" required value="{{ old('email') }}" >
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                <small class="d-block text-center mt-3">
                    Have Account? <a href="/login">Login Now</a>
                </small>

            </form>

        </main>

    </div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>&copy; SMKN 1 SINGOSARI</span>
        </div>
    </div>
</footer>
