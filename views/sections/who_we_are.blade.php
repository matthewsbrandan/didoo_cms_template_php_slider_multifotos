<section id="who_we_are">
  <div class="content">
    <img src="{{ $who_we_are->image }}" alt="{{ $who_we_are->title }}"/>
    <div>
      <h2 style="{{ $who_we_are->text_color ? 'color: '.$who_we_are->text_color.';' : '' }}">
       {{ $who_we_are->title }}
      </h2>
      <p>{!! $who_we_are->description !!}</p>
      <a
        href="{{ $who_we_are->button->link }}"
        class="btn btn-primary btn-uppercase"
        style="
          {{ $who_we_are->button->background ? 'background: '.$who_we_are->button->background.';' : '' }}
          {{ $who_we_are->button->color ? 'color: '.$who_we_are->button->color.';' : '' }}
        "
      >{{ $who_we_are->button->text }}</a>
    </div>
  </div>
</section>