<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-xl-8">
            <div>
                <x-status/> 
            
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
            
                            <form 
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
                                <button type="submit" class="btn btn-primary  fw-bold w-25 shadow-sm">Crea</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            
            
            
            </div>

        </div>
    </div>
</div>






{{-- - Titolo, prezzo e descrizione come campi necessari --}}
 