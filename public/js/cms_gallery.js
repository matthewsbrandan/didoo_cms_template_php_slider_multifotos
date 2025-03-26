function loadGallery(){
  $('#container-gallery').parent().removeClass('gallery-filled');
  let wrapper = $('#container-gallery').parent();

  let mode = wrapper.hasClass('mosaic-gallery') ? 'mosaic' : wrapper.hasClass('netflix-gallery') ? 'netflix' : 'carousel';
  let rows = Number(wrapper[0].dataset.rows);

  let url = cms_gallery.url;
  $.ajax({
    url, headers: {
      "access-token": cms_gallery.token,
      "take": cms_gallery.take
    },
    method: "GET"
  }).done(data => {
    if(data.result){
      $('#container-gallery').html('');

      let images = data.response.images;
      if(images.length === 0) $('#container-gallery').html(`
        <p class="text-loading">Nenhuma imagem encontrada!</p>
      `);
      else{
        $('#container-gallery').parent().addClass('gallery-filled');
        images.forEach((image, i) => {
          if(mode === 'mosaic'){
            if((
              rows === 1 && i === 0
            ) || (
              rows !== 1 && i % (rows * 3) === 0
            )) $('#container-gallery').append('<div class="row"></div>');
            
            $('#container-gallery').children().last().append(
              renderImageFromGallery(image)
            );
          }else if(mode === 'netflix'){
            if((
              rows === 1 && i === 0
            ) || (
              rows !== 1 && (
                i === 0 || (
                  i === Math.ceil(images.length / rows)
                ) || (
                  rows === 3 && i === (Math.ceil(images.length / rows) * 2)
                )
              )
            )) $('#container-gallery').append('<div class="row"></div>');
            
            $('#container-gallery').children().last().append(
              renderImageFromGallery(image)
            );
          } else $('#container-gallery').append(
            renderImageFromGallery(image)
          );
        });

        handleImageOnerrorInScope('#container-gallery');
      } 
    }
  }).fail(err => {
    $('#container-gallery').html(`
      <p class="text-loading">Houve um erro ao carregar a galeria!</p>
    `);
  });;
}
function renderImageFromGallery(image){
  return `
    <img src="${image.name}" alt="${image.alt}" class="gallery-image"/>
  `;
}
$(function(){ loadGallery(); });