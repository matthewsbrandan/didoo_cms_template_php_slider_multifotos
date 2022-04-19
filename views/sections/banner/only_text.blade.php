<section id="banner" style="
  {{ innerStyle('background-image', $banner->image, null, "url('". $banner->image . "')") }}
">
  <div class="content">
    <div>
      <hgroup>
        <strong class="subtitulo" style="
          {{ $banner->caption->color ? 'color: '.$banner->caption->color.';' : '' }}
        ">{{ $banner->caption->text }}</strong>
        <h1 class="titulo" style="
          {{ $banner->title->color ? 'color: '.$banner->title->color.';' : '' }}
        ">{{ $banner->title->text }}</h1>
      </hgroup>
      <p class="texto description" style="
        {{ $banner->description->color ? 'color: '.$banner->description->color.';' : '' }}
      ">{!! $banner->description->text !!}</p>
    </div>
  </div>
  <div class="overlay" style="background: {{ $banner->overlay }}"></div>
</section>