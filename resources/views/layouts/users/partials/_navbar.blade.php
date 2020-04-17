<div class="header-wrap">
    @include('layouts.users.partials._top-header')

    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <a href="{{ url('/') }}" target="_blank" rel="home" class="custom-logo-link">
                            <img src="{{ asset('images/logo.jpg') }}" width="800" height="102" itemprop="logo" alt="AD Salem Logope 2" sizes="(max-width: 800px) 100vw, 800px" srcset="" class="custom-logo">
                        </a>
                    </div>
                </div>
                <div class="col-9 right menu-desktop">
                    <nav>
                        <div class="menu-menu-principal-container">
                            <ul id="primary-menu" class="menu">
                                <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-108">
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-105">
                                    <a href="{{ route('about_us') }}">Qui sommes-nous ?</a>
                                </li>
                                <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                    <a href="{{ route('activities') }}">Activités</a>
                                </li>
                                <li id="menu-item-104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104">
                                    <a href="{{ route('sermons') }}">Prédications</a>
                                </li>
                                <li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103">
                                    <a href="../blog/index.html">Blog</a>
                                </li>
                                <li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106">
                                    <a href="../contact/index.html">Contact</a>
                                </li>
                                <li id="menu-item-143" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-143">
                                    <a href="###">Autre</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                            <a href="../espace-membre/index.html">Espace membre</a>
                                        </li>
                                        <li id="menu-item-138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                                            <a href="../lequipe-pastorale/index.html">L’équipe pastorale</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <nav class="menu-mobile">
                    <span class="open-menu">Menu<i class="fa fa-angle-down"></i></span>
                    <div class="drop-menu">
                        <div class="menu-menu-principal-container">
                            <ul id="menu-menu-principal" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-108">
                                    <a href="../index.html">Accueil</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-30 current_page_item menu-item-105">
                                    <a href="index.html">Qui sommes-nous ?</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                    <a href="../activites/index.html">Activités</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104">
                                    <a href="../predications/index.html">Prédications</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103">
                                    <a href="../blog/index.html">Blog</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106">
                                    <a href="../contact/index.html">Contact</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-143">
                                    <a href="###">Autre</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../espace-membre/index.html">Espace membre</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138"><a href="../lequipe-pastorale/index.html">L’équipe pastorale</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>
