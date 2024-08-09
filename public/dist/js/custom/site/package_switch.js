"use strict";

$(document).ready(function() {
  // Add 'dark-mode' class to the body by default
  $('body').addClass('dark-mode');

  $('.package-change').on('click', function() {
    if (is_demo) {
      errorMessage(jsLang("Demo Mode! This action can't be performed."));
      return;
    }

    var packageUserId = $(this).data('member-package');

    var url = MEMBER_SESSION_UPDATE;
    $.ajax({
      url: url,
      data: {
        _token: CSRF_TOKEN,
        packageUserId: packageUserId
      },
      type: "POST",
      beforeSend: () => {
        $(".user-main-loader").removeClass("hidden");
      },
      success: function(response) {
        if (response) {
          toastMixin.fire({
            title: response.message,
            icon: response.status == 'fail' ? 'error' : response.status,
          });
          window.location = USER_REDIRECT_DASHBOARD;
        }
      },
      complete: () => {
        $(".user-main-loader").addClass("hidden");
      },
      error: function(xhr, desc, err) {
        return 0;
      }
    });
  });
});
