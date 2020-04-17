@extends('layouts.users.app')

@section('content')
    @include('shared._breadcrumb', [
        'bread_title' => 'Prédications',
        'bread_text' => 'Ecoutez nos messages bibliques en ligne',
        'bread_image' => '/wp-content/uploads/2018/01/lightstock_35237_download_medium_user_5372029-1600x400.jpg'
    ])

    <div class="wrapper-page">
        <div class="container">
            <div class="row">
                <div class="col-9 content-page predic-content-page">
                    <article class="m-b-30">
                        <div class="entry-predic row">
                            <div class="col-2 entry-predic-thumbnail">
                                <a href="/predication/levangile-qui-transforme/index.html">
                                    <div class="thumbnail-inner" style="background-image:url('/wp-content/uploads/2018/01/photo-1457014013353-1d9b69406a5c-90x90.jpg');"></div>
                                </a>
                            </div>

                            <div class="col-7 entry-predic-details">
                                <h4><a href="/predication/levangile-qui-transforme/index.html">L&rsquo;Évangile qui transforme</a></h4>
                                <ul class="entry-predic-meta">
                                    <li><a href="/predicateur/don-carson/index.html">Don Carson</a></li>
                                    <li>
                                        28 Jan 2018
                                    </li>
                                    <li>Galates 5.16-6.5</li>
                                </ul>
                            </div>
                            <div class="col-3 entry-predic-btn">
                                <a href="/predication/levangile-qui-transforme/index.html" class="icon-right">Ecouter<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                    </article>
                </div>

                <div class="col-3 sidebar">
                    <section id="search-3" class="widget widget_search"><div class="searchform-wrap">
                    <form method="get" class="searchform" action="https://unsitepourmoneglise.fr/demo/epaphras/">
                        <input id="search-bar" type="text" name="s" placeholder="Rechercher" required>
                        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div></section><section id="liste_predicateurs-2" class="widget widget_liste_predicateurs"><h3 class="widget-title">Prédicateurs</h3><ul><li><a href="../predicateur/adolphe-monod/index.html">Adolphe Monod</a> (5)</li><li><a href="../predicateur/charles-spurgeon/index.html">Charles Spurgeon</a> (1)</li><li><a href="../predicateur/don-carson/index.html">Don Carson</a> (1)</li><li><a href="../predicateur/felix-neff/index.html">Felix Neff</a> (3)</li><li><a href="../predicateur/jean-calvin/index.html">Jean Calvin</a> (4)</li></ul></section><section id="liste_series-2" class="widget widget_liste_series"><h3 class="widget-title">Séries</h3><ul><li><a href="../serie/colossiens/index.html">Colossiens</a> (1)</li><li><a href="../serie/galates/index.html">Galates</a> (1)</li><li><a href="../serie/philippiens/index.html">Philippiens</a> (3)</li><li><a href="../serie/romains/index.html">Romains</a> (9)</li></ul></section><section id="widget_social-3" class="widget widget_widget_social"><h3 class="widget-title">Réseaux sociaux</h3>
                            <ul class="social-icons widget-social">
                                                    <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="http://www.christestmavie.fr/feed/" target="_blank"><i class="fa fa-rss"></i></a></li>
                                            </ul><!-- .social-icons -->

                    </section></div>
            </div>
        </div>
    </div>
@endsection
