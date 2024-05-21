<x-layout>

    <div class="container">
        <h1 class="mb-4">{{__("messages.revisorCandidates")}}</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
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
                            <form action="{{ route('revisor.candidates.accept', $candidate->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i>
                                </button>
                            </form>
                            <form action="{{ route('revisor.candidates.reject', $candidate->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>






</x-layout>