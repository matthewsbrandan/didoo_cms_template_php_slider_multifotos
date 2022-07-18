@extends('layout.app')
@section('head')
  <link href="{{ asset('css/header.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/cookies.css') }}" rel="stylesheet"/>
  @if($elements['banner']->model->model_type == 'carousel')
    <link rel="stylesheet" type="text/css" href="{{ asset('js/slick-1.8.1/slick/slick.css') }}"/>
  @endif
  <link href="{{ asset('css/sections/banner/'.$elements['banner']->model->model_type.'.css') }}" rel="stylesheet"/>
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
  @isset($elements['multi_photos'])
    <link href="{{ asset('css/sections/multi_photos.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['text_divider'])
    <link href="{{ asset('css/sections/text_divider.css') }}" rel="stylesheet"/>
  @endisset
  @if(
    isset($elements['cms_catalog']) && 
    isset($elements['cms_catalog']->api_url) &&
    isset($elements['cms_catalog']->origin)
  )
    <link href="{{ asset('css/sections/cms_catalog.css') }}" rel="stylesheet"/>
  @endif
  @isset($elements['testimonial'])
    <link href="{{ asset('css/sections/testimonial.css') }}" rel="stylesheet"/>
  @endisset
  @isset($elements['cms_gallery'])
    <link href="{{ asset('css/sections/cms_gallery.css') }}" rel="stylesheet"/>
  @endisset
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
  @if(
    isset($elements['cms_blog']) && 
    isset($elements['cms_blog']->take)
  )
    <link href="{{ asset('css/sections/cms_blog.css') }}" rel="stylesheet"/>
  @endif
  @isset($elements['video_depoiments'])
    <link href="{{ asset('css/sections/video_depoiments.css') }}" rel="stylesheet"/>
  @endisset
  <link href="{{ asset('css/sections/footer.css') }}" rel="stylesheet"/>
  @isset($elements['popup'])
    <link href="{{ asset('css/sections/popup.css') }}" rel="stylesheet"/>
  @endisset
  @if(isset($elements['code']) && $elements['code']->head) {!! $elements['code']->head !!} @endif
@endsection
@section('content')
  @if(isset($elements['code']) && $elements['code']->init_body) {!! $elements['code']->init_body !!} @endif
  @include('layout.header',[
    'header' => isset($elements['navbar']) ? $elements['navbar'] : (object) [
      'logo' => $page_config->icon
    ]
  ])

  @include('sections.banner.index',[
    'banner_variations' => $elements['banner'],
    'variation' => $elements['banner']->model->model_type
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

  @isset($elements['multi_photos'])
    @include('sections.multi_photos',[
      'multi_photos' => $elements['multi_photos']
    ])
  @endisset

  @isset($elements['text_divider'])
    @include('sections.text_divider',[
      'text_divider' => $elements['text_divider']
    ])
  @endisset

  @if(
    isset($elements['cms_catalog']) && 
    isset($elements['cms_catalog']->api_url) &&
    isset($elements['cms_catalog']->origin)
  )
    @include('sections.cms_catalog',[
      'cms_catalog' => $elements['cms_catalog']
    ])
  @endif

  @isset($elements['download_catalog'])
    @include('sections.download_catalog',[
      'download_catalog' => $elements['download_catalog']
    ])
  @endisset

  @if(
    isset($elements['cms_blog']) && 
    isset($elements['cms_blog']->take)
  )
    @include('sections.cms_blog',[
      'cms_blog' => $elements['cms_blog']
    ])
  @endif

  @isset($elements['testimonial'])
    @include('sections.testimonial',[
      'testimonial' => $elements['testimonial']
    ])
  @endisset

  @isset($elements['video_depoiments'])
    @include('sections.video_depoiments',[
      'video_depoiments' => $elements['video_depoiments']
    ])
  @endisset

  @isset($elements['cms_gallery'])
    @include('sections.cms_gallery',[
      'cms_gallery' => $elements['cms_gallery']
    ])
  @endisset

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

  @include('sections.footer',[
    'footer' => $elements['footer']
  ])
@endsection
@section('scripts')
  @isset($elements['multi_photos'])
    @include('utils.modalMultiPhotos')
  @endisset
  @isset($elements['popup'])
    @include('sections.popup',[
      'popup' => $elements['popup']
    ])
  @endisset
  <script src="{{ asset('js/header.js') }}"></script>
  @include('layout.cookies')
  @if($elements['banner']->model->model_type == 'carousel')
    <script type="text/javascript" src="{{ asset('js/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script>
      $('.carousel').slick({
        fade: true,
        arrows: true,
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
      });


      $('.slick-prev').html(`@include('utils.icons.chevron_left')`);
      $('.slick-next').html(`@include('utils.icons.chevron_right')`);
    </script>
  @endif
  @if(isset($elements['jivochat']) && $elements['jivochat']->widget)
    <script src="//code-sa1.jivosite.com/widget/{{ $elements['jivochat']->widget }}" async></script>
  @endif
  <script>
    const icons = {
      minus: `@include('utils.icons.minus')`,
      plus: `@include('utils.icons.plus')`
    }
    function toggleIconPlusMinus(target){
      if(target.hasClass('icon-minus')) target.html(icons.plus);
      else target.html(icons.minus);
      target.toggleClass('icon-minus icon-plus');
    }
    function handleScrollNextOrPrevItem(next, id, widthContent){
      let container = getById(id);
      let maxWidth = container.scrollWidth;

      let newPositionScroll = 0;
      if(next){
        newPositionScroll = container.scrollLeft + widthContent;
      
        if(newPositionScroll > maxWidth) container.scrollLeft = maxWidth;
        else container.scrollLeft = newPositionScroll;
      }else{
        newPositionScroll = container.scrollLeft - widthContent;
      
        if(newPositionScroll < 0) container.scrollLeft = 0;
        else container.scrollLeft = newPositionScroll;
      }
    }
    function formatMoney(price){
      let price_formatted = String(price).replace(',','');
      price_formatted = price_formatted.replace('.',',');
      let arr_price = price_formatted.split(',');
      if(arr_price.length < 2) arr_price.push('00');
      arr_price[1] = arr_price[1].padEnd(2,'0');

      return `R$ ${ arr_price.join(',') }`;
    }
  </script>
  @if(
    isset($elements['cms_catalog']) && 
    isset($elements['cms_catalog']->api_url) &&
    isset($elements['cms_catalog']->origin)
  )
    <script>
      // INTIALIZATION
      const cms_catalog = {
        api_url: `{{ $elements['cms_catalog']->api_url }}`,
        take: `{{ $elements['cms_catalog']->take }}`,
        token: `{{ $elements['cms_catalog']->token }}`,
        origin: `{{ $elements['cms_catalog']->origin }}`
      };
    </script>
    <script src="{{ asset('js/cms_catalog.js') }}"></script>
  @endif
  @if(
    isset($elements['cms_blog']) &&
    isset($elements['cms_blog']->take)
  )
    <script>
      // INITIALIZATION
      const cms_blog = {
        url: `{{ route('blog.feed.more') }}`,
        take: `{{ $elements['cms_blog']->take }}`,
        token: `{{ $cms_page_token }}`,
        show: `{!! route('blog.feed.show',['slug' => '']) !!}`
      };
    </script>
    <script src="{{ asset('js/cms_blog.js') }}"></script>
    <!-- post/feed/more -->
  @endif
  @if(
    isset($elements['cms_gallery']) &&
    isset($elements['cms_gallery']->slug)
  )
    <script>
      // INTIALIZATION
      const cms_gallery = {
        slug: `{{ $elements['cms_gallery']->slug }}`,
        token: `{{ $cms_page_token }}`,
        take: <?php echo $elements['cms_gallery']->take ?? 'null'; ?>,
        url: `{{ route('api.gallery.show',['slug' => $elements['cms_gallery']->slug]) }}`
      };
    </script>
    <script src="{{ asset('js/cms_gallery.js') }}"></script>
  @endif
  @isset($elements['schedule'])
    <script>
      // INITIALIZATION
      const schedule = {
        whatsapp: `<?php echo isset($elements['footer']) && $elements['footer']->whatsapp ? numberWhatsappFormat($elements['footer']->whatsapp) : 'null'; ?>`,
        page_id: `{{ $page_config->page_id }}`,
        page_owner_id: `{{ $page_config->user_id }}`,
        url: `{{ route('api.contact.send') }}`,
        token: `{{ $cms_page_token }}`,
      };
    </script>
    <script src="{{ asset('js/schedule.js') }}"></script>
  @endisset
  @if(
    isset($elements['download_catalog']) &&
    isset($elements['download_catalog']->pdf_url)
  )
    <script>
      // INITIALIZATION
      const download_catalog = {
        page_id: `{{ $page_config->page_id }}`,
        page_owner_id: `{{ $page_config->user_id }}`,
        url: `{{ route('api.contact.send') }}`,
        token: `{{ $cms_page_token }}`,
        pdf_catalog_url: `{{ $elements['download_catalog']->pdf_url }}`
      };
    </script>
    <script src="{{ asset('js/download_catalog.js') }}"></script>
  @endif
  @if(isset($elements['code']) && $elements['code']->final_body) {!! $elements['code']->final_body !!} @endif
@endsection