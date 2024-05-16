<div>
    <x-status />
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-xl-6  bg-white shadow p-4 log-1">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-5 underline-colors ">Inserisci Annuncio</h1>
                <form class="" wire:submit="store">
                    {{-- TITLE --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input wire:model="title" type="text" class="form-control" id="title"
                        aria-describedby="emailHelp">
                        <div class="text-danger">
                            @error('title')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 ps-0">
                                {{-- PRICE --}}
                                <div class="mb-3">
                                    <label for="price" class="form-label">Prezzo</label>
                                    <input wire:model="price" type="text" class="form-control" id="price">
                                    <div class="text-danger">
                                        @error('price')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-8 pe-0">
                                {{-- CATEGORY SELECT --}}
                                <div class="mb-3">
                                    <label for="category" class="form-label">Categoria</label>
                                    <select wire:model="category" class="form-select"
                                    aria-label="Default select example">
                                    <option selected value="{{ null }}">Seleziona la categoria</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('category')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    {{-- DESCRIPTION --}}
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione</label>
                        <textarea wire:model="body" type="text" class="form-control" id="body" cols="30" rows="5"></textarea>
                        <div class="text-danger">
                            @error('body')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                
                    {{-- IMAGES  --}}
                    <div class="text-danger">
                        @error('images')
                        {{ $message }}
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="images" class="form-label">Inserisci immagini</label>
                        <input type="file" wire:model="temp_images" multiple class="form-control" id="images" name="images">
                    </div>
                        {{-- IMAGES PREVIEW --}}
                        @if (!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>Photo Preview:</p>
                                @foreach ($images as $key => $img)                            
                                <div>
                                    <img src="{{$img->temporaryUrl()}}" alt="">
                                    <h1>ciao</h1>
                                    <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">X</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    
                    {{-- SEND BUTTON --}}
                    <button type="submit"
                    class="btn btn-accent fw-bold w-25">Crea</button>
            </form>
            
        </div>
    </div>
</div>



</div>








{{-- - Titolo, prezzo e descrizione come campi necessari --}}
