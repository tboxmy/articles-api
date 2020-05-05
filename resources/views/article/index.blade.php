<body>
    <div class="articles center sans-serif">
        <h1>Articles</h1>

        @foreach($articles as $article)
        <div >
            <hr/>
            <header ><a href="{{route('articles.show',['id'=>$article->id])}}" class = "btn btn-info">
            {{ $article->title }}</a></header>
            <div >
                <!-- <p>{{ $article->content }}</p> -->
                <p ><span >Author:</span> {{ $article->author->first_name }}</p>
                <!-- <p>{{ $article->updated_at }}</p>                 -->
            </div>
        </div>
        @endforeach
    </div>
</body>