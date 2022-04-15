<section id="banner">
  <div class="content">
    <div>
      <hgroup>
        <h1 class="titulo" style="
          {{ $banner->title->color ? 'color: '.$banner->title->color.';' : '' }}
        ">{{ $banner->title->text }}</h1>
        <strong class="subtitulo" style="
          {{ $banner->caption->color ? 'color: '.$banner->caption->color.';' : '' }}
        ">{{ $banner->caption->text }}</strong>
      </hgroup>
      <p class="texto description" style="
        {{ $banner->description->color ? 'color: '.$banner->description->color.';' : '' }}
      ">{!! $banner->description->text !!}</p>
      <a
        class="botao btn btn-primary btn-uppercase"
        href="{{ $banner->button->link }}"
        style="
          {{ $banner->button->background ? 'background: '.$banner->button->background.';' : '' }}
          {{ $banner->button->color ? 'color: '.$banner->button->color.';' : '' }}
        "
      >{{ $banner->button->text }}</a>
    </div>
  </div>
  <iframe
    src="{{ $banner->video }}?autoplay=1&mute=1&loop=1&controls=0"
    class="bg-video"
    style="
      width: 100%;
      height: 100%;
    "
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen=""
  ></iframe>
  <div class="overlay" style="background: {{ $banner->overlay }}"></div>
</section>