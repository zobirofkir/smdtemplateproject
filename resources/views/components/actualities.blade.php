<section class="cs_about cs_style_1" id="mot-acc">
    <div class="container_fluid">
        <div class="mb-60">
            <h1 style="font-weight: bold; text-align: center;">Actualités</h1>
        </div>

        <div class="row align-items-center flex-lg-row flex-column-reverse cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_about_content">
                    <div class="cs_section_heading cs_style_1">
                        <h2 class="cs_section_title">Mot de bienvenue</h2>
                        <div class="cs_divider"></div>
                    </div>
                    <ul class="cs_about_text_list">
                        <li>
                            <h3>{{ config('app.name') }}</h3>
                            <p>
                                2023-2024 Congrés de la Société Marocaine de Diabétologie
                            </p>
                            <!-- Custom description under the date -->
                            <p class="cs_about_description">
                                Bienvenue à cet événement prestigieux, réunissant des experts et professionnels dans le domaine du diabète pour partager des connaissances, des avancées et des solutions. Rejoignez-nous pour un moment inoubliable d'apprentissage et de collaboration.
                            </p>

                            <div class="cs_btn_wrapper">
                                <a href="path_to_program.pdf" class="cs_btn cs_btn_download" target="_blank">
                                    Télécharger le Programme <i class="fas fa-download"></i>
                                </a>
                                <a href="#mot-acc" class="cs_btn cs_btn_bienvenue">
                                    Mot de Bienvenue
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs_about_image">
                    <img src="{{asset('assets/img/affiche/affiche.jpeg')}}" alt="Congrès Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
