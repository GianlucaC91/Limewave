<x-layout>

    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 col-md-8 col-xl-6 bg-white shadow-sm p-4 log-1">

                <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors"> {{__("messages.becomeAuditor")}} </h1>
                
                <form method="POST" action="{{route('send.email')}}">
                    @csrf
                  
                    <div>
                        <label for="name" class="form-label log-1">  {{__("messages.name")}} </label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
                        <div class="text-danger">
                            @error('name')
                                "{{__("messages.validName")}}"
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label log-1">  {{__("messages.email")}} </label>
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
                        <label for="description" class="form-label">{{__("messages.workUs")}}</label>
                        <textarea name="description" id="description" type="text" class="form-control" cols="30" rows="5"></textarea>
                        <div class="text-danger">
                            @error('description')
                                "{{__("messages.validDescription")}}"
                            @enderror
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-accent fw-bold px-4 shadow btn-hero-login mt-4">{{__("messages.sendInquiry")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
