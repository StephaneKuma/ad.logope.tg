@extends('layouts.users.app')

@section('content')
    <div class="hero-home">
        <div class="owl-carousel owl-slider">
            <div class="item">
                <div class="hero-inner">
                    <h1>Une Eglise protestante évangélique qui existe pour mieux connaître Jésus et mieux le partager</h1>
                    <a href="qui-sommes-nous/index.html" class="btn-full-white">En savoir plus sur l'Église</a>
                    <a href="predications/index.html" class="btn-white">Nos prédications</a>
                </div>
                <div class="thumbnail-inner" style="background-image:url('{{ asset('wp-content/uploads/2018/01/lightstock_203698_download_medium_user_5372029-1600x400.jpg') }}');"></div>
            </div>

            <div class="item">
                <div class="hero-inner">
                    <h1>Nous nous réunissons tous les dimanches à 07h00 : vous êtes le bienvenu !</h1>
                    <a href="activite/reunion-du-dimanche/index.html" class="btn-white">En savoir plus</a>
                </div>
                <div class="thumbnail-inner" style="background-image:url('{{ asset('wp-content/uploads/2018/08/lightstock_227139_download_medium_user_5372029-1600x400.jpg') }}');"></div>
            </div>

            <div class="item">
                <div class="hero-inner">
                    <h1>Une question ? Quelque chose à nous partager ? Besoin d'aide ? Contactez-nous !</h1>
                    <a href="contact/index.html" class="btn-white">Nous contacter</a>
                </div>
                <div class="thumbnail-inner" style="background-image:url('{{ asset('wp-content/uploads/2018/08/lightstock_263442_download_medium_user_5372029-1600x400.jpg') }}');"></div>
            </div>
        </div>
    </div>

    <!-- Verset ou citation -->
    <section class="home-section verset-home">
        <div class="container">
            <div class="row">
                <blockquote>
                    <span class="quote-icon">“</span>
                    <p>« Ainsi donc, tout comme vous avez accueilli le Seigneur Jésus-Christ, marchez en lui ; soyez enracinés et fondés en lui, affermis dans la foi telle qu’elle vous a été enseignée, et soyez-en riches en exprimant votre reconnaissance à Dieu. »</p>
                    <cite>La Bible, Colossiens 2.6-7</cite>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Présentation de l'Église -->
    <section class="home-section about-home">
        <div class="container">
            <div class="row">
                <div class="home-title center">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    <h2>Eglise des Assemblées de Dieu du Togo, Temple Salem Agoè-Logopé 2</h2>
                    <div class="sep"></div>
                </div>
                <div class="about-inner">
                    <div class="col-5">
                        <img width="455" height="250" src="{{ asset('wp-content/uploads/2018/01/lightstock_365584_download_medium_user_5372029-455x250.jpg') }}" class="attachment-medium2 size-medium2" alt="" />
                    </div>

                    <div class="col-7 about-home-text">
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
                            avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les
                            années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser
                            un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est
                            aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
                        </p>
                        <a href="{{ route('about_us') }}" class="btn icon-left">
                            <i class="fa fa-info-circle"></i>
                            En savoir plus sur l'Église
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activités de l'Église -->
    <section class="home-section events-home">
        <div class="container">
            <div class="row">
                <div class="home-title center">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <h2>Nos activités</h2>
                    <div class="sep"></div>
                </div>

                <div class="clear">
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

                <div class="clear center">
                    <a href="{{ route('activities') }}" class="btn m-t-20 icon-left"><i class="fa fa-calendar"></i>Voir toutes nos activités</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partage de l'Évangile -->
    <section class="home-section gospel-home">
        <div class="container">
            <div class="row">
                <div class="gospel-inner">
                    <h2>Qui est Jésus ?</h2>
                    <p>Jésus n’est pas juste un homme parmi les autres. Il n’est pas seulement un exemple de morale,
                        ou un leader religieux parmi les autres. Jésus est réellement venu sur terre, il y a plus de
                        2 000 ans. Sa venue a bouleversé pour toujours l’histoire de l’humanité. Il est venu régler
                        le problème qu’aucun autre homme avant lui n’a pu régler, et qu’aucun autre après lui ne pourra
                        régler. Il est venu donner sa vie, pour apporter le pardon de nos fautes.
                    </p>
                    <div>
                        <a href="2018/01/26/quand-la-punition-tombe-sur-celui-qui-ne-la-meritait-pas/index.html" class="btn-white icon-left">
                            <i class="fa fa-user"></i>
                            En savoir plus sur Jésus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dernières prédications -->
    <section class="home-section predics-home">
        <div class="container">
            <div class="row">
                <div class="home-title center">
                    <i class="fa fa-microphone"></i>
                    <h2>Nos dernières prédications</h2>
                    <div class="sep"></div>
                </div>

                <div class="home-section-inner">
                    <div class="entry-predic row">
                        <div class="col-2 entry-predic-thumbnail">
                            <a href="predication/levangile-qui-transforme/index.html">
                                <div class="thumbnail-inner" style="background-image:url('wp-content/uploads/2018/01/photo-1457014013353-1d9b69406a5c-90x90.jpg');"></div>
                            </a>
                        </div>

                        <div class="col-7 entry-predic-details">
                            <h4><a href="predication/levangile-qui-transforme/index.html">L&rsquo;Évangile qui transforme</a></h4>
                            <ul class="entry-predic-meta">
                                <li><a href="predicateur/don-carson/index.html">Don Carson</a></li>			<li>
                                    28 Jan 2018			</li>
                                <li>Galates 5.16-6.5</li>
                            </ul>
                        </div>

                        <div class="col-3 entry-predic-btn">
                            <a href="predication/levangile-qui-transforme/index.html" class="icon-right">
                                Ecouter
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="entry-predic row">
                        <div class="col-2 entry-predic-thumbnail">
                            <a href="predication/vivre-une-vie-centree-sur-jesus/index.html">
                                <div class="thumbnail-inner" style="background-image:url('wp-content/uploads/2018/01/photo-1456425712190-0dd8c2b00156-90x90.jpg');"></div>
                            </a>
                        </div>

                        <div class="col-7 entry-predic-details">
                            <h4><a href="predication/vivre-une-vie-centree-sur-jesus/index.html">Vivre une vie centrée sur Jésus</a></h4>
                            <ul class="entry-predic-meta">
                                <li><a href="predicateur/charles-spurgeon/index.html">Charles Spurgeon</a></li>			<li>
                                    21 Jan 2018			</li>
                                <li>Colossiens 2.6-15</li>
                            </ul>
                        </div>

                        <div class="col-3 entry-predic-btn">
                            <a href="predication/vivre-une-vie-centree-sur-jesus/index.html" class="icon-right">Ecouter<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="entry-predic row">
                        <div class="col-2 entry-predic-thumbnail">
                            <a href="predication/tout-perdre-pour-christ-pour-tout-gagner-en-christ/index.html">
                                <div class="thumbnail-inner" style="background-image:url('wp-content/uploads/2018/01/photo-1457301353672-324d6d14f471-90x90.jpg');"></div>
                            </a>
                        </div>

                        <div class="col-7 entry-predic-details">
                            <h4><a href="predication/tout-perdre-pour-christ-pour-tout-gagner-en-christ/index.html">Tout perdre pour Christ, pour tout gagner en Christ</a></h4>
                            <ul class="entry-predic-meta">
                                <li><a href="predicateur/felix-neff/index.html">Felix Neff</a></li>			<li>
                                    14 Jan 2018			</li>
                                <li>Philippiens 3.1-11</li>
                            </ul>
                        </div>

                        <div class="col-3 entry-predic-btn">
                            <a href="predication/tout-perdre-pour-christ-pour-tout-gagner-en-christ/index.html" class="icon-right">Ecouter<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="clear center">
                        <a href="{{ route('sermons') }}" class="btn m-t-30 icon-left"><i class="fa fa-microphone"></i>Toutes nos prédications</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Derniers articles -->
    <section class="home-section posts-home">
        <div class="container">
            <div class="row">
                <div class="home-title center">
                    <i class="fa fa-calendar"></i>
                    <h2>Nos derniers articles</h2>
                    <div class="sep"></div>
                </div>

                <div class="clear hide_date">
                    <div class="col-4 post-entry">
                        <div class="post-img">
                            <div class="post-readmore">
                                <span class="btn-transparent icon-left">
                                    <i class="fa fa-file-text"></i>
                                    Lire la suite
                                </span>
                            </div>

                            <a href="2018/01/26/si-dieu-est-notre-bien-supreme-alors-tout-va-bien-ps-16-2/index.html" class="row">
                                <img width="455" height="250" src="wp-content/uploads/2018/01/photo-1457388497438-b12745cbc24f-455x250.jpg" class="attachment-medium2 size-medium2 wp-post-image" alt="" />
                            </a>
                        </div>

                        <span class="post-date">Le 26 janvier 2018</span>
                        <h3><a href="2018/01/26/si-dieu-est-notre-bien-supreme-alors-tout-va-bien-ps-16-2/index.html">Si Dieu est notre bien suprême, alors tout va bien ! (Ps 16.2)</a></h3>
                        <p>Je dis à l’Eternel : « Tu es mon Seigneur, tu es mon bien suprême. » – Psaume 16.2 Peu importe les aspects extérieurs, si&#8230;</p>
                        <a href="2018/01/26/si-dieu-est-notre-bien-supreme-alors-tout-va-bien-ps-16-2/index.html">+ Lire la suite</a>
                    </div>

                    <div class="col-4 post-entry">
                        <div class="post-img">
                            <div class="post-readmore">
                                <span class="btn-transparent icon-left">
                                    <i class="fa fa-file-text"></i>
                                    Lire la suite
                                </span>
                            </div>
                            <a href="2018/01/26/comment-se-tenir-en-presence-de-dieu-job-13-16/index.html" class="row">
                                <img width="455" height="250" src="wp-content/uploads/2018/01/photo-1457528877294-b48235bdaa68-455x250.jpg" class="attachment-medium2 size-medium2 wp-post-image" alt="" />
                            </a>
                        </div>

                        <span class="post-date">Le 26 janvier 2018</span>
                        <h3><a href="2018/01/26/comment-se-tenir-en-presence-de-dieu-job-13-16/index.html">Comment se tenir en présence de Dieu ? (Job 13.16)</a></h3>
                        <p>« …aucun impie n’ose se montrer en sa présence. » – Job 13.16 Au milieu des paroles de Job, on trouve dans ce verset une&#8230;</p>
                        <a href="2018/01/26/comment-se-tenir-en-presence-de-dieu-job-13-16/index.html">+ Lire la suite</a>
                    </div>

                    <div class="col-4 post-entry">
                        <div class="post-img">
                            <div class="post-readmore">
                                <span class="btn-transparent icon-left">
                                    <i class="fa fa-file-text"></i>
                                    Lire la suite
                                </span>
                            </div>
                            <a href="2018/01/26/quand-la-punition-tombe-sur-celui-qui-ne-la-meritait-pas/index.html" class="row">
                                <img width="455" height="250" src="wp-content/uploads/2018/01/photo-1457725428622-efbbd8b7b224-455x250.jpg" class="attachment-medium2 size-medium2 wp-post-image" alt="" />
                            </a>
                        </div>

                        <span class="post-date">Le 26 janvier 2018</span>
                        <h3><a href="2018/01/26/quand-la-punition-tombe-sur-celui-qui-ne-la-meritait-pas/index.html">Quand la punition tombe sur celui qui ne la méritait pas&#8230;</a></h3>
                        <p>« Mais lui, il était blessé à cause de nos transgressions, brisé à cause de nos fautes : la punition qui nous donne la paix est&#8230;</p>
                        <a href="2018/01/26/quand-la-punition-tombe-sur-celui-qui-ne-la-meritait-pas/index.html">+ Lire la suite</a>
                    </div>
                </div>

                <div class="clear center">
                    <a href="blog/index.html" class="btn m-t-20 icon-left">
                        <i class="fa fa-file-text"></i>
                        Tous nos articles
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
