<x-layout>
    <div class="container my-5 shadow py-2" style="background-color:#74dca1;">
        <div class="row">
            <h1 class="text-center display-2">Il nostro sito di anime</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($animes as $anime)
                <div class="col-12 col-md-3 my-3 d-flex justify-content-around">
                    <x-card :anime="$anime" />
                </div>
            @endforeach
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">I nostri anime</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row" id="wrapper"></div>
    </div>
</x-layout>