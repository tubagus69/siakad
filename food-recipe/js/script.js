$('#search-button').on('click', function () {
    $.ajax({
        url: 'https://api.edamam.com/search',
        type: 'get',
        dataType: 'json',
        data: {
            'app_id': '24c3f3fd',
            'app_key': 'bdc7da07837ed5e94d9ae93d31b16f21',
            'q': $('#search-input').val()
        },
        success: function (result) {
            if (result.count > 0) {
                // console.log(result);
                let recipe = result.hits;
                // console.log(recipe);
                var output = '';
                $.each(recipe, function (i, data) {
                    output += `
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="` + data.recipe.image + `">
                                <div class="card-body">
                                <h5 class="card-title mb-3">` + data.recipe.label + `</h5>
                                <h6 class="card-subtitle mb-3 text-muted">` + data.recipe.calories.toFixed(0) + ` Calories | ` + data.recipe.ingredientLines.length + ` Ingredients</h6>
                                <a href="#" class="card-link see-recipe" data-toggle="modal" data-target="#exampleModal" data-id="` + data.recipe.uri + `">See Recipe</a>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#recipe-list').html(output);
            } else {
                $('#recipe-list').html(`
                <div class="col">
                    <h1 class="text-center">Recipe Not Found!</h1>
                </div>`)
            }
        }
    });
});

$('#recipe-list').on('click', '.see-recipe', function () {
    // console.log($(this).data('id'));
    $.ajax({
        url: 'https://api.edamam.com/search',
        type: 'get',
        dataType: 'json',
        data: {
            'app_id': '24c3f3fd',
            'app_key': 'bdc7da07837ed5e94d9ae93d31b16f21',
            'r': $(this).data('id')
        },
        success: function (result) {
            let recipe = result[0];
            console.log(recipe);
            $('.modal-title').html(recipe.label);
            var output = '';
            var i;
            for (i = 0; i < recipe.ingredientLines.length; ++i) {
                output += `<li class = "list-group-item" > ` + recipe.ingredientLines[i] + ` </li>`;
            }
            console.log(output);
            $('.modal-body').html(`
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img src="` + recipe.image + `" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <ul class="list-group">
                            ` + output + `
                        </ul>
                    </div>
                </div>
            </div>
            `);
            $('.modal-footer').html(`
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="` + recipe.url + `" target="_blank">Details</a>
            `)
        }
    });
});