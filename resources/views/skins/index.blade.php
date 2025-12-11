<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Panel de Administración - Skins Fortnite</title>
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
        .btn-primary {
            background: linear-gradient(135deg, #8a2be2, #ff00ff);
            border: none;
        }
        .table {
            background: #1a1a2e;
            color: #f0f0f0;
            border-radius: 8px;
            overflow: hidden;
        }
        .table th {
            background: #8a2be2;
            color: white;
            border: none;
        }
        .table td {
            border-color: #333;
            vertical-align: middle;
        }
        .badge {
            font-size: 0.8rem;
        }
        .skin-image {
            width: 80px;
            height: 80px;
            object-fit: contain;
            background: #000;
            border-radius: 8px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('skins.index') }}">🎮 Panel Admin Fortnite</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">🏠 Ver Wiki</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-center">🎨 Gestión de Skins</h1>
            <a href="{{ route('skins.create') }}" class="btn btn-primary">➕ Agregar Nueva Skin</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Rareza</th>
                                <th>Temporada</th>
                                <th>Tipo</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skins as $skin)
                            <tr>
                                <td>
                                    <img src="{{ asset($skin->imagen) }}" alt="{{ $skin->nombre }}" class="skin-image">
                                </td>
                                <td>
                                    <strong>{{ $skin->nombre }}</strong>
                                    <br><small class="text-muted">{{ Str::limit($skin->descripcion, 50) }}</small>
                                </td>
                                <td>
                                    @php
                                        $badgeClass = [
                                            'Común' => 'bg-secondary',
                                            'Raro' => 'bg-primary',
                                            'Épico' => 'bg-purple',
                                            'Legendaria' => 'bg-warning text-dark'
                                        ][$skin->rareza] ?? 'bg-secondary';
                                    @endphp
                                    <span class="badge {{ $badgeClass }}">{{ $skin->rareza }}</span>
                                </td>
                                <td>{{ $skin->temporada }}</td>
                                <td>
                                    <span class="badge {{ $skin->tipo === 'skin' ? 'bg-info' : 'bg-danger' }}">
                                        {{ $skin->tipo === 'skin' ? 'Skin' : 'Los Siete' }}
                                    </span>
                                </td>
                                <td>{{ $skin->fecha_lanzamiento->format('d/m/Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('skins.edit', $skin->id) }}" class="btn btn-sm btn-outline-warning">✏️ Editar</a>
                                        <form action="{{ route('skins.destroy', $skin->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                    onclick="return confirm('¿Estás seguro de eliminar esta skin?')">🗑️ Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($skins->isEmpty())
                    <div class="text-center py-4">
                        <p class="text-muted">No hay skins registradas aún.</p>
                        <a href="{{ route('skins.create') }}" class="btn btn-primary">Agregar la primera skin</a>
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-4 text-center">
            <p class="text-muted">Total: {{ $skins->count() }} skins registradas</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bg-purple { background-color: #8a2be2 !important; }
    </style>
</body>
</html>