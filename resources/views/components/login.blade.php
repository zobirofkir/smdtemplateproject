<section id="blog" class="blog-section pt-150 pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="login-form">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" style="max-width: 150px;">
                    </div>

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label for="rememberMe" class="form-check-label">Se souvenir de moi</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Connexion</button>
                        <p class="text-center mt-3">
                            <a href="#">Mot de passe oublié ?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
