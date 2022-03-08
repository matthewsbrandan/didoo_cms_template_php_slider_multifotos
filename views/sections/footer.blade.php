<section id="footer" style="
  {{ $footer->background ? 'background: '.$footer->background.'; ':'' }}
  {{ $footer->text_color ? 'color: '.$footer->text_color.'; ':'' }}
">
  <div class="content">
    <div>
      <img src="{{ $footer->logo }}" alt="logo" class="logo"/>
      <hr/>
      <p>{{ $footer->address }}</p>
      @isset($footer->whatsapp)
        <!-- LINK PARA CONVERSA NO WHATSAPP -->
        <a href="https://wa.me/{{ $footer->whatsapp }}" target="_blank">
          @include('utils.icons.whatsapp',['icons' => (object)[
            'color' => 'currentColor'
          ]])
        </a>
      @endisset
    </div>
    <div>
      <strong>ACESSO RÁPIDO</strong>
      <ul>
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
        <li>
          <a href="#agendar" onclick="toggleActiveMainMenu($(this).parent())">Agendar Horário</a>
        </li>
      </ul>
    </div>
    @if(
      isset($footer->email) || 
      isset($footer->whatsapp) || 
      isset($footer->facebook) || 
      isset($footer->instagram) || 
      isset($footer->youtube) || 
      isset($footer->twitter)
    )
      <div>
        <strong>FALE CONOSCO</strong>
        @isset($footer->whatsapp)
          <a href="tel: {{ $footer->whatsapp }}" target="_blank">{{ $footer->whatsapp }}</a>
        @endisset
        @isset($footer->email)
          <a href="mailto:{{ $footer->email }}" target="_blank">{{ $footer->email }}</a>
        @endisset
        <div class="group-icons">
          @isset($footer->facebook)
            <a href="{{$footer->facebook}}" target="_blank">
              @include('utils.icons.facebook',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->instagram)
            <a href="{{$footer->instagram}}" target="_blank">
              @include('utils.icons.instagram',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->youtube)
            <a href="{{$footer->youtube}}" target="_blank">
              @include('utils.icons.youtube',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->twitter)
            <a href="{{$footer->twitter}}" target="_blank">
              @include('utils.icons.twitter',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
        </div>
      </div>
    @endif
  </div>
</section>