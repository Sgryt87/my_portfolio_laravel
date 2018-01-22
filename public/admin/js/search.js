$(document).ready(function () {
    $('#find').keyup(function (e) {
        if(e.keyCode === 13) {
            return false;
        }
        var item = $('#find').val();
        $.ajax
        ({
            type: "GET",
            url: "../../api/find?text=" + item,
            success: function (data) {
                var searchBody = $('#searchBody');
                var html = '';
                var img_path ='../../../storage/app/public/images/';
                searchBody.empty();
                for (var i = 0; i < data.length; i++) {
                    var obj = data[i];
                    html+=
                        '<tr>' +
                        '<th>' + obj.id + '</th>' +
                        '<th>' + obj.title + '</th>' +
                        '<th>' + '<a href="' + obj.url + '">'+ obj.url +'</a>'  +'</th>' +
                        '<th>' + '<img src="' + img_path + obj.image + '" width="150px">' + '</th>' +
                        '<th>' + obj.created_at + '</th>' +
                        '<th>' + obj.updated_at + '</th>' +
                        '</tr>';
                }
                searchBody.html(html);
            }
        });
    });
});


