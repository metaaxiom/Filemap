$('.collapsible .folder-name').click(function(){
  $(this).parent().find('.file, .folder-wrap').slideToggle(150);
});
