<section id="video_depoiments">
  <div class="content">
    <h2>{{ $video_depoiments->title }}</h2>
    <p>{{ $video_depoiments->substitle }}</p>
    <div class="container-depoiments">
      @foreach($video_depoiments->depoiments as $depoiment)
        @if(!in_array($depoiment->link,['#','']))
          <iframe
            src="{{ $depoiment->link }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen=""
          ></iframe>
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