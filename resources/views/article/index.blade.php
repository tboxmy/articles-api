<body>
    <div class="articles center sans-serif">
        <h1>Articles</h1>

        @foreach($articles as $article)
        <div >
            <hr/>
            <header ><a href="{{route('articles.show',['id'=>$article->id])}}" class = "btn btn-info">
            {{ $article->title }}</a></header>
            <div >                
                <p ><span >Author:</span> {{ $article->author->first_name }}</p>                
            </div>
        </div>
        @endforeach
        {{ $articles->links() }}
    </div>
</body>