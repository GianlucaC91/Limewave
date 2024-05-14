<x-layout>

    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 col-md-8 col-xl-6  bg-white shadow-sm p-4 log-1">
                <x-error/>
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors">Accedi</h1>
                <form method="POST" action="login" >
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label log-1"> Indirizzo email </label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    {{-- DECOMMENT WHEN IMPLEMENTED --}}
                     <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" value="true" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Ricordami
                        </label>
                    </div> 
                    <div class="text-end">
                        <button type="submit" class="btn btn-accent btn-lg fw-bold pt-3 px-4 shadow btn-hero-login pb-3 mt-4">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
