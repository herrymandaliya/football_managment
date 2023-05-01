$(document).ready(function() {
  // Hide input field by defaul

  // Listen for radio button changes
  $('input[name="type"]').change(function() {
    // If the "red" radio button is selected, show the input field
    if ($(this).val() == 0) {
      $('.budget').show();
      $('.hourly_rate').hide();
      // $('#hourly_rate').removeAttr('value');
      $('#hourly_rate').val('');
      // alert($(this).val());
    }
    // Otherwise, hide the input field
    else {
      $('.hourly_rate').show();
      $('.budget').hide();
      // $('#budget').removeAttr('value');
      $('#budget').val('');
      // alert($(this).val());
    }
  });
 
});




