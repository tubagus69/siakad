$('#search-button').on('click', function () {
    $.ajax({
        url: 'https://newsapi.org/v2/everything',
        type: 'get',
        dataType: 'json',
        data: {
            'apiKey': '34e696b95d6445fd82634e51ea004547',
            'q': $('#search-input').val()
        },
        success: function (result) {
            // console.log(result);
            if (result.status == "ok") {
                let news = result.articles;
                // console.log(news);
                var output = '';
                $.each(news, function (i, data) {
                    output += `
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="` + data.urlToImage + `">
                                <div class="card-body">
                                <h5 class="card-title mb-3">` + data.title + `</h5>
                                <h5 class="card-title mb-3">Author: ` + data.author + `</h5>
                                <h6 class="card-subtitle mb-3 text-muted">Published At: ` + data.publishedAt + `</h6>
                                <a target="_blank" href="` + data.url + `" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-title="` + data.title + `" data-image="` + data.urlToImage + `" data-desc="` + data.description + `" data-url="` + data.url + `">See Detail</a>
                                </div>
                            </div>
                        </div>
                    `
                });
                $('#news-list').html(output);
            }
        }
    });
});

$('#news-list').on('click', '.see-detail', function () {
    console.log($(this).data('desc'));
    $('.modal-title').html($(this).data('title'));
    $('.modal-body').html(`
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img src="` + $(this).data('image') + `" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <ul class="list-group">
                        <li class = "list-group-item" > ` + $(this).data('desc') + ` </li>
                        </ul>
                    </div>
                </div>
            </div>
    `);
    $('.modal-footer').html(`
        <a class="btn btn-secondary" data-dismiss="modal">Close</a>
        <a class="btn btn-primary" href="` + $(this).data('url') + `" target="_blank">Go To Website</a>
    `);
});