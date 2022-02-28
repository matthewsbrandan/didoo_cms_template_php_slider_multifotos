<header
  id="main-header"
  style="
    {{ $header->background ? 'background: '.$header->background.';':'' }}
  "
>
  <nav class="nav">
    <a href="{{ route('home') }}" class="logo">
      <img src="{{ $header->logo }}"/>
    </a>
    <button
      type="button"
      class="toggle-menu"
      onclick="toggleMainMenu($(this), $(this).next())"
      style="
        {{ $header->link_color ? 'color: '.$header->link_color.';': '' }}
      "
    >@include('utils.icons.menu')</button>
    <ul
      class="horizontal-list"
      style="
        {{ $header->background ? 'background: '.$header->background.' !important;':'' }}
        {{ $header->link_color ? 'color: '.$header->link_color.';': '' }}
      "
    >
      <li>
        <a href="#servicos" onclick="toggleActiveMainMenu($(this).parent())">Serviços</a>
      </li>
      <li>
        <a href="#sobre" onclick="toggleActiveMainMenu($(this).parent())">Sobre</a>
      </li>
      <li>
        <a href="#produto" onclick="toggleActiveMainMenu($(this).parent())">Produto</a>
      </li>
      <li>
        <a href="#galeria" onclick="toggleActiveMainMenu($(this).parent())">Galeria</a>
      </li>
      <li>
        <a href="#contato" onclick="toggleActiveMainMenu($(this).parent())">Contato</a>
      </li>
      <a  
        href="#agendar"
        onclick="toggleActiveMainMenu()"
        class="btn btn-primary"
        style="
          {{ $header->button_background ? 'background: '.$header->button_background.';': '' }}
          {{ $header->button_color ? 'color: '.$header->button_color.';': '' }}
        "
      >Agendar Horário</a>
    </ul>
  </nav>
  <script>
    function toggleMainMenu(elem, target){
      if(target.hasClass('show')) elem.html(`@include('utils.icons.menu')`);
      else elem.html(`@include('utils.icons.close')`);
      target.toggleClass('show')
    }
    function toggleActiveMainMenu(target = null){
      $('#main-header .horizontal-list li').removeClass('active');
      if(target) target.addClass('active');
  
      $('#main-header .toggle-menu').click();
    }
  </script>
</header>