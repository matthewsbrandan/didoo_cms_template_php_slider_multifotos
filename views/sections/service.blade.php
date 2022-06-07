<section id="service" style="
  {{ innerStyle('background-image', $service->image, null, "url('". $service->image . "')") }}
">
  <div class="content" id="servicos" style="
    {{ innerStyle('color', $service->text_color) }}
  ">
    <h2 class="titulo" style="
      {{ innerStyle('font-size', $service->title_length, null, $service->title_length . 'px') }}
    ">{{ $service->title }}</h2>
    <p class="subtitulo subtitle" style="
      {{ innerStyle('font-size', $service->subtitle_length, null, $service->subtitle_length . 'px') }}
    ">{{ $service->subtitle }}</p>
    <div class="container-services">
      @foreach($service->services as $item)
        <div class="service">
          <img src="{{ $item->image }}" alt="{{ $item->title }}"/>
          <strong style="
            {{ innerStyle('font-size', $service->item_title_length, null, $service->item_title_length . 'px') }}
          ">{{ $item->title }}</strong>
          <p class="texto" style="
            {{ innerStyle('font-size', $service->item_description_length, null, $service->item_description_length . 'px') }}
          ">{{ $item->description }}</p>
          <a
            href="{{ $item->button->link }}"
            class="botao btn btn-primary btn-uppercase"
            target="_blank"
            style="
              {{ $item->button->background ? 'background: '.$item->button->background.';' : '' }}
              {{ $item->button->color ? 'color: '.$item->button->color.';' : '' }}
            "
          >{{ $item->button->text }}</a>
        </div>
      @endforeach
    </div>
  </div>
  @if(isset($service->overlay) && $service->overlay)
    <div class="overlay" style="background: {{ $service->overlay }}"></div>
  @endif
</section>