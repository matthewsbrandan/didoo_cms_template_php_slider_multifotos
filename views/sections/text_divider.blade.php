<section id="text_divider" style="
  {{ innerStyle('background-image', $text_divider->image, null, "url('". $text_divider->image . "')") }}
">
  <div class="content" style="background: {{ $text_divider->background }}">
    <h2 class="titulo"style="{{ $text_divider->text_color ? 'color: '.$text_divider->text_color.';' : '' }}">
    {{ $text_divider->title }}
    </h2>

    <p class="texto" style="{{ $text_divider->text_color ? 'color: '.$text_divider->text_color.';' : '' }}">
    {{ $text_divider->description }}
    </p>

    <a
      href="{{ $text_divider->button->link }}"
      target="_blank"
      class="botao btn btn-primary btn-uppercase"
      style="
        {{ $text_divider->button->background ? 'background: '.$text_divider->button->background.';' : '' }}
        {{ $text_divider->button->color ? 'color: '.$text_divider->button->color.';' : '' }}
      "
    >{{ $text_divider->button->text }}</a>
  </div>
  @if(isset($text_divider->overlay) && $text_divider->overlay)
    <div class="overlay" style="background: {{ $text_divider->overlay }}"></div>
  @endif
</section>