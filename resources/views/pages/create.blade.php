@extends('layouts.index')
@section('content')
    <section>
        <form action="/livres/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">nom de l'auteur</span>
                <input type="text" class="form-control"  value='{{ old('name') }}' ia-label="nom de l'auteur" name="name"
                    aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">texte de l'auteur</span>
                <textarea id="" name="texte" cols="30"   rows="10">
                    {{ old('texte') }}
                </textarea>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">note de l'auteur</span>
                <input type="number" class="form-control" aria-label="note de l'auteur" name="note"
                value='{{ old('note') }}'
                    aria-describedby="inputGroup-sizing-sm">
            </div>

            <button type="submit">Add</button>
        </form>
    </section>
@endsection
