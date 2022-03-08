<section id="text_divider">
  <div class="content" style="background: {{ $text_divider->background }}">
    <h2 style="{{ $text_divider->text_color ? 'color: '.$text_divider->text_color.';' : '' }}">
    {{ $text_divider->title }}
    </h2>

    <p style="{{ $text_divider->text_color ? 'color: '.$text_divider->text_color.';' : '' }}">
    {{ $text_divider->description }}
    </p>

    <a
      href="{{ $text_divider->button->link }}"
      target="_blank"
      class="btn btn-primary btn-uppercase"
      style="
        {{ $text_divider->button->background ? 'background: '.$text_divider->button->background.';' : '' }}
        {{ $text_divider->button->color ? 'color: '.$text_divider->button->color.';' : '' }}
      "
    >{{ $text_divider->button->text }}</a>
  </div>
</section>