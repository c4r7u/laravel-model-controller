<h1>sono la home</h1>

<h2>Lista dei film:</h2>

@foreach ($movies as $movie)
    <div style="margin: 10px 0">
        <h3 style="margin:0">
            {{ $movie->title}}
        </h3>
        <div>
            Original Title:{{ $movie->original_title}}
        </div>
        <div>
            Nationality:{{ $movie->nationality}}
        </div>
        <div>
            Release date:{{ $movie->date}}
        </div>
        <div>
            Vote:{{ $movie->vote}}
        </div>
    </div>
@endforeach