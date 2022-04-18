<section id="new_section" style="
  {{ innerStyle('background-image', $new_section->image, null, "url('". $new_section->image . "')") }}
">
  <div class="content">
    <h2 class="titulo" style="
      {{ $new_section->text_color ? 'color: '.$new_section->text_color.';' : '' }}
    ">{{ $new_section->title }}</h2>
    <p class="description texto" style="
      {{ $new_section->text_color ? 'color: '.$new_section->text_color.';' : '' }}
    ">{!! $new_section->description !!}</p>
    <a
      href="{{ $new_section->button->link }}"
      target="_blank"
      class="botao btn btn-primary btn-uppercase"
      style="
        {{ $new_section->button->background ? 'background: '.$new_section->button->background.';' : '' }}
        {{ $new_section->button->color ? 'color: '.$new_section->button->color.';' : '' }}
      "
    >{{ $new_section->button->text }}</a>
  </div>
  @if(isset($new_section->overlay) && $new_section->overlay)
    <div class="overlay" style="background: {{ $new_section->overlay }}"></div>
  @endif
</section>