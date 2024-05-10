<x-layout>

    <form method="POST" action="login">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label"> Indirizzo email </label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-check">
            <input name="remember" class="form-check-input" type="checkbox" value="" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">
              Ricordami
            </label>
          </div>
        <button type="submit" class="btn btn-primary">Accedi</button>
    </form>
</x-layout>
