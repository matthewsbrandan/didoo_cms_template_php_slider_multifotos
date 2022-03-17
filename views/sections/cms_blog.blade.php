<section id="cms_blog" style="{{ innerStyle('color', $cms_blog->background) }}">
  <div class="content" id="blog">
    <h2 class="titulo" style="{{ innerStyle('color', $cms_blog->text_color) }}">{{ $cms_blog->title }}</h2>
    <div id="container-blog" style="{{ innerStyle('color', $cms_blog->text_color) }}">
      <p class="text-loading texto">Carregando Posts...</p>
    </div>
    <div class="group-buttons">
      <a
        href="{{ route('blog.feed.index') }}"
        target="_blank"
        class="botao btn btn-primary btn-uppercase"
        style="
          {{ $cms_blog->button->background ? 'background: '.$cms_blog->button->background.';' : '' }}
          {{ $cms_blog->button->color ? 'color: '.$cms_blog->button->color.';' : '' }}
        "
      >Ver Blog</a>
    </div>
  </div>
</section>