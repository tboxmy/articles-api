<body>
<a href="/articles">BACK</a>
    <div class="articles center sans-serif">
        <h1>Article</h1>
            <header >{{ $article->title }}</header>
            <div >
                <p>{{ $article->content }}</p>
                <p ><span >Author:</span> {{ $article->author->first_name }}</p>
                <p>Last updated: {{ $article->updated_at }}</p>                
            </div>
    </div>
</body>