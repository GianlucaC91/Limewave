<div>
    <x-status />
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-xl-6  bg-white shadow p-4 log-1">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-5 underline-colors ">{{__("messages.insertAd")}}</h1>
                <form class="" wire:submit="store">
                    {{-- TITLE --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">{{__("messages.title")}}</label><span class="text-danger mx-1">*</span>
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
                                    <label for="price" class="form-label">{{__("messages.price")}}</label><span class="text-danger mx-1">*</span>
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
                                    <label for="category" class="form-label">{{__("messages.category")}}</label><span class="text-danger mx-1">*</span>
                                    <select wire:model="category" class="form-select"
                                    aria-label="Default select example">
                                    <option selected value="{{ null }}">{{__("messages.selectCategory")}}</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{__("messages." . $category->name) }}</option>
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
                        <label for="body" class="form-label">{{__("messages.description")}}</label><span class="text-danger mx-1">*</span>
                        <textarea wire:model="body" type="text" class="form-control" id="body" cols="30" rows="5"></textarea>
                        <div class="text-danger">
                            @error('body')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                
                    {{-- IMAGES  --}}
                    
                    <div class="mb-3">
                        <label for="images" class="form-label">{{__("messages.insertImage")}}</label><span class="text-danger mx-1">*</span>
                        <input type="file" wire:model="temp_images" multiple class="form-control" id="images" name="images">
                    </div>

                    {{-- IMAGES PREVIEW --}}
                    
                    <div class="container bg-s mb-2 @if ($images) borderCreate @endif">
                        <div class="row justify-content-center justify-content-md-between bg-white">
                            @foreach ($images as $key => $img) 
                                <div class="col-10 col-md-3 m-2 d-flex align-content-center">
                                    <div class="d-flex flex-column justify-content-between">
                                        <img src="{{$img->temporaryUrl()}}" class="d-block w-100" alt="...">
                                        <button type="button"  class="btn fw-bold w-25 btnDelete border-0" wire:click="removeImage({{$key}})">Elimina</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex">
                        <p class="text-danger">*</p>
                        <p class="mx-2">Campi obbligatori</p>
                    </div>

                    {{-- CAROUSEL CREATE --}}
                    {{-- <div id="carouselExampleIndicators" class="detailCarousel carousel slide w-100">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <p>Immagini che hai selezionato</p>
                        <div class="carousel-inner">
                            @foreach ($images as $key => $img)  
                            <div class="carousel-item active">
                                <img src="{{$img->temporaryUrl()}}" class="d-block w-100 carouselImgSize" alt="...">
                                <button type="button"  class="btn my-3 fw-bold w-25 btnDelete" wire:click="removeImage({{$key}})">Elimina</button>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">{{__("messages.previous")}}
                          </span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">{{__("messages.next")}}</span>
                        </button>
                    </div> --}}
                    {{--FINE CAROUSEL CREATE --}}
                    
                    {{-- SEND BUTTON --}}
                    <button type="submit"
                    class="btn btn-accent fw-bold w-25">{{__("messages.create")}}</button>
            </form>
            
        </div>
    </div>
</div>



</div>








{{-- - Titolo, prezzo e descrizione come campi necessari --}}
