<x-layout>

    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 col-md-8 col-xl-6 p-4 log-1 pe-md-5 pe-2">
                <h2 class="text-body-emphasis lh-1 display-5">Entra a far parte</h2>
                <h3 class="text-body-emphasis lh-1 my-3 fw-bold display-5">del nostro team</h3>
                <p class="fs-5 lead my-4">Siamo un team dinamico e inclusivo, felice di accogliere persone che siano per noi un valore aggiunto e vogliano davvero fare la differenza nel settore.
                    Le persone per noi rappresentano un patrimonio importante di competenze ed esperienze, da coltivare ogni giorno.
                    In Limewave è fondamentale prendersi cura del benessere e della crescita professionale del team, assicurando il giusto equilibrio tra vita privata e lavorativa, percorsi di carriera e formazione continua.
                    Siamo alla costante ricerca di nuovi colleghi che promuovano la nostra value proposition e la nostra mission,  consapevoli dell’impatto etico nella vita di chi li sceglie.</p>
                </div>
                <div class="col-10 col-md-8 col-xl-6 bg-white shadow-sm p-4 log-1">
    
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors"> {{__("messages.becomeAuditor")}} </h1>
                    
                    <form method="POST" action="{{route('send.email')}}">
                        @csrf
                      
                        <div class="mb-3">
                            <label for="name" class="form-label log-1">  {{__("messages.name")}} </label><span class="text-danger mx-1">*</span>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
                            <div class="text-danger">
                                @error('name')
                                    "{{__("messages.validName")}}"
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">  {{__("messages.email")}} </label><span class="text-danger mx-1">*</span>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
                            <div class="text-danger">
                                @error('email')
                                    ""{{__("messages.validEmail")}}""
                                @enderror
                            </div>
                        </div>
    
                        {{-- <div class="mb-3">
                            <label for="description" class="form-label">Perchè vuoi lavorare con noi? </label>
                            <textarea name="description" id="description" cols="30" rows="10"> </textarea>
                        </div> --}}
    
                        <div class="mb-3">
                            <label for="description" class="form-label">{{__("messages.workUs")}}</label><span class="text-danger mx-1">*</span>
                            <textarea name="description" id="description" type="text" class="form-control" cols="30" rows="5"></textarea>
                            <div class="text-danger">
                                @error('description')
                                    "{{__("messages.validDescription")}}"
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="text-danger">*</p>
                            <p class="mx-2">Campi obbligatori</p>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-accent fw-bold px-4 shadow btn-hero-login mt-4">{{__("messages.sendInquiry")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-layout>
                    
                    

