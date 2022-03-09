<section id="cms_catalog">
  <div class="content" id="produtos">
    <h2
      style="{{ $cms_catalog->text_color ? 'color: '.$cms_catalog->text_color.';' : '' }}"
    >{{ $cms_catalog->title }}</h2>
    <style>
      #container-products strong{
        {{ $cms_catalog->text_color ? 'color: '.$cms_catalog->text_color.';' : '' }}
      }
      #container-products .price{
        {{ $cms_catalog->text_color ? 'color: '.$cms_catalog->highlight_color.';' : '' }}
      }
    </style>
    <div id="container-products"></div>
    <a
      href="{{ $cms_catalog->button->link }}"
      target="_blank"
      class="btn btn-primary btn-uppercase"
      style="
        {{ $cms_catalog->button->background ? 'background: '.$cms_catalog->button->background.';' : '' }}
        {{ $cms_catalog->button->color ? 'color: '.$cms_catalog->button->color.';' : '' }}
      "
    >{{ $cms_catalog->button->text }}</a>
  </div>
</section>