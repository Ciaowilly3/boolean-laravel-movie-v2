@extends('layouts.app')

@section('content')
<div>
    <div class="text-center pt-2 mt-4">
        <h1 class="text-dark">AGGIUNGI NUOVO FILM</h1>
    </div>
    {{-- Validazione Dati --}}
    @if($errors->any())
    <div>
        <div class="alert alert-danger">I dati inseriti non sono validi:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div>
        <form action="{{ route('store') }}" method="POST" class="p-5">
            @csrf

            <label class="form-label">Title: </label>
            <input type="text" name="title" class="form-control mb-4 @error('title') is-invalid @enderror"
            value="{{ $errors->has('title') ? '' : old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <label class="form-label">Original Title: </label>
            <textarea type="text" name="original_title" class="form-control mb-4 @error('original_title') is-invalid @enderror" rows="3"
            value="{{ $errors->has('original_title') ? '' : old('original_title') }}"></textarea>
            @error('original_title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Nationality: </label>
            <input type="text" name="nationality" class="form-control mb-4 @error('nationality') is-invalid @enderror" placeholder="url"
            value="{{ $errors->has('nationality') ? '' : old('nationality') }}">
            @error('nationality')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Date: </label>
            <input type="date" name="date" class="form-control mb-4 @error('date') is-invalid @enderror"
            value="{{ $errors->has('date') ? '' : old('date') }}">
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">Vote: </label>
            <input type="number" step="0.5" name="vote" class="form-control mb-4 @error('vote') is-invalid @enderror"
            value="{{ $errors->has('vote') ? '' : old('vote') }}">
            @error('vote')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
            </div>
        </form>
        <div class="text-center">
            <a href="{{route("index")}}"><button class="btn btn-secondary">Torna alla Home</button></a>
        </div>
    </div>
</div>
@endsection
