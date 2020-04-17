@extends('layouts.users.app')

@section('content')
    @include('shared._breadcrumb', [
        'bread_title' => 'Qui sommes-nous?',
        'bread_text' => 'Apprenez-en plus sur l\'Eglise',
        'bread_image' => '/wp-content/uploads/2018/01/lightstock_365567_download_medium_user_5372029-1600x400.jpg'
    ])

    <div class="wrapper-page">
        <div class="container">
            <div class="row">
                <div class="content-page full-page">
                    <article>
                        <p>Cette page vous permet de présenter l&rsquo;Église, de la manière dont vous le souhaitez.
                            Vous pouvez expliquer vos objectifs, les valeurs qui vous animent, vos priorités. Mais
                            vous pouvez également expliquer à ceux qui visitent votre site ce qu&rsquo;est une Eglise
                            protestante évangélique&#8230;
                        </p>
                        <h3>Ce que nous croyons</h3>
                        <p>Nous croyons :</p>
                        <ul>
                            <li>Que l’Écriture Sainte est la Parole infaillible de Dieu, autorité souveraine en matière de foi et de vie.</li>
                            <li>En un seul Dieu, Père, Fils et Saint-Esprit de toute éternité.</li>
                            <li>En Jésus-Christ notre Seigneur, Dieu manifesté en chair, né de la vierge Marie, à son humanité exempte de péché, ses miracles, sa mort expiatoire et rédemptrice, sa résurrection corporelle, son ascension, son œuvre médiatrice, son retour personnel dans la puissance et dans la gloire.</li>
                            <li>Au salut de l’homme pécheur et perdu, à sa justification, non par les œuvres mais par la seule foi, grâce au sang versé par Jésus-Christ notre Seigneur, à sa régénération par le Saint-Esprit.</li>
                            <li>En l’Esprit-Saint qui, venant demeurer en nous, nous donne le pouvoir de servir Jésus-Christ, de vivre une vie sainte et de rendre témoignage.</li>
                            <li>À l’unité véritable dans le Saint-Esprit de tous les croyants formant ensemble l’Église Universelle, corps du Christ.</li>
                            <li>À la résurrection de tous : ceux qui sont perdus ressusciteront pour le jugement, ceux qui sont sauvés ressusciteront pour la vie.</li>
                        </ul>
                        <p><em>(Source : Déclaration de l’Alliance Évangélique Mondiale adoptée à Zeist (Pays Bas) 5–11 août 1951)</em></p>
                        <h3>Notre historique</h3>
                        <p>Sur cette page, vous pouvez également inclure un historique de votre Église. Par exemple en expliquant quand et dans quelles circonstances elle a vu le jour, comment elle est arrivé dans la vie, etc.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
