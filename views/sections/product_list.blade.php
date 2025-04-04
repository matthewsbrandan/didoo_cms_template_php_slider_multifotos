<section id="product_list" style="
  {{ isset($product_list->image) && $product_list->image ? '' : 'background: ' . $product_list->background . ';' }}
  {{ innerStyleIssetAttr('background-image', $product_list, 'image') }}
  {{ innerStyleIssetAttr('order', $product_list, 'order', $default_order) }}
">
  <div class="content">
    <div class="container-items">
      @foreach($product_list->items as $item)
        <div class="item">
          <img src="{{ $item->image }}" alt="{{ $item->title }}"/>
          <strong style="
            {{ $product_list->text_color ? 'color: '.$product_list->text_color.';' : '' }}
            {{ innerStyleIssetAttr('font-size', $product_list, 'title_length') }}
          ">{{ $item->title }}</strong>
          <p class="texto" style="
            {{ $product_list->text_color ? 'color: '.$product_list->text_color.';' : '' }}
            {{ innerStyleIssetAttr('font-size', $product_list, 'description_length') }}
          ">{{ $item->description }}</p>
        </div>
      @endforeach
    </div>
    <div class="group-buttons">
      <a
        href="{{ $product_list->button->link }}"
        target="_blank"
        class="botao btn btn-primary btn-uppercase"
        style="
          {{ $product_list->button->background ? 'background: '.$product_list->button->background.';' : '' }}
          {{ $product_list->button->color ? 'color: '.$product_list->button->color.';' : '' }}
        "
      >{{ $product_list->button->text }}</a>
    </div>
  </div>
  @if(isset($product_list->overlay) && $product_list->overlay)
    <div class="overlay" style="background: {{ $product_list->overlay }}"></div>
  @endif
</section>