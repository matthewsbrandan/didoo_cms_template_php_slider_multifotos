<section id="faq">
  <div class="content" style="background: {{ $faq->background }}">
    <h2 style="{{ $faq->text_color ? 'color: '.$faq->text_color.';' : '' }}">
      {{ $faq->title }}
    </h2>
    <ul>
      @foreach($faq->questions as $question)
        <li>
          <strong 
            onclick="$(this).next().toggle('slow')"
            style="{{ $faq->text_color ? 'color: '.$faq->text_color.';' : '' }}"
          >{{ $question->title }}</strong>
          <p style="display: none; {{ $faq->answer_color ? 'color: '.$faq->answer_color.';' : '' }}"
          >{{ $question->description }}</p>
        </li>
      @endforeach
    </ul>
  </div>
</section>