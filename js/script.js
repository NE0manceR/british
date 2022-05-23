$('.show-contact-modal, .contact-modal__close-ic').on('click', function () {
  contact_modal_toggle();
})

function contact_modal_toggle() {
  $('.modal-bcg').fadeToggle();
}