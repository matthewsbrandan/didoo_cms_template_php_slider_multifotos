<div id="popup">
  <div class="overlay">
    <div class="container">
      <section></section>
      <button class="closeModal" type="button" onclick="$('#popup').hide();">
        @include('utils.icons.close')
      </button>
    </div>
  </div>
</div>
<script>
  function showPopup(){
    $('#popup').show();
  }
  // FUNCTION ONLOAD
  $(function(){
    $('#popup').bind('click', (e) => {
      if(e.target.classList.contains('overlay')){
        $('#popup').hide();
      }
    });
  });
</script>