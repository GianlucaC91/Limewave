
            <div>
                <x-status/> 
            
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-10 col-md-8 col-xl-6  bg-white shadow p-4 log-1">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-5 underline-colors ">Crea Articolo </h1>
                            <form 
                            class=""
                            wire:submit="store"
                             >
                                <div class="mb-3">
                                    <label for="title" class="form-label">Titolo</label>
                                    <input wire:model="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                    <div class="text-danger">@error("title") {{$message}} @enderror</div>
                                </div>
            
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 ps-0">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Prezzo</label>
                                                <input wire:model="price" type="text" class="form-control" id="price">
                                                <div class="text-danger">@error("price") {{$message}} @enderror</div>
                                            </div>
            
                                        </div>
                                        <div class="col-8 pe-0">
                                            <div class="mb-3">
                                                <label for="category" class="form-label">Categoria</label>
                                                <select wire:model="category" class="form-select" aria-label="Default select example">
                                                    <option selected value="{{null}}">Seleziona la categoria</option>
                                                    @foreach ($categories as $category)
                                                   
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach                                 
                                                </select>
                                                <div class="text-danger">@error("category") {{$message}} @enderror</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
            
                                <div class="mb-3">
                                    <label for="body" class="form-label">Descrizione</label>
                                    <textarea wire:model="body" type="text" class="form-control" id="body" cols="30" rows="5"></textarea>
                                    <div class="text-danger">@error("body") {{$message}} @enderror</div>
                                </div>
                                <button type="submit" class="btn btn-accent btn-lg fw-bold pt-3 px-4 shadow btn-hero-login pb-3 mt-4">Crea</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            
            
            
            </div>

  






{{-- - Titolo, prezzo e descrizione come campi necessari --}}
 