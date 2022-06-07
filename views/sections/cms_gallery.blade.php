<section id="cms_gallery" style="
  {{
    isset($cms_gallery->image) && $cms_gallery->image ? 
    innerStyle('background-image', $cms_gallery->image, null, "url('". $cms_gallery->image . "')") :
    innerStyle('background', $cms_gallery->background) 
  }}

">
  <div class="content" id="galeria" style="
    {{ innerStyle('color', $cms_gallery->text_color) }}
  ">
    <h2 style="
      {{ innerStyle('font-size', $cms_gallery->title_length, null, $cms_gallery->title_length . 'px') }}
    ">{{ $cms_gallery->title }}</h2>
    <p style="
      {{ innerStyle('font-size', $cms_gallery->subtitle_length, null, $cms_gallery->subtitle_length . 'px') }}
    ">{{ $cms_gallery->subtitle }}</p>
    <div class="wrapper-gallery">
      <div id="container-gallery">
        <p class="text-loading texto">Carregando Galeria...</p>
      </div>
      <button
        type="button"
        class="btn btn-left botao"
        style="{{ innerStyle('color', $cms_gallery->button->color, '#fff').' '.innerStyle('background', $cms_gallery->button->background, '#5e72e4') }}"
        onclick="handleScrollNextOrPrevItem(false, 'container-gallery', (15 + (2 * .4)) * 16)"
      >@include('utils.icons.chevron_left')</button>
      <button
        type="button"
        class="btn btn-right botao"
        style="{{ innerStyle('color', $cms_gallery->button->color, '#fff').' '.innerStyle('background', $cms_gallery->button->background, '#5e72e4') }}"
        onclick="handleScrollNextOrPrevItem(true, 'container-gallery', (15 + (2 * .4)) * 16)"
      >@include('utils.icons.chevron_right')</button>
    </div>
  </div>
  @if(isset($cms_gallery->overlay) && $cms_gallery->overlay)
    <div class="overlay" style="background: {{ $cms_gallery->overlay }}"></div>
  @endif
</section>