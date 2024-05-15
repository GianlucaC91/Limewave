<x-layout>

    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 col-md-8 col-xl-6 bg-white shadow-sm p-4 log-1">
                <x-status/>
                {{-- <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors"> Nome </h1> --}}
                
                <form method="POST" action="{{route('send.email')}}">
                    @csrf
                  
                    <div class="mb-3">
                        <label for="name" class="form-label log-1"> Nome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label log-1"> Indirizzo email </label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Perchè vuoi lavorare con noi? </label>
                        <textarea name="description" id="description" cols="30" rows="10"> </textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-accent btn-lg fw-bold pt-3 px-4 shadow btn-hero-login pb-3 mt-4">Invia richiesta </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
