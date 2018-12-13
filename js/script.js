$(document).ready(function () {
  // $('#calendar').fullCalendar({
  //   // put your options and callbacks here
  // })

  $('.wpcr3_respond_1, .wpcr3_respond_2').addClass('container');
  $('.wpcr3_button_1').addClass('button');
  $('.wpcr3_button_1').text('ОСТАВИТЬ ОТЗЫВ');
  $('.wpcr3_button_1.wpcr3_submit_btn.button').text('ОТПРАВИТЬ');
  $('.wpcr3_button_1.wpcr3_cancel_btn.button').text('ОТМЕНИТЬ');

  var blockquote = document.querySelectorAll('div.wpcr3_review blockquote.wpcr3_content p');
  for (let i = 0; i < blockquote.length; i++) {
    if (blockquote[i].textContent == '') {
      blockquote[i].parentNode.style.padding = 0;
    }
  }
})