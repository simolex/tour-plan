$(document).ready(function () {
  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element.form)
          .find("label[for=" + element.id + "]")
          .addClass(errorClass);
      },
      // unhighlight: function (element, errorClass, validClass) {
      //   $(element).removeClass(errorClass).addClass(validClass);
      //   $(element.form)
      //     .find("label[for=" + element.id + "]")
      //     .removeClass(errorClass);
      // },
      messages: {
        name: {
          required: "Please specify your name",
          minlength: "Please enter at least 2 characters.",
        },
        phone: {
          required: "Phone number required",
          phoneUS: "Your phone number must be in the format of (xxx)xxx-xx-xx",
        },
        email: {
          required: "Email address required",
          email: "Your email address must be in the format of name@domain.com",
        },
      },
    });
  });
});
