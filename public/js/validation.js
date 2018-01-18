$(function() {

  $("#contact-form").validate({
    rules: {
      senderName: "required",
      senderEmail: {
        required: true,
        email: true
      },
      message: {
        required: true,
        maxlength: 500
      }
    }
  });

  $("#login-form").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      },
    }
  });

  $("#registration-form").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      },
      password_confirmation: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
    }
  });


});
