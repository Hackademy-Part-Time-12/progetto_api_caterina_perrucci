<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>{{$anime['title']}}</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <p>Generi:</p>
                <ul>
                    @foreach ($anime['genres'] as $genre)
                        <li>{{$genre['name']}}, {{$genre['type']}}</li>
                    @endforeach
                </ul>
                <p>Numero episodi: {{$anime['episodes']}}</p>
                <p>{{$anime['synopsis']}}</p>
            </div>
        </div>
    </div>
</x-layout>