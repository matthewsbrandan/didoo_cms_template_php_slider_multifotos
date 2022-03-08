@extends('layout.app')
@section('head')
  <link href="{{ asset('css/sections/banner.css') }}" rel="stylesheet"/>
  @isset($elements['new_section'])
    <link href="{{ asset('css/sections/new_section.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['product_list'])
    <link href="{{ asset('css/sections/product_list.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['who_we_are'])
    <link href="{{ asset('css/sections/who_we_are.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['section_list'])
    <link href="{{ asset('css/sections/section_list.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['service'])
    <link href="{{ asset('css/sections/service.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['text_divider'])
    <link href="{{ asset('css/sections/text_divider.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['cms_catalog'])
    <link href="{{ asset('css/sections/cms_catalog.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['testimonial'])
    <link href="{{ asset('css/sections/testimonial.css') }}" rel="stylesheet"/>
  @endisset
  <!-- GALLERY SCSS -->
  @isset($elements['video'])
    <link href="{{ asset('css/sections/video.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['schedule'])
    <link href="{{ asset('css/sections/schedule.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['faq'])
    <link href="{{ asset('css/sections/faq.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['download_catalog'])
    <link href="{{ asset('css/sections/download_catalog.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['video_depoiments'])
    <link href="{{ asset('css/sections/video_depoiments.css') }}" rel="stylesheet"/>
  @endisset
  <link href="{{ asset('css/sections/footer.css') }}" rel="stylesheet"/>
@endsection
@section('content')

  @include('layout.header',[
    'header' => isset($elements['navbar']) ? $elements['navbar'] : (object) [
      'logo' => $page_config->icon
    ]
  ])

  @include('sections.banner',[
    'banner' => $elements['banner']
  ])

  @isset($elements['new_section'])
    @include('sections.new_section',[
      'new_section' => $elements['new_section']
    ])
  @endisset

  @isset($elements['product_list'])
    @include('sections.product_list',[
      'product_list' => $elements['product_list']
    ])
  @endisset

  @isset($elements['who_we_are'])
    @include('sections.who_we_are',[
      'who_we_are' => $elements['who_we_are']
    ])
  @endisset

  @isset($elements['section_list'])
    @include('sections.section_list',[
      'section_list' => $elements['section_list']
    ])
  @endisset

  @isset($elements['service'])
    @include('sections.service',[
      'service' => $elements['service']
    ])
  @endisset

  @isset($elements['text_divider'])
    @include('sections.text_divider',[
      'text_divider' => $elements['text_divider']
    ])
  @endisset

  @isset($elements['cms_catalog'])
    @include('sections.cms_catalog',[
      'cms_catalog' => $elements['cms_catalog']
    ])
  @endisset

  @isset($elements['testimonial'])
    @include('sections.testimonial',[
      'testimonial' => $elements['testimonial']
    ])
  @endisset

  <!-- 

    GALERIA

   -->

  @isset($elements['video'])
    @include('sections.video',[
      'video' => $elements['video']
    ])
  @endisset

  @isset($elements['schedule'])
    @include('sections.schedule',[
      'schedule' => $elements['schedule']
    ])
  @endisset

  @isset($elements['faq'])
    @include('sections.faq',[
      'faq' => $elements['faq']
    ])
  @endisset
  
  @isset($elements['download_catalog'])
    @include('sections.download_catalog',[
      'download_catalog' => $elements['download_catalog']
    ])
  @endisset

  @isset($elements['video_depoiments'])
    @include('sections.video_depoiments',[
      'video_depoiments' => $elements['video_depoiments']
    ])
  @endisset

  @include('sections.footer',[
    'footer' => $elements['footer']
  ])
@endsection
@section('scripts')
  @if(
    isset($elements['cms_catalog'])&& 
    isset($elements['cms_catalog']->api_url) &&
    isset($elements['cms_catalog']->origin)
  )
    <script>
      function loadCatalog(){
        let url = `{{ $elements['cms_catalog']->api_url }}/{{ $elements['cms_catalog']->take }}`;
        $.ajax({
          url,
          headers: {"store-token": "vfZLdEgU2ZP5FSO_ov7jYNdoEe74TVa"},
          method: "GET"
        }).done(data => {
          console.log(data);
          if(data.result){
            $('#container-products').html('');
            let products = data.response.map(product => {
              let name = product.name
              try {
                if (name.indexOf('"pt"') != -1 && JSON.parse(product.name)){
                  name = JSON.parse(product.name).pt
                }
              } catch { name = product.name }
              return {
                id: product.id,
                image: `{{ $elements['cms_catalog']->origin }}${product.logom}`,
                name: name,
                price: Number(product.price),
              }
            });

            products.forEach(product => {
              $('#container-products').append(
                renderProduct(product)
              );
            });

            $('#cms_catalog').addClass('loaded');
          }
        });
      }
      function renderProduct(product){
        let price = (new Intl.NumberFormat('pt-BR', {
          style: 'currency',
          currency: 'BRL'
        }).format(product.price)).replace('R$','');
        let [integer, decimal] = price.split(',');

        return `
          <div class="content-product">
            <img src="${product.image}" alt="${product.name}"/>
            <strong>${product.name}</strong>
            <p class="price">
              <small>R$</small>${integer}<small>,${decimal}</small>
              </p>
          </div>
        `;
      }
      $(function(){
        loadCatalog();
      });
    </script>
  @endif
@endsection