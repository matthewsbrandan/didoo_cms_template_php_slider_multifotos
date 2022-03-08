<section id="service">
  <div class="content">
    <h2>{{ $service->title }}</h2>
    <p class="subtitle">{{ $service->subtitle }}</p>
    <div class="container-services">
      @foreach($service->services as $item)
        <div class="service">
          <img src="{{ $item->image }}" alt="{{ $item->title }}"/>
          <strong>{{ $item->title }}</strong>
          <p>{{ $item->description }}</p>
          <a
            href="{{ $item->button->link }}"
            class="btn btn-primary btn-uppercase"
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
</section>