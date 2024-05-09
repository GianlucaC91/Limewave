<div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12">

                <form 
                wire:submit="store"
                 >
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input wire:model="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input wire:model="price" type="text" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-secondary w-100 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </button>
                          <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            
                          </ul>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione</label>
                        <textarea wire:model="body" type="text" class="form-control" id="body" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea!</button>
                </form>
                
            </div>
        </div>
    </div>



</div>


{{-- - Titolo, prezzo e descrizione come campi necessari --}}
 