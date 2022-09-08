<div class="d-flex align-items-center justify-content-center gap-3">
    @foreach ($livres as $livre )
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <p class="card-text">{{ $livre->texte }}</p>
      <a href="#" class="card-link">{{ $livre->name }}</a>
      <a href="#" class="card-link">{{ $livre->note }}</a>
    </div>
  </div>
@endforeach
</div>
