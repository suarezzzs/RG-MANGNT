<x-layout-guest page-title="Login">

<div class="container my-5">
    <div class="row justify-content-center">
        
        <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">

            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 200px;">
            </div>

            <div class="card border-0 shadow-sm p-4 p-lg-5">

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error("email")
                            <div class="text-danger small mt-1"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error("password")
                            <div class="text-danger small mt-1"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#">Esqueceu a sua senha?</a>
                    </div>
                </form>
            </div>

             <div class="text-center mt-4">
                <p class="text-muted">Não tem uma conta? <a href="#">Cadastre-se</a></p>
            </div>

        </div>
    </div>
</div>

</x-layout-guest>