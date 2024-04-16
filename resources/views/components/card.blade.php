<div>
    @if($articles)
        <ul>
            @foreach ($articles as $index => $article)
                <li><a href=" {{ route ('article', $index)}} "> {{ $article['title'] }} </a></li>
            @endforeach
        </ul>
    @else
    <p>non ci sono articoli</p>
    @endif
        
  </div>