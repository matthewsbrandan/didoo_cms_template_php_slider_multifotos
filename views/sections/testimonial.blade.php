<section id="testimonial" style="
  {{ innerStyleIssetAttr('background-image', $testimonial, 'image') }}
  {{ innerStyleIssetAttr('order', $testimonial, 'order', $default_order) }}
">
  <div class="content" style="background: {{ $testimonial->background }}">
    <div class="container-clients">
      @foreach($testimonial->clients as $client)
        <div class="client">
          <div class="content-image">
            <img src="{{ $client->image }}" alt="{{ $client->name }}"/>
            <img src="{{ asset('images/iconedepoimento.png') }}" alt="icone" class="icon"/>
          </div>
          <strong style="
            {{ $testimonial->text_color ? 'color: '.$testimonial->text_color.';' : '' }}
            {{ innerStyleIssetAttr('font-size', $testimonial, 'title_length') }}
          ">{{ $client->name }}, <span>{{ $client->address }}</span></strong>
          <p class="texto" style="
            {{ $testimonial->text_color ? 'color: '.$testimonial->text_color.';' : '' }}
            {{ innerStyleIssetAttr('font-size', $testimonial, 'description_length') }}
          ">{{ $client->description }}</p>
        </div>
      @endforeach
    </div>
    <div class="group-buttons">
      <a
        href="{{ $testimonial->button->link }}"
        target="_blank"
        class="botao btn btn-primary btn-uppercase"
        style="
          {{ $testimonial->button->background ? 'background: '.$testimonial->button->background.';' : '' }}
          {{ $testimonial->button->color ? 'color: '.$testimonial->button->color.';' : '' }}
        "
      >{{ $testimonial->button->text }}</a>
    </div>
  </div>
  @if(isset($testimonial->overlay) && $testimonial->overlay)
    <div class="overlay" style="background: {{ $testimonial->overlay }}"></div>
  @endif
</section>