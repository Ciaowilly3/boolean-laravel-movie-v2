@extends('layouts.app')

@section('content')
    <div class="text-center bg-white rounded-3 py-5">
        <h2>Modifica Film</h2>
        <form action="{{route ('admin.movies.update', $movie->id)}}" class="form-group w-75 d-inline-block shadow rounded-3 p-3 py-5" method="POST">
            @csrf()
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control text-center w-75 mx-auto
                @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                title="title" value="{{old('title')}}" name="title">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Titolo originale</label>
                <input name="original_title" class="form-control text-cente w-75 mx-auto
                @error('original_title') is-invalid @elseif(old('original_title')) is-valid @enderror">{{old('original_title')}}>
                @error('original_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nazione di produzione</label>
                <input type="text" class="form-control text-center w-75 mx-auto
                @error('nationality') is-invalid @elseif(old('nationality')) is-valid @enderror" 
                name="nationality" value="{{old('nationality')}}">
                @error('nationality')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data uscita</label>
                <input type="date" class="form-control text-center w-75 mx-auto
                @error('date') is-invalid @elseif(old('date')) is-valid @enderror" 
                name="date" value="{{old('date')}}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Voto medio</label>
                <input type="number" step="0.1" class="form-control text-center w-75 mx-auto
                @error('vote') is-invalid @elseif(old('vote')) is-valid @enderror" 
                name="vote" value="{{old('vote')}}">
                @error('vote')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-lg btn-outline-dark mt-4" type="submit">Salva Progetto</button>     
        </form>  
    </div>
@endsection