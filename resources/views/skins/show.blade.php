<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detalles de Skin - Panel Admin</title>
    <style>
        body {
            background: linear-gradient(135deg, #110764, #a6b7e7);
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-brand {
            font-family: 'Bebas Neue', cursive;
            font-size: 1.8rem;
            color: #ff00ff !important;
            text-shadow: 0 0 10px rgba(255, 0, 255, 0.7);
        }
        .card {
            background: #1a1a2e;
            border: 2px solid #8a2be2;
            border-radius: 12px;
            color: #f0f0f0;
        }
        .skin-detail-image {
            width: 300px;
            height: 300px;
            object-fit: contain;
            background: #000;
            border-radius: 12px;
            padding: 15px;
            border: 3px solid #8a2be2;
        }
        .badge {
            font-size: 0.9rem;
        }
        .detail-item {
            border-bottom: 1px solid #333;
            padding: 10px 0;
        }
        .detail-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('skins.index') }}">🎮 Panel Admin Fortnite</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('skins.index') }}">📋 Lista de Skins</a>
                <a class="nav-link" href="/">🏠 Ver Wiki</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center mb-0">👁️ Detalles de la Skin</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset($skin->imagen) }}" alt="{{ $skin->nombre }}" class="skin-detail-image mb-3">
                                
                                @php
                                    $badgeClass = [
                                        'Común' => 'bg-secondary',
                                        'Raro' => 'bg-primary',
                                        'Épico' => 'bg-purple',
                                        'Legendaria' => 'bg-warning text-dark'
                                    ][$skin->rareza] ?? 'bg-secondary';
                                    
                                    $typeClass = $skin->tipo === 'skin' ? 'bg-info' : 'bg-danger';
                                    $typeText = $skin->tipo === 'skin' ? 'Skin Normal' : 'Los Siete';
                                @endphp
                                
                                <span class="badge {{ $badgeClass }} mb-2">{{ $skin->rareza }}</span>
                                <span class="badge {{ $typeClass }}">{{ $typeText }}</span>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="detail-item">
                                    <strong>Nombre:</strong>
                                    <h4 class="mt-1" style="color: #00f0ff;">{{ $skin->nombre }}</h4>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Descripción:</strong>
                                    <p class="mt-2">{{ $skin->descripcion }}</p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Temporada:</strong>
                                    <p class="mt-1">{{ $skin->temporada }}</p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Fecha de Lanzamiento:</strong>
                                    <p class="mt-1">{{ $skin->fecha_lanzamiento->format('d/m/Y') }}</p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Ruta de Imagen:</strong>
                                    <p class="mt-1"><code>{{ $skin->imagen }}</code></p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>ID en Base de Datos:</strong>
                                    <p class="mt-1">{{ $skin->id }}</p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Fecha de Creación:</strong>
                                    <p class="mt-1">{{ $skin->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                                
                                <div class="detail-item">
                                    <strong>Última Actualización:</strong>
                                    <p class="mt-1">{{ $skin->updated_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="{{ route('skins.edit', $skin->id) }}" class="btn btn-warning me-md-2">✏️ Editar</a>
                            <form action="{{ route('skins.destroy', $skin->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('¿Estás seguro de eliminar esta skin?')">🗑️ Eliminar</button>
                            </form>
                            <a href="{{ route('skins.index') }}" class="btn btn-secondary ms-md-2">📋 Volver a la Lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bg-purple { background-color: #8a2be2 !important; }
    </style>
</body>
</html>