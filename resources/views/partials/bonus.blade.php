<div class="bonus-container">
  <div class="bonus-comic">
      <h2 class="bonus-title">{{ $selectedComic['title'] }}</h2>
      <div class="bonus-price-availability">
          Price: {{ $selectedComic['price'] }} | Availability: In stock
      </div>
      <div class="bonus-description">
          {{ $selectedComic['description'] }}
      </div>
      <img src="{{ $selectedComic['thumb'] }}" alt="{{ $selectedComic['title'] }}">
  </div>
</div>