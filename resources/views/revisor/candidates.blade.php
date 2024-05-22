<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-10 my-5 bg-white p-5 shadow-sm">
                <h2 class="display-6 fw-bold text-body-emphasis ps-3 lh-1 mb-3 underline-colors">{{__("messages.revisorCandidates")}}</h2>
            </div>
       

        <div class="col-12 col-md-10 ">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{__("messages.name")}}</th>
                                <th scope="col">{{__("messages.email")}}</th>
                                @if (Auth::user()->is_admin)
                                <th scope="col">{{__("messages.actions")}}</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidates as $candidate)
                                <tr>
                                    <td>{{ $candidate->name }}</td>
                                    <td>{{ $candidate->email }}</td>
                                    @if (Auth::user()->is_admin)
                                    <td>
                                        <form action="{{ route('revisor.candidates.reject', $candidate->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btnDelete mx-2">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('revisor.candidates.accept', $candidate->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-accent mx-2">
                                                <i class="bi bi-check-circle"></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
    </div>






</x-layout>