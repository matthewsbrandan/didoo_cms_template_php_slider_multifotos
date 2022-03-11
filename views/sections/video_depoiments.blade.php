<section id="video_depoiments">
  <div class="content">
    <h2>{{ $video_depoiments->title }}</h2>
    <p>{{ $video_depoiments->substitle }}</p>
    <div class="container-depoiments">
      @foreach($video_depoiments->depoiments as $depoiment)
        @if(!in_array($depoiment->link,['#','']))
          <div
            class="container-depoiment-item"
            style="{{ innerStyle('background-image', $depoiment->wallpaper, null, "url('".$depoiment->wallpaper."')") }}"
          >
            <button type="button" class="btn" onclick="$(this).hide('slow').next().attr('src','{{ $depoiment->link }}').show('slow');">
              <img src="http://localhost:8000/galleries/1/tema-padrao-php/1646963337_10.png" alt="play"/>
            </button>
            <iframe
              src=""
              style="display: none;"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen=""
            ></iframe>
          </div>
        @endif
      @endforeach
    </div>
    <a
      href="{{ $video_depoiments->button->link }}"
      target="_blank"
      class="btn btn-primary btn-uppercase"
      style="
        {{ $video_depoiments->button->background ? 'background: '.$video_depoiments->button->background.';' : '' }}
        {{ $video_depoiments->button->color ? 'color: '.$video_depoiments->button->color.';' : '' }}
      "
    >{{ $video_depoiments->button->text }}</a>
  </div>
</section>