<section id="cms_catalog">
  <div class="content" id="produtos">
    <h2
      class="titulo"
      style="{{ $cms_catalog->text_color ? 'color: '.$cms_catalog->text_color.';' : '' }}"
    >{{ $cms_catalog->title }}</h2>
    <style>
      #container-products strong, #container-products .text-loading{
        {{ $cms_catalog->text_color ? 'color: '.$cms_catalog->text_color.';' : '' }}
      }
      #container-products .price{
        {{ $cms_catalog->highlight_color ? 'color: '.$cms_catalog->highlight_color.';' : '' }}
      }
    </style>
    <div class="wrapper-products">
      <div id="container-products">
        <p class="text-loading texto">Carregando Produtos...</p>
      </div>
      <button
        type="button"
        class="btn btn-left"
        onclick="handleScrollNextOrPrevItem(false, 'container-products', (20) * 16)"
      >
        <img src="{{ asset('images/arrow-left.png') }}" alt="Seta para esquerda"/>
      </button>
      <button
        type="button"
        class="btn btn-right"
        onclick="handleScrollNextOrPrevItem(true, 'container-products', (20) * 16)"
      >
        <img src="{{ asset('images/arrow-right.png') }}" alt="Seta para direita"/>
      </button>
    </div>

    <a
      href="{{ $cms_catalog->button->link }}"
      target="_blank"
      class="botao btn btn-primary btn-uppercase"
      style="
        {{ $cms_catalog->button->background ? 'background: '.$cms_catalog->button->background.';' : '' }}
        {{ $cms_catalog->button->color ? 'color: '.$cms_catalog->button->color.';' : '' }}
      "
    >{{ $cms_catalog->button->text }}</a>
  </div>
</section>