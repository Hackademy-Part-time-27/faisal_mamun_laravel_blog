
<nav class="navbar navbar-expand-lg navbar bg-primary " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('welcome') }}">{{ config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about-me') }}">Chi Sono</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts') }}">contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles') }}">Articoli</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
