<div id="navbar" class="bar my-display">

    <div class="my-display">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC-Logo">
    </div>

    <div class="text">
        <div>
            <ul id="nav-list">
                @foreach($links as $linkList)
                    @foreach($linkList['list'] as $currentLink)
                        <li class="links pointer">{{ $currentLink }}</li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>

</div>

<div id="jumbo-bar">

    <div id="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        <div id="label">
            <span>CURRENT SERIES</span>
        </div>
    </div>
    
</div>




