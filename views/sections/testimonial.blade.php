<section id="testimonial">
  <div class="content" style="background: {{ $testimonial->background }}">
    <div class="container-clients">
      @foreach($testimonial->clients as $client)
        <div class="client">
          <img src="{{ $client->image }}" alt="{{ $client->name }}"/>
          <strong style="{{ $testimonial->text_color ? 'color: '.$testimonial->text_color.';' : '' }}">
            {{ $client->name }}, <span>{{ $client->address }}</span>
          </strong>
          <p style="{{ $testimonial->text_color ? 'color: '.$testimonial->text_color.';' : '' }}">{{ $client->description }}</p>
        </div>
      @endforeach
    </div>
    <div class="group-buttons">
      <a
        href="{{ $testimonial->button->link }}"
        target="_blank"
        class="btn btn-primary btn-uppercase"
        style="
          {{ $testimonial->button->background ? 'background: '.$testimonial->button->background.';' : '' }}
          {{ $testimonial->button->color ? 'color: '.$testimonial->button->color.';' : '' }}
        "
      >{{ $testimonial->button->text }}</a>
    </div>
  </div>
</section>