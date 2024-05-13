<div class="d-flex flex-column justify-content-center ">
    {{-- INITIAL WELCOME WITH USER NAME --}}
    <h1 class="text-center">Benvenuto nel tuo profilo, {{ $name }}</h1>
    <div class="text-center">
        {{-- DISPLAY MESSAGE --}}
        <x-status />
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            {{-- COL IMG --}}
            <div class="col-10 col-md-4 d-flex flex-column justify-content-center">
                <label for="oldimg" class="form-label fs-4 mb-4">Avatar attuale:</label>
                <img src="{{ Storage::url($user->img) }}" id="oldimg" class="img-fluid my-3 me-5 mt-0" alt="">
            </div>
            {{-- COL FORM --}}
            <div class="col-10 col-md-8 col-xl-6 border-p bg-p p-4 rounded-0 form-user">
                <div class="line me-5 d-none d-lg-block"></div>
                <form enctype="multipart/form-data" wire:submit.prevent="updateUser" wire:loading.remove>
                    @csrf
                    {{-- NAME --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="name" wire:model="name">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    {{-- EMAIL --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" wire:model="email" class="form-control" id="email">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    {{-- PASSWORD --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" wire:model="password" class="form-control" id="password">
                    </div>
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    {{-- PASSWORD CONFIRMATION NOT NEEDED MAYBE --}}
                    {{-- <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" wire:model="password_confirmation" class="form-control"
                            id="password_confirmation">
                        <div class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                    </div> --}}
                    {{-- MODIFY IMG --}}
                    <div class="mb-3">
                        <label for="img" class="form-label">Modifica Avatar</label>
                        <input type="file" wire:model="img" class="form-control" id="img">
                    </div>
                    <div class="text-danger">
                        @error('img')
                            {{ $message }}
                        @enderror
                    </div>
                    {{-- SEND BUTTON --}}
                    <button type="submit" class="btn bg-a-custom btn-user">Modifica dati utente</button>
                </form>
                {{-- LOADING TEXT --}}
                <div wire:loading>
                    <p>Sto aggiornando i dati...</p>
                </div>
            </div>
        </div>
    </div>
</div>
