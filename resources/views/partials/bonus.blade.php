<div class="bonus-container">
    <div class="bonus-comic">
      <h2 class="bonus-title">{{ $comics[0]['title'] }}</h2>
      <div class="bonus-price-availability">
        Price: {{ $comics[0]['price'] }} | Availability: In stock
      </div>
      <div class="bonus-description">
        {{ $comics[0]['description'] }}
      </div>
      <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['title'] }}">
    </div>
  </div>
</div>