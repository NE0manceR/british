$('.show-contact-modal, .contact-modal__close-ic').on('click', function () {
  contact_modal_toggle();
})

function contact_modal_toggle() {
  console.log('work')
  $('.modal-bcg').fadeToggle();
}

$("form.ajax").submit(function (e) {
  var form = $(this);
  var url = form.data('action');
  if (url == undefined)
    url = form.attr('action');
  if (url) {
    contact_modal_toggle()
    // $("#divLoading").addClass('show');
    // $('#modal-bg, .modal').slideUp();
    // $('html, body').css('overflow-y', 'hidden');

    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(),
      complete: function () {
        $("div#divLoading").removeClass('show');
      },

      success: function (res) {

        var text = '';
        if (res['success']) {
          text = res['success'];
        } else if (res['errors']) {
          text = res['errors'];
        }
        console.log(res)
        Swal.fire(res['success']);
        // close_modal_window();

        // Swal.fire({
        //     title: text,
        //     // text: "sometext",
        //     icon: 'success',
        // });

        // $('#ajaxFormResult p').html(text);
        // $("#ajaxFormResult").addClass('show');

        if (form.data('gtm-event')) {
          dataLayer.push({ 'event': form.data('gtm-event') });
        }
      },
      error: function () {
        e.preventDefault();
        $('#ajaxFormResult p').html('РџРѕРјРёР»РєР°! РЎРїСЂРѕР±СѓР№С‚Рµ Р·Р° 2С…РІ С‰Рµ СЂР°Р·');
        $("#ajaxFormResult").addClass('show');
      }
    });
    return false;
  }
});
// $("#ajaxFormResult").click(function () {
//   $("div#ajaxFormResult").removeClass('show');
//   $('#modal-bg, .modal').slideUp();
//   $('html').css('overflow-y', 'auto');
// });

