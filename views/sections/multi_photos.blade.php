<section id="multi_photo" style="
  {{ innerStyle('background-image', $multi_photos->image, null, "url('". $multi_photos->image . "')") }}
">
  <div class="content" id="multi-fotos">
    <h2 class="titulo" style="
      {{ innerStyle('font-size', $multi_photos->title->length, null, $multi_photos->title->length . 'px') }}
      {{ innerStyle('color', $multi_photos->title->color) }}
    ">{{ $multi_photos->title->text }}</h2>
    <p class="subtitulo subtitle" style="
      {{ innerStyle('font-size', $multi_photos->subtitle->length, null, $multi_photos->subtitle->length . 'px') }}
      {{ innerStyle('color', $multi_photos->subtitle->color) }}
    ">{{ $multi_photos->subtitle->text }}</p>
    <div class="container-multi_photos">
      @foreach($multi_photos->services as $item)
        <div class="multi_photo">
          @if(isset($item->video) && $item->video)
            <div class="container-video">
              <iframe
                src="{{ $item->video }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen=""
              ></iframe>
            </div>
          @else <img src="{{ $item->images[0]->src ?? asset('no-image.jpg') }}" alt="{{ $item->title }}"/> @endif
          <a
            href="{{ isset($item->slug) && $item->slug ? route('product.show',['slug' => $item->slug]) : 'javascript:;' }}"
            @if(isset($item->slug) && $item->slug) target="_blank" @endif
          >
            <strong style="
              {{ innerStyle('font-size', $multi_photos->service_title->length, null, $multi_photos->service_title->length . 'px') }}
              {{ innerStyle('color', $multi_photos->service_title->color) }}
            ">{{ $item->title }}</strong>
          </a>
          <p class="texto" style="
            {{ innerStyle('font-size', $multi_photos->service_description->length, null, $multi_photos->service_description->length . 'px') }}
            {{ innerStyle('color', $multi_photos->service_description->length) }}
          ">{{ $item->description }}</p>
          <a
            href="javascript:;"
            class="botao btn btn-primary btn-uppercase"
            style="
              {{ $multi_photos->button_see_more->background ? 'background: '.$multi_photos->button_see_more->background.';' : '' }}
              {{ $multi_photos->button_see_more->color ? 'color: '.$multi_photos->button_see_more->color.';' : '' }}
            "
            onclick='handleShowMultiPhotos({!! json_encode($item) !!})'
          >{{ $multi_photos->button_see_more->text ?? 'Ver Mais' }}</a>
        </div>
      @endforeach
    </div>
  </div>
  @if(isset($multi_photos->overlay) && $multi_photos->overlay)
    <div class="overlay" style="background: {{ $multi_photos->overlay }}"></div>
  @endif
</section>