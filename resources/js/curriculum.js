let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

$(document).ready(function() {
  $('.button').click(function(event) {
    event.preventDefault();
    let value = $('.curriculumId').val();

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
        console.log("フラグが'0'から'1'に変更されました");

        //value変更でテキスト変更・class変更でカーソル変更・disabledでクリックできなくする
        $('.button').val('受講済み').removeClass('clear').addClass('notClear').prop('disabled',true);

      },
      error: function(error) {
        // エラー時の処理
        console.log('エラー', error);
      },
    });
  });
});
