<div class="hero">
    <div class="container">
        <div class="row">
            <div class="hero-inner center">
                <h1>{{ $bread_title }}</h1>
                <div class="sep-white"></div>
                <span>{{ $bread_text }}</span>
            </div>
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Accueil</a>
                &raquo; {{ $bread_title }}
            </div>
        </div>
    </div>
    <div class="thumbnail-inner" style="background-image:url('{{ $bread_image }}');"></div>
</div>
