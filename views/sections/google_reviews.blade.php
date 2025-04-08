<section id="google_reviews" style="
  {{ innerStyleIssetAttr('background-image', $google_reviews, 'image') }}
  {{ innerStyleIssetAttr('order', $google_reviews, 'order', $default_order) }}
">
  <div class="content">
    <h2 class="titulo" style="
      {{ innerStyleIssetAttr('font-size', $google_reviews->title, 'length') }}
      {{ innerStyle('color', $google_reviews->title->color) }}
    ">{{ $google_reviews->title->text }}</h2>
    <p class="description texto" style="
      {{ innerStyleIssetAttr('font-size', $google_reviews->subtitle, 'length') }}
      {{ innerStyle('color', $google_reviews->subtitle->color) }}
    ">{{ nl2br($google_reviews->subtitle->text) }}</p>

    <img src="{{ asset('images/google-my-business.png') }}" alt="Google Meu Negócio" class="google-reviews"/>
    
    <div>
      @foreach($google_reviews->reviews as $review)
        <div> {{-- CARD  --}}
          <div> {{-- HEADER --}}
            <img src="{{ $review->avatar }}"/>
            <div>
              <strong style="{{ innerStyle('color', $review->author->color) }}">{{ $review->author->text }}</strong>
              <p class="date" style="{{ innerStyle('color', $review->date->color) }}">{{ $review->date->text }}</p>
            </div>
          </div>
          <div class="stars">
            @for($i = 0; $i < 5; $i++)
              @if($i < $review->stars)
                @include('utils.icons.star')
              @else
                @include('utils.icons.star_empty')
              @endif
            @endfor
          </div>
          {{-- [ ] ADICIONAR FUNCIONALIDADE DE LER MAIS --}}
          <p class="text" style="
            {{ innerStyleIssetAttr('color', $review->description, 'color') }}
          ">{{ $review->description->text }}</p>
        </div>
      @endforeach
    </div>

    <a
      href="{{ $google_reviews->button->link }}"
      target="_blank"
      class="botao btn btn-primary btn-uppercase"
      style="
        {{ $google_reviews->button->background ? 'background: '.$google_reviews->button->background.';' : '' }}
        {{ $google_reviews->button->color ? 'color: '.$google_reviews->button->color.';' : '' }}
      "
    >{{ $google_reviews->button->text }}</a>
  </div>
  @if(isset($google_reviews->overlay) && $google_reviews->overlay)
    <div class="overlay" style="background: {{ $google_reviews->overlay }}"></div>
  @endif
</section>