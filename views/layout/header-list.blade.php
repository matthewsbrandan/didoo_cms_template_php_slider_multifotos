@isset($elements['service'])
  <li><a href="#servicos" onclick="toggleActiveMainMenu($(this).parent())">Serviços</a></li>
@endisset
@isset($elements['who_we_are'])
  <li><a href="#sobre" onclick="toggleActiveMainMenu($(this).parent())">Sobre</a></li>
@endisset
@isset($elements['cms_catalog'])
  <li><a href="#produtos" onclick="toggleActiveMainMenu($(this).parent())">Produtos</a></li>
@endisset
<li>
  <a href="#galeria" onclick="toggleActiveMainMenu($(this).parent())">Galeria</a>
</li>
<li>
  <a href="{{ route('blog.feed.index') }}" onclick="toggleActiveMainMenu($(this).parent())">Blog</a>
</li>
<li>
  <a href="#contato" onclick="toggleActiveMainMenu($(this).parent())">Contato</a>
</li>
@isset($elements['schedule'])
  @if(
    isset($header_list_config) && 
    $header_list_config->schedule_type &&
    $header_list_config->schedule_type == 'button'
  )
    <a  
      href="#agendar"
      onclick="toggleActiveMainMenu()"
      class="btn btn-primary"
      style="
        {{ $header->button_background ? 'background: '.$header->button_background.';': '' }}
        {{ $header->button_color ? 'color: '.$header->button_color.';': '' }}
      "
    >Agendar Horário</a>
  @else
    <li><a href="#agendar" onclick="toggleActiveMainMenu($(this).parent())">Agendar Horário</a></li>
  @endif
@endisset