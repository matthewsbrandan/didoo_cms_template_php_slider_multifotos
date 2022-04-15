@include('sections.banner.' . $banner_variations->model->model_type,[
  'banner' => $banner_variations->model->$variation
])