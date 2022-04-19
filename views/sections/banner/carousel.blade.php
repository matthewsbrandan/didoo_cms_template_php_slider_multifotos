<section id="banner">
  <div class="carousel">
    @foreach($banner->images as $index => $image)
      <div class="carousel-item" style="background-image: url('{{ $image->src }}');">
        <div class="content">
          <div>
            <h1 class="titulo" style="
              {{ $image->title->color ? 'color: '.$image->title->color.';' : '' }}
            ">{{ $image->title->text }}</h1>
            <p class="texto description" style="
              {{ $image->description->color ? 'color: '.$image->description->color.';' : '' }}
            ">{!! $image->description->text !!}</p>
          </div>
        </div>
        <div class="overlay" style="background: {{ $image->overlay }}"></div>
      </div>
    @endforeach
  </div>
</section>