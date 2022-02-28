<section id="product_list" style="background: {{ $product_list->background }}">
  <div class="content">
    <div class="container-items">
      @foreach($product_list->items as $item)
        <div class="item">
          <img src="{{ $item->image }}" alt="{{ $item->title }}"/>
          <strong style="{{ $product_list->text_color ? 'color: '.$product_list->text_color.';' : '' }}">{{ $item->title }}</strong>
          <p style="{{ $product_list->text_color ? 'color: '.$product_list->text_color.';' : '' }}">{{ $item->description }}</p>
        </div>
      @endforeach
    </div>
    <div class="group-buttons">
      <a
        href="{{ $product_list->button->link }}"
        class="btn btn-primary btn-uppercase"
        style="
          {{ $product_list->button->background ? 'background: '.$product_list->button->background.';' : '' }}
          {{ $product_list->button->color ? 'color: '.$product_list->button->color.';' : '' }}
        "
      >{{ $product_list->button->text }}</a>
      <button
        type="button"
        class="btn btn-primary btn-uppercase"
        style="
          {{ $product_list->button_schedule->background ? 'background: '.$product_list->button_schedule->background.';' : '' }}
          {{ $product_list->button_schedule->color ? 'color: '.$product_list->button_schedule->color.';' : '' }}
        "
      >{{ $product_list->button_schedule->text }}</button>
    </div>
  </div>
</section>