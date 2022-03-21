<section id="cms_gallery"
  style="{{ innerStyle('background', $cms_gallery->background) }}"
>
  <div class="content" id="galeria" style="
    {{ innerStyle('color', $cms_gallery->text_color) }}
  ">
    <h2>{{ $cms_gallery->title }}</h2>
    <p>{{ $cms_gallery->subtitle }}</p>
    <div class="wrapper-gallery">
      <div id="container-gallery">
        <p class="text-loading texto">Carregando Galeria...</p>
      </div>
      <button
        type="button"
        class="btn btn-left"
        onclick="handleScrollNextOrPrevItem(false, 'container-gallery', (15 + (2 * .4)) * 16)"
      >
        <img src="{{ asset('images/arrow-left.png') }}" alt="Seta para esquerda"/>
      </button>
      <button
        type="button"
        class="btn btn-right"
        onclick="handleScrollNextOrPrevItem(true, 'container-gallery', (15 + (2 * .4)) * 16)"
      >
        <img src="{{ asset('images/arrow-right.png') }}" alt="Seta para direita"/>
      </button>
    </div>
  </div>
</section>