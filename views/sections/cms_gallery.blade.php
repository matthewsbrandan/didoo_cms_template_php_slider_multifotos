<section id="cms_gallery"
  style="{{ innerStyle('background', $cms_gallery->background) }}"
>
  <div class="content" id="galeria" style="
    {{ innerStyle('color', $cms_gallery->text_color) }}
  ">
    <h2>{{ $cms_gallery->title }}</h2>
    <p>{{ $cms_gallery->subtitle }}</p>
    <div id="container-gallery">
      <p class="text-loading">Carregando Galeria...</p>
    </div>
  </div>
</section>