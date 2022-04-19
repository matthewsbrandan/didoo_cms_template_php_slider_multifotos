<section id="banner" style="
  {{ innerStyle('background-image', $banner->image, null, "url('". $banner->image . "')") }}
">
  <div class="content">
    <div>
      <strong class="subtitulo" style="
        {{ $banner->title->color ? 'color: '.$banner->title->color.';' : '' }}
      ">{{ $banner->title->text }}</strong>
      <h1 class="titulo" style="
        {{ $banner->title_highlight->color ? 'color: '.$banner->title_highlight->color.';' : '' }}
      ">{{ $banner->title_highlight->text }}</h1>
      <p class="texto description" style="
        {{ $banner->description_1->color ? 'color: '.$banner->description_1->color.';' : '' }}
      ">{!! $banner->description_1->text !!}</p>
      <iframe
        src="{{ $banner->video }}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen=""
      ></iframe>
      <p class="texto description" style="
        {{ $banner->description_2->color ? 'color: '.$banner->description_2->color.';' : '' }}
      ">{!! $banner->description_2->text !!}</p>
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
  <div class="overlay" style="background: {{ $banner->overlay }}"></div>
</section>