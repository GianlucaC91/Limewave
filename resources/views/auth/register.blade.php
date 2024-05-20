<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-xl-6 bg-white shadow-sm p-4 log-1">
                <x-error />
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 my-3 underline-colors">{{__("messages.register")}}
                </h1>
                <form method="POST" action="register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label log-1">{{__("messages.name")}}
                        </label><span class="text-danger mx-1">*</span>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__("messages.email")}}
                        </h1></label><span class="text-danger mx-1">*</span>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__("messages.password")}}</label><span class="text-danger mx-1">*</span>
                        <input type="password" name="password" class="form-control" id="password">
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__("messages.confirmPassword")}}</label><span class="text-danger mx-1">*</span>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    <div class="d-flex">
                        <p class="text-danger">*</p>
                        <p class="mx-2">{{__("messages.requiredField")}}</p>
                    </div>
                    <button type="submit"
                        class="btn btn-accent btn-lg fw-bold pt-3 px-4 shadow btn-hero-login pb-3 mt-4">{{__("messages.register")}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
