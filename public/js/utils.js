$(function() {
  $('.deleteConfirm').submit(function(e) {
    if (confirm("Are you sure you want to delete this item?")){
      e.submit();
    } else {
      e.preventDefault();
    }
  });
});
