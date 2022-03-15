<section
  style="background-image: url('{{ $banner->image }}')"
  id="banner"
>
  <div class="content">
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
    <button
      class="botao btn btn-primary btn-uppercase"
      style="
        {{ $banner->button->background ? 'background: '.$banner->button->background.';' : '' }}
        {{ $banner->button->color ? 'color: '.$banner->button->color.';' : '' }}
      "
    >{{ $banner->button->text }}</button>
  </div>
  <div class="overlay" style="background: {{ $banner->overlay }}"></div>
</section>