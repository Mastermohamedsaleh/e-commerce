<form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="code" value="{{ old('email') }}" required autocomplete="email" autofocus>
</form>