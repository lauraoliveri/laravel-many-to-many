@extends('layouts.app')

@section('page-title', 'Crea project')

@section('main-content')
<h1>
    Crea progetto
</h1>


<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
      
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>


    <div class="mb-3">
        <label for="title" class="form-label">Nome <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="64" placeholder="Inserisci il valore di titolo..." value="{{ old('title') }}">

        @error('title')
            <div class="alert alert-danger mt-1">
                ERRORE NOME: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="deadline" class="form-label">Scadenza<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('deadline') is-invalid @enderror" id="deadline" name="deadline" required min="0" max="5000" step="50" placeholder="Inserisci il valore di Scadenza..." value="{{ old('deadline') }}">

        @error('deadline')
            <div class="alert alert-danger mt-1">
                ERRORE SCADENZA: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required maxlength="4096" placeholder="Inserisci una descrizione...">{{ old('description') }}</textarea>

        @error('description')
            <div class="alert alert-danger mt-1">
                ERRORE DESCRIZIONE: {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>

</form>
@endsection