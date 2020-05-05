<body>
    <div class="articles center sans-serif">
        <h1>Articles</h1>

        @foreach($articles as $article)
        <div >
            <hr/>
            <header >{{ $article->title }}</header>
            <div >
                <!-- <p>{{ $article->content }}</p> -->
                <p ><span >Author:</span> {{ $article->author->first_name }}</p>
                <!-- <p>{{ $article->updated_at }}</p>                 -->
            </div>
        </div>
        @endforeach
    </div>
</body>