<div class="d-flex flex-column justify-content-center ">
    <h1 class="text-center">Benvenuto nel tuo profilo , {{ $name }}</h1>
    <div class="text-center">
        <x-status></x-status>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <label for="oldimg" class="form-label">Avatar attuale:</label>
            <img src="{{ Storage::url($user->img) }}" id="oldimg" class="img-fluid my-3 w-25 h-25" alt="">


            <div class="col-10 col-md-8 col-xl-6 border-p bg-p shadow-sm p-4">
                <form enctype="multipart/form-data" wire:submit.prevent="updateUser" wire:loading.remove>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="name" wire:model="name">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" wire:model="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" wire:model="password" class="form-control" id="password">
                    </div>
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" wire:model="password_confirmation" class="form-control"
                            id="password_confirmation">
                        <div class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Modifica Avatar</label>
                        <input type="file" wire:model="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica dati utente</button>
                </form>
                <div wire:loading>
                    <p>Sto aggiornando i dati...</p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
