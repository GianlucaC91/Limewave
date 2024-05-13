<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-xl-6 bg-white shadow-sm p-4 log-1">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors">Registrati</h1>
                <form method="POST" action="register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label log-1">Username </label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-s btn-lg fw-bold pt-3 px-4 shadow btn-hero-login pb-3 mt-4">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
