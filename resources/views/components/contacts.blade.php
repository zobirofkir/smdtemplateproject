<section id="contact" class="contact-section pt-120 pb-160">
    <div class="shape shape-7">
        <img src="assets/img/shapes/shape-7.svg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Prendre rendez-vous</span>
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Prenez rendez-vous maintenant</h2>
                    <p class="wow fadeInLeft" data-wow-delay=".6s">{{ config('app.name') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form">
                    <form action="https://preview.uideck.com/items/medic/assets/contact.php" method="POST" id="contact-form" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" placeholder="Nom" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="subject" id="subject" placeholder="Objet" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <button type="submit" class="btn theme-btn">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message pt-15"></p>
                </div>
            </div>
        </div>
    </div>
</section>
