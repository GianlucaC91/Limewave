<div class="d-flex flex-column justify-content-center ">

    {{-- INITIAL WELCOME WITH USER NAME --}}
    <h1 class="text-center">{{__("messages.welcomeProfile")}}
        {{ $user->name }}</h1>
    <div class="text-center">
        {{-- DISPLAY MESSAGE --}}
        <x-status />
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            {{-- COL IMG --}}
            @auth
                @if (Auth::id() == $user->id)
                    <div class="col-10 col-md-4 d-flex flex-column justify-content-center">
                        <label for="oldimg" class="form-label">{{__("messages.avatarCurrent")}}:</label>
                        @if ($imgPreview)
                            <img src="{{ $imgPreview }}" id="imgPreview" class="img-fluid my-3" alt="Preview">
                        @else
                            <img src="{{ Storage::url($user->img) }}" id="oldimg" class="img-fluid my-3" alt="Current Avatar">
                        @endif
                    </div>
                    {{-- COL FORM --}}
                    <div class="col-10 col-md-8 col-xl-6 border-p bg-p shadow-sm p-4">
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
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" wire:model="email" class="form-control" id="email">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            {{-- PASSWORD --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
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
                                <label for="img" class="form-label">{{__("messages.editAvatar")}}
                                </label>
                                <input type="file" wire:model="img" class="form-control" id="img">
                            </div>
                            <div class="text-danger">
                                @error('img')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- SEND BUTTON --}}
                            <button type="submit" class="btn btn-accent fw-bold shadow">{{__("messages.changeDate")}}</button>
                        </form>
                        {{-- LOADING TEXT --}}
                        <div wire:loading>
                            <p> {{__("messages.updateDati")}}...</p>
                        </div>
                @endif
            @endauth
            @if (Auth::id() !== $user->id)
                        

                <div class="d-flex justify-content-center my-3">
                    <img src="{{ Storage::url($user->img) }}" alt="" class="img-fluid" width="300px">
                </div>
                <h3>{{__("messages.announcementsOf")}} {{ $user->name }}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">>{{__("messages.created_at")}} </th>
                            <th scope="col">{{__("messages.annuoncementTitle")}}</th>
                            <th scope="col">{{__("messages.annuoncementDescription")}} </th>
                            {{-- <th scope="col">Immagine Annuncio</th> --}}
                            <th scope="col"> {{__("messages.annuoncementDetail")}} </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->articles as $article)
                            @if ($article->user->name == $user->name)
                                <tr>
                                    <th scope="row">{{ $article->created_at->format('d/m/Y H:m') }}</th>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ Str::limit($article->body, 20) }}</td>
                                    {{-- <td><img src="{{Storage::url($article->img)}}" alt=""></td> --}}
                                    <td class="mx-auto"><a href="{{ route('article.detail', compact('article')) }}"
                                            class="btn btn-s">{{__("messages.readMore")}}</a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>

</div>

</div>
