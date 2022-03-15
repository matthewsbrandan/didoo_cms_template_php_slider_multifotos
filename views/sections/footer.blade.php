<section id="footer" style="
  {{ $footer->background ? 'background: '.$footer->background.'; ':'' }}
  {{ $footer->text_color ? 'color: '.$footer->text_color.'; ':'' }}
">
  <div class="content">
    <div>
      <img src="{{ $footer->logo }}" alt="logo" class="logo"/>
      <hr/>
      <p class="texto">{{ $footer->address }}</p>
    </div>
    <div>
      <strong>ACESSO RÁPIDO</strong>
      <ul>
        @include('layout.header-list')
        <li><a href="{{ route('privacy.policy') }}" target="_blank">Política de Privacidade</a></li>
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
      <div id="contato">
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
          @isset($footer->tiktok)
            <a href="{{$footer->tiktok}}" target="_blank">
              @include('utils.icons.tiktok',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->pinterest)
            <a href="{{$footer->pinterest}}" target="_blank">
              @include('utils.icons.pinterest',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->linkedin)
            <a href="{{$footer->linkedin}}" target="_blank">
              @include('utils.icons.linkedin',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->behance)
            <a href="{{$footer->behance}}" target="_blank">
              @include('utils.icons.behance',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
          @isset($footer->google_business)
            <a href="{{$footer->google_business}}" target="_blank">
              @include('utils.icons.google_business',['icons' => (object)[
                'color' => 'currentColor'
              ]])
            </a>
          @endisset
        </div>
      </div>
    @endif
  </div>
  @isset($footer->whatsapp)
    <!-- LINK PARA CONVERSA NO WHATSAPP -->
    <a href="https://wa.me/{{ numberWhatsappFormat($footer->whatsapp) }}" target="_blank" class="button-whatsapp">
      @include('utils.icons.whatsapp',['icons' => (object)[
        'color' => 'currentColor'
      ]])
    </a>
  @endisset
</section>