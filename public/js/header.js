var handleScrolling = {
  duration: 1.5,
  current_time: 0,
  interval: null,
  element_ids: ['#main-header']
};

$(function(){
  $(document).scroll(() => {
    $(handleScrolling.element_ids.join(', ')).show('slow');
    handleScrolling.current_time = handleScrolling.duration;
    if(handleScrolling.interval) clearInterval(handleScrolling.interval);

    handleScrolling.interval = setInterval(() => {
      if(handleScrolling.current_time === 0){
        clearInterval(handleScrolling.interval);
        $(handleScrolling.element_ids.join(', ')).hide('slow');
      }
      else handleScrolling.current_time-= 0.5;
    },500);
  });
})