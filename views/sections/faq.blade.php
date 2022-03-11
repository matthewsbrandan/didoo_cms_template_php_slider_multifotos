<section id="faq">
  <div class="content" style="background: {{ $faq->background }}">
    <h2 style="{{ $faq->text_color ? 'color: '.$faq->text_color.';' : '' }}">
      {{ $faq->title }}
    </h2>
    <style>
      .icon-toggler{
        {{ innerStyle('color',$faq->answer_color) }}
      }
    </style>
    <ul>
      @foreach($faq->questions as $i => $question)
        <li>
          <strong 
            onclick="$(this).next().toggle('slow'); toggleIconPlusMinus($(this).children('.icon-toggler'))"
            style="{{ $faq->text_color ? 'color: '.$faq->text_color.';' : '' }}"
          >
            @if($i === 0)
              <span class="icon-toggler icon-minus">@include('utils.icons.minus')</span>
            @else
              <span class="icon-toggler icon-plus">@include('utils.icons.plus')</span>
            @endif
            {{ $question->title }}
          </strong>
          <p style="
            {{ $i > 0 ? 'display: none; ':'' }}
            {{ $faq->answer_color ? 'color: '.$faq->answer_color.';' : '' }}
          ">{{ $question->description }}</p>
        </li>
      @endforeach
    </ul>
  </div>
</section>