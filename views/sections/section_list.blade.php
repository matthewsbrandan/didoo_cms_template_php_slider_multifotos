<section id="section_list" style="
  {{ innerStyle('background-image', $section_list->wallpaper, null, "url('". $section_list->wallpaper . "')") }}
">
  <div class="content" style="background: {{ $section_list->background }}">
    <div>
      <div>
        <h2 class="titulo" style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">
        {{ $section_list->title }}
        </h2>
        <ul style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">
          @foreach($section_list->items as $item)
            <li>
              <p style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">
                {{ $item->item }}
              </p>
            </li>
          @endforeach
        </ul>
        <a
          href="{{ $section_list->button->link }}"
          class="botao btn btn-primary btn-uppercase"
          target="_blank"
          style="
            {{ $section_list->button->background ? 'background: '.$section_list->button->background.';' : '' }}
            {{ $section_list->button->color ? 'color: '.$section_list->button->color.';' : '' }}
          "
        >{{ $section_list->button->text }}</a>
      </div>
    </div>
    <img src="{{ $section_list->image }}" alt="{{ $section_list->title }}"/>
  </div>
  @if(isset($section_list->overlay) && $section_list->overlay)
    <div class="overlay" style="background: {{ $section_list->overlay }}"></div>
  @endif
</section>