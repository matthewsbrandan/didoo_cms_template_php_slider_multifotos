<section id="section_list">
  <div class="content" style="background: {{ $section_list->background }}">
    <div>
      <div>
        <h2 style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">
        {{ $section_list->title }}
        </h2>
        <ul style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">
          @foreach($section_list->items as $item)
            <li>
              <p style="{{ $section_list->text_color ? 'color: '.$section_list->text_color.';' : '' }}">{{ $item->item }}</p>
            </li>
          @endforeach
        </ul>
        <a
          href="{{ $section_list->button->link }}"
          class="btn btn-primary btn-uppercase"
          style="
            {{ $section_list->button->background ? 'background: '.$section_list->button->background.';' : '' }}
            {{ $section_list->button->color ? 'color: '.$section_list->button->color.';' : '' }}
          "
        >{{ $section_list->button->text }}</a>
      </div>
    </div>
    <img src="{{ $section_list->image }}" alt="{{ $section_list->title }}"/>
  </div>
</section>