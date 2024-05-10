<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-xl-6 border-p bg-p shadow-sm p-4">
                <form method="POST" action="login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label"> Indirizzo email </label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    {{-- DECOMMENT WHEN IMPLEMENTED --}}
                    {{-- <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" value="" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Ricordami
                        </label>
                    </div> --}}
                    <div class="text-end">
                        <button type="submit" class="btn btn-accent w-25 shadow-sm">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
