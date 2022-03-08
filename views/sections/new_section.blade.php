<section id="new_section">
  <div class="content">
    <h2 style="
      {{ $new_section->text_color ? 'color: '.$new_section->text_color.';' : '' }}
    ">{{ $new_section->title }}</h2>
    <p class="description" style="
      {{ $new_section->text_color ? 'color: '.$new_section->text_color.';' : '' }}
    ">{!! $new_section->description !!}</p>
    <a
      href="{{ $new_section->button->link }}"
      target="_blank"
      class="btn btn-primary btn-uppercase"
      style="
        {{ $new_section->button->background ? 'background: '.$new_section->button->background.';' : '' }}
        {{ $new_section->button->color ? 'color: '.$new_section->button->color.';' : '' }}
      "
    >{{ $new_section->button->text }}</a>
  </div>
</section>