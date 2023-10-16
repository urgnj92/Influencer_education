let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

$(document).ready(function() {
  $('.button').click(function(event) {
    event.preventDefault();
    let value = $('.curriculumId').val();
    console.log(value);

    $.ajax({
      url: 'flgChenge',
      method: 'POST',
      data: JSON.stringify({ id: value }),
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
      contentType: 'application/json',
      success: function(data) {
        // 成功時の処理
        console.log('フラグが変更されました');
      },
      error: function(error) {
        // エラー時の処理
        console.log('エラー', error);
      },
    });
  });
});
