<section 
  id="video"
  style="{{ innerStyle('background-image', $video->wallpaper, null, "url('".$video->wallpaper."')") }}"
>
  <button type="button" class="btn" onclick="$(this).hide('slow').next().attr('src','{{ $video->src }}').show('slow');">
    <img src="{{ asset('images/seta2.png') }}" alt="play"/>
  </button>
  <iframe
    src=""
    style="display: none;"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen=""
  ></iframe>
</section>