<section id="who_we_are" style="
  {{ innerStyleIssetAttr('background-image', $who_we_are, 'background') }}
  {{ innerStyleIssetAttr('order', $who_we_are, 'order', $default_order) }}
">  
  <div class="content" id="sobre">
    <img src="{{ $who_we_are->image }}" alt="{{ $who_we_are->title }}"/>
    <div>
      <h2 class="titulo" style="
        {{ $who_we_are->text_color ? 'color: '.$who_we_are->text_color.';' : '' }}
        {{ innerStyleIssetAttr('font-size', $who_we_are, 'title_length') }}
      ">
       {{ $who_we_are->title }}
      </h2>
      <p class="texto" style="
        {{ $who_we_are->text_color ? 'color: '.$who_we_are->text_color.';' : '' }}
        {{ innerStyleIssetAttr('font-size', $who_we_are, 'description_length') }}
      ">{!! $who_we_are->description !!}</p>
      <a
        href="{{ $who_we_are->button->link }}"
        target="_blank"
        class="botao btn btn-primary btn-uppercase"
        style="
          {{ $who_we_are->button->background ? 'background: '.$who_we_are->button->background.';' : '' }}
          {{ $who_we_are->button->color ? 'color: '.$who_we_are->button->color.';' : '' }}
        "
      >{{ $who_we_are->button->text }}</a>
    </div>
  </div>
  @if(isset($who_we_are->overlay) && $who_we_are->overlay)
    <div class="overlay" style="background: {{ $who_we_are->overlay }}"></div>
  @endif
</section>