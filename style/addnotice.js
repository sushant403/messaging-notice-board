

function closeForm() {
  document.contactform.name.value = '';
  document.contactform.email.value = '';
  document.contactform.message.value = '';

  $('.email').removeClass('typing');
  $('.name').removeClass('typing');
  $('.message').removeClass('typing');

  $('.cd-popup').removeClass('is-visible');
  $('.notification').addClass('is-visible');
  $('#notification-text').html("Notice Updated!");
}

$(document).ready(function($) {

  /* ------------------------- */
  /* Contact Form Interactions */
  /* ------------------------- */
  $('#contact').on('click', function(event) {
    event.preventDefault();

    $('#contactblurb').html('Questions, suggestions, and general comments are all welcome!');
    $('.contact').addClass('is-visible');

    if ($('#name').val().length != 0) {
      $('.name').addClass('typing');
    }
    if ($('#email').val().length != 0) {
      $('.email').addClass('typing');
    }
    if ($('#message').val().length != 0) {
      $('.message').addClass('typing');
    }
  });

  //close popup when clicking x or off popup
  $('.cd-popup').on('click', function(event) {
    if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });

  //close popup when clicking the esc keyboard button
  $(document).keyup(function(event) {
    if (event.which == '27') {
      $('.cd-popup').removeClass('is-visible');
    }
  });

  /* ------------------- */
  /* Contact Form Labels */
  /* ------------------- */
  $('#name').keyup(function() {
    $('.name').addClass('typing');
    if ($(this).val().length == 0) {
      $('.name').removeClass('typing');
    }
  });
  $('#email').keyup(function() {
    $('.email').addClass('typing');
    if ($(this).val().length == 0) {
      $('.email').removeClass('typing');
    }
  });
  $('#message').keyup(function() {
    $('.message').addClass('typing');
    if ($(this).val().length == 0) {
      $('.message').removeClass('typing');
    }
  });

  /* ----------------- */
  /* Handle submission */
  /* ----------------- */
  $('#contactform').submit(function() {
    var name = $('#name').val();
    var email = $('#email').val();
    var human = $('#human:checked').val();

    if (human) {
      if (email) {
        if (name) {
          if (message) {
            
            closeForm();

          } else {
            $('#notification-text').html("<strong>Please Message the admin!</strong>");
            $('.notification').addClass('is-visible');
          }
        } else {
          $('#notification-text').html('<strong>Provide Subject of the Notice.</strong>');
          $('.notification').addClass('is-visible');
        }
      } else {
        $('#notification-text').html('<strong>Provide Notices Details.</strong>');
        $('.notification').addClass('is-visible');
      }
    } else {
      $('#notification-text').html('<h3><strong><em>Please verify that you are a FACULTY.</em></strong></h3>');
      $('.notification').addClass('is-visible');
    }

    return false;
  });
});

