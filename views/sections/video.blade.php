<section 
  id="video"
  style="{{ innerStyle('background-image', "url('".$video->wallpaper."')") }}"
>
  <button type="button" class="btn" onclick="$(this).hide('slow').next().attr('src','{{ $video->src }}').show('slow');">
    <img src="http://localhost:8000/galleries/1/tema-padrao-php/1646963337_10.png" alt="play"/>
  </button>
  <iframe
    src=""
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen=""
    style="display: none;"
  ></iframe>
</section>