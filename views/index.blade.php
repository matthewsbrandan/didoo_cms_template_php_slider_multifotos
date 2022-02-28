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
@endsection