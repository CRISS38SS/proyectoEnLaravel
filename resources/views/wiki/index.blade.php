<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/wikicss/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Wiki Fortnite</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Wiki Fortnite</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#skins">Skins</a></li>
                        <li class="nav-item"><a class="nav-link" href="#lossiete">Los Siete</a></li>
                        <li class="nav-item"><a class="nav-link" href="#armas">Armas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mapa">Mapa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <button id="victoryBtn" class="btn btn-success">🏆 ¡VICTORY!</button>
    <audio id="victorySound" src="audio/victorymale-version-230553.mp3"></audio>
    <script src="{{ asset('js/btnVictory.js') }}"></script>

    <div class="text-center mb-4">
        <label id="lblfiltro">Filtrar por rareza:</label>
        <select id="filterRareza" class="form-select d-inline w-auto mx-2">
            <option value="todos">Todos</option>
            <option value="Común">Común</option>
            <option value="Raro">Raro</option>
            <option value="Épico">Épico</option>
            <option value="Legendaria">Legendaria</option>
        </select>
    </div>

    <main class="container py-4" id="skins">

        <h2 class="text-center mb-4" id="skinh">SKINS</h2>

        <div class="row g-4">
            @foreach($skins->where('tipo', 'skin') as $skin)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card h-100">
                    <img src="{{ asset($skin->imagen) }}" class="card-img-top" alt="{{ $skin->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $skin->nombre }}</h5>
                        <p class="card-text">{{ $skin->descripcion }}</p>
                        <p class="text-muted">
                            <strong>Rareza:</strong> {{ $skin->rareza }}<br>
                            <strong>Temporada:</strong> {{ $skin->temporada }}<br>
                            <strong>Fecha de Lanzamiento:</strong> {{ $skin->fecha_lanzamiento->format('d/m/Y') }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <section id="lossiete" class="container py-4">

        <h2 class="text-center mb-4">Los Siete</h2>

        <div class="row g-4">
            @foreach($skins->where('tipo', 'los_siete') as $skin)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card h-100">
                    <img src="{{ asset($skin->imagen) }}" class="card-img-top" alt="{{ $skin->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $skin->nombre }}</h5>
                        <p class="card-text">{{ $skin->descripcion }}</p>
                        <p class="text-muted">
                            <strong>Rareza:</strong> {{ $skin->rareza }}<br>
                            <strong>Temporada:</strong> {{ $skin->temporada }}<br>
                            <strong>Fecha de Lanzamiento:</strong> {{ $skin->fecha_lanzamiento->format('d/m/Y') }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="armas" class="container py-5">
        <h2 class="text-center mb-4">Armas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/Scar.webp') }}" class="card-img-top" alt="Rifle de asalto">
                    <div class="card-body">
                        <h5>Rifle de Asalto</h5>
                        <p><strong>Rareza:</strong> Común a Legendaria<br><strong>Daño:</strong> 30 (común)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/escopetaBombeo.webp') }}" class="card-img-top"
                        alt="Escopeta de bombeo">
                    <div class="card-body">
                        <h5>Escopeta de Bombeo</h5>
                        <p><strong>Rareza:</strong> Común a Legendaria<br><strong>Daño:</strong> 95 (común)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/fusildeFrancotirador.webp') }}" class="card-img-top"
                        alt="Francotirador">
                    <div class="card-body">
                        <h5>Fusil de Francotirador</h5>
                        <p><strong>Rareza:</strong> Rara a Legendaria<br><strong>Daño:</strong> 105 (rara)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/pistola.webp') }}" class="card-img-top" alt="Pistola">
                    <div class="card-body">
                        <h5>Pistola</h5>
                        <p><strong>Rareza:</strong> Común a Épica<br><strong>Daño:</strong> 23 (común)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/subfusil.webp') }}" class="card-img-top" alt="SMG">
                    <div class="card-body">
                        <h5>Subfusil</h5>
                        <p><strong>Rareza:</strong> Común a Legendaria<br><strong>Daño:</strong> 17 (común)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src= "{{ asset('assets/img/lanzacohetes.webp') }}" class="card-img-top" alt="Lanzacohetes">
                    <div class="card-body">
                        <h5>Lanzacohetes</h5>
                        <p><strong>Rareza:</strong> Épica a Legendaria<br><strong>Daño:</strong> 121 (épica)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mapa" class="container py-5">
        <h2 class="text-center mb-4">Mapa de Fortnite</h2>
        <div class="ratio ratio-16x9">
            <img src="{{ asset('assets/img/mapa.webp') }}" class="img-fluid rounded shadow"
                alt="Mapa Fortnite Capítulo 5 Temporada 4">
        </div>
        <p class="text-center mt-2 text-muted">
            Mapa actualizado: Capítulo 5 - Temporada 4 (abril 2025)
        </p>
    </section>

    <footer class="bg-dark text-light text-center py-3">
        <p>© Cristian - Raul - Wiki Fortnite 2025</p>
        <p>
            <a href="https://www.epicgames.com/fortnite" target="_blank" class="text-light">Sitio oficial</a> |
            <a href="https://fortnite.gg" target="_blank" class="text-light">Fortnite.gg</a>
        </p>
    </footer>
    <script src="{{ asset('js/oscuro.js') }}"></script>
    <script src="{{ asset('js/filtraCartas.js') }}"></script>
</body>

</html>
