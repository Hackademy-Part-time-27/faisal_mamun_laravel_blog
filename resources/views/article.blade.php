<x-layout>
  <article class="card mb-2">
    <div class="card-body">
      <h1> {{ $article['title'] }} </h1>
      <p> {{  $article ['category'] }} </p>
      <h2> {{ $article ['descrizione']}}</h2>
    </div>
  </article>
</x-layout>