<div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="login_form_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="login_form_label">Prihlásenie</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}" id="loginForm" @if ($errors->any() && old('_register')) class="d-none" @endif>
                    @csrf
                    <input type="hidden" name="_login" value="true">

                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required autofocus value="{{ old('email') }}">
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label">Heslo</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    @if ($errors->any() && old('_login'))
                        <div class="alert alert-danger mt-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn text-black bg-white w-100 mt-4">Prihlásiť sa</button>
                </form>

                <hr class="bg-white">

                <div class="text-center">
                    <a href="#" class="text-white mt-2" id="registerButton">Nemáš účet? Zaregistruj sa!</a>
                    <a href="#" class="text-white mt-2 d-none" id="backToLogin">Už máš účet? Prihlás sa!</a>
                </div>

                <form method="POST" action="{{ route('register') }}" id="registerForm" class="@if (!old('_register')) d-none @endif mt-3">
                    @csrf
                    <input type="hidden" name="_register" value="true">

                    <div class="mb-2">
                        <label for="name" class="form-label">Meno</label>
                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                    </div>

                    <div class="mb-2">
                        <label for="surname" class="form-label">Priezvisko</label>
                        <input type="text" name="surname" class="form-control" required value="{{ old('surname') }}">
                    </div>

                    <div class="mb-2">
                        <label for="register_email" class="form-label">Email</label>
                        <input type="email" name="email" id="register_email" class="form-control" required value="{{ old('email') }}">
                    </div>

                    <div class="mb-2">
                        <label for="register_password" class="form-label">Heslo</label>
                        <input type="password" name="password" id="register_password" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label for="register_password_confirmation" class="form-label">Zopakuj heslo</label>
                        <input type="password" name="password_confirmation" id="register_password_confirmation" class="form-control" required>
                    </div>

                    @if ($errors->any() && old('_register'))
                        <div class="alert alert-danger mt-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn text-black bg-white w-100 mt-4">Dokončiť registráciu</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.validationErrors = {!! json_encode($errors->all()) !!};
</script>

