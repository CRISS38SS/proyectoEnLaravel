<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Skin - Panel Admin</title>
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
        .form-control, .form-select {
            background: #2a2a3e;
            border: 1px solid #8a2be2;
            color: #f0f0f0;
        }
        .form-control:focus, .form-select:focus {
            background: #2a2a3e;
            border-color: #ff00ff;
            color: #f0f0f0;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 255, 0.25);
        }
        .btn-primary {
            background: linear-gradient(135deg, #8a2be2, #ff00ff);
            border: none;
        }
        label {
            color: #00f0ff;
            font-weight: 600;
        }
        .skin-preview {
            width: 150px;
            height: 150px;
            object-fit: contain;
            background: #000;
            border-radius: 8px;
            padding: 10px;
            border: 2px solid #8a2be2;
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center mb-0">✏️ Editar Skin: {{ $skin->nombre }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset($skin->imagen) }}" alt="{{ $skin->nombre }}" class="skin-preview">
                        </div>

                        <form action="{{ route('skins.update', $skin->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre de la Skin *</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required 
                                           value="{{ old('nombre', $skin->nombre) }}" placeholder="Ej: Peely, Midas, etc.">
                                    @error('nombre')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="rareza" class="form-label">Rareza *</label>
                                    <select class="form-select" id="rareza" name="rareza" required>
                                        <option value="">Seleccionar rareza</option>
                                        <option value="Común" {{ (old('rareza', $skin->rareza) == 'Común') ? 'selected' : '' }}>Común</option>
                                        <option value="Raro" {{ (old('rareza', $skin->rareza) == 'Raro') ? 'selected' : '' }}>Raro</option>
                                        <option value="Épico" {{ (old('rareza', $skin->rareza) == 'Épico') ? 'selected' : '' }}>Épico</option>
                                        <option value="Legendaria" {{ (old('rareza', $skin->rareza) == 'Legendaria') ? 'selected' : '' }}>Legendaria</option>
                                    </select>
                                    @error('rareza')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción *</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required 
                                          placeholder="Descripción detallada de la skin">{{ old('descripcion', $skin->descripcion) }}</textarea>
                                @error('descripcion')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="temporada" class="form-label">Temporada *</label>
                                    <input type="text" class="form-control" id="temporada" name="temporada" required 
                                           value="{{ old('temporada', $skin->temporada) }}" placeholder="Ej: Temporada 2, Capítulo 3, etc.">
                                    @error('temporada')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="fecha_lanzamiento" class="form-label">Fecha de Lanzamiento *</label>
                                    <input type="date" class="form-control" id="fecha_lanzamiento" name="fecha_lanzamiento" required 
                                           value="{{ old('fecha_lanzamiento', $skin->fecha_lanzamiento->format('Y-m-d')) }}">
                                    @error('fecha_lanzamiento')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="imagen" class="form-label">Ruta de la Imagen *</label>
                                    <input type="text" class="form-control" id="imagen" name="imagen" required 
                                           value="{{ old('imagen', $skin->imagen) }}" placeholder="Ej: assets/img/skin-nombre.webp">
                                    <small class="text-muted">Ruta relativa desde la carpeta public</small>
                                    @error('imagen')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="tipo" class="form-label">Tipo *</label>
                                    <select class="form-select" id="tipo" name="tipo" required>
                                        <option value="">Seleccionar tipo</option>
                                        <option value="skin" {{ (old('tipo', $skin->tipo) == 'skin') ? 'selected' : '' }}>Skin Normal</option>
                                        <option value="los_siete" {{ (old('tipo', $skin->tipo) == 'los_siete') ? 'selected' : '' }}>Los Siete</option>
                                    </select>
                                    @error('tipo')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('skins.index') }}" class="btn btn-secondary me-md-2">❌ Cancelar</a>
                                <button type="submit" class="btn btn-primary">💾 Actualizar Skin</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-3 text-center">
                    <small class="text-muted">* Campos obligatorios</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>