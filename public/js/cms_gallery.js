function loadGallery(){
  $('#container-gallery').parent().removeClass('gallery-filled');
  let isMosaic = $('#container-gallery').parent().hasClass('mosaic-gallery');
  let url = cms_gallery.url;
  $.ajax({
    url,
    headers: {
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
          if(isMosaic){
            if(i % 6 === 0){
              $('#container-gallery').append('<div class="row"></div>');
            }
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