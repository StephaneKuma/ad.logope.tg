@extends('layouts.users.app')

@section('content')
    @include('shared._breadcrumb', [
        'bread_title' => 'Activités',
        'bread_text' => 'Découvrez les activités de l\'église',
        'bread_image' => '/wp-content/uploads/2018/01/lightstock_31984_full_user_5372029-1600x400.jpg'
    ])

    <div class="wrapper-page">
        <div class="container">
            <div class="row">
                <div class="content-page activites-content-page">
                    <article>
                        <p>Sur cette page sont listées les différentes activités qui animent la vie de
                            l&rsquo;Église. Si vous souhaitez plus de renseignements sur le calendrier,
                            n&rsquo;hésitez pas à <a href="{{ url('/contact') }}">nous contacter</a>.</p>
                    </article>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/reunion-du-dimanche/index.html">
                            <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_35237_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le dimanche à 07h00</span>
                        <h3><a href="activite/reunion-du-dimanche/index.html">Réunion du dimanche</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/groupe-de-jeunes/index.html">
                                <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_267500_full_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le dimanche à 10h00</span>
                        <h3><a href="activite/groupe-de-jeunes/index.html">Groupe de jeunes</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/etude-biblique/index.html">
                            <img width="300" height="170" src="wp-content/uploads/2018/01/F3A7L9H1O4-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le mercredi à 18h30</span>
                        <h3><a href="activite/etude-biblique/index.html">Etude biblique</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/reunion-de-priere/index.html">
                                <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_99429_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le vendredi à 18h30</span>
                        <h3><a href="activite/reunion-de-priere/index.html">Réunion de prière</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                        <a href="/activite/groupe-de-decouverte/index.html">
                            <img width="300" height="170" src="/wp-content/uploads/2018/01/lightstock_329251_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le mardi à 19h30</span>
                        <h3><a href="../activite/groupe-de-decouverte/index.html">Groupe de découverte</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                        <a href="/activite/reunion-de-dames/index.html">
                            <img width="300" height="170" src="../wp-content/uploads/2018/01/lightstock_257454_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le 1er samedi de chaque mois à 15h</span>
                        <h3><a href="/activite/reunion-de-dames/index.html">Réunion de dames</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                        <a href="/activite/chorale/index.html">
                            <img width="300" height="170" src="../wp-content/uploads/2018/01/photo-1457689146074-bd667e343a9c-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le dimanche a-m, chaque mois</span>
                        <h3><a href="/activite/chorale/index.html">Chorale</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/reunion-du-dimanche/index.html">
                            <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_35237_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le dimanche à 07h00</span>
                        <h3><a href="activite/reunion-du-dimanche/index.html">Réunion du dimanche</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/groupe-de-jeunes/index.html">
                                <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_267500_full_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le dimanche à 10h00</span>
                        <h3><a href="activite/groupe-de-jeunes/index.html">Groupe de jeunes</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/etude-biblique/index.html">
                            <img width="300" height="170" src="wp-content/uploads/2018/01/F3A7L9H1O4-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le mercredi à 18h30</span>
                        <h3><a href="activite/etude-biblique/index.html">Etude biblique</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>

                    <div class="col-3 event-entry">
                        <div class="event-img">
                            <a href="activite/reunion-de-priere/index.html">
                                <img width="300" height="170" src="wp-content/uploads/2018/01/lightstock_99429_download_medium_user_5372029-335x190.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                        </div>
                        <span>Le vendredi à 18h30</span>
                        <h3><a href="activite/reunion-de-priere/index.html">Réunion de prière</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&#8230;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
