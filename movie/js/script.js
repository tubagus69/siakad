$('#search-button').on('click',function(){
    $('#daftar-film').empty();
    $.ajax({
        url: 'http://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '4ebe84af',
            's' : $('#search-input').val()
        },
        success: function (result){
           // console.log(result);
           if(result.Response == "True"){
               let film = result.Search;

               $.each(film, function(i,data){
                $('#daftar-film').append(`<div class="col-md-4"> <div class="card"> 
                <center> <img src="`+
                data.Poster+`"class="card-img-top" alt="..."><div class="card-body"> <h6 class="card-title">`+
                data.Title+`</h5><p class="card-title">`+
                data.Type+`</p> <p class="card-title">`+
                data.Year+`</p><a href="" class="btn btn-primary card-link see-detail" data-toggle="modal" 
                 data-target="#exampleModal" data-id="${data.imdbID}">
                 Detail</a> </center> </div> </div>`)
               });
           } else {
               $('#daftar-film').html('<h1>Film tidak ditemukan</h1>');
           }
        }
    });
});

$('#daftar-film').on('click', '.see-detail', function () {

    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey': '4ebe84af',
            'i': $(this).data('id')
        },
        success: function (movie) {
            if (movie.Response === "True") {

                $('#modal-body').html(`
                    <div class="container-fluid" >
                        <div class="row" style="border:none;">
                            <div class="col-md-4" style="border:none;">
                                <img src="`+ movie.Poster + `" class="img-fluid">
                            </div>

                            <div class="col-md-8" style="border:none;">
                                <br>
                                    <h3>`+ movie.Title + `</h3>
                                   <p> Released : `+ movie.Released + `</p>
                                   <p> Genre : `+ movie.Genre + `          </p>      
                                   <p> Director : `+ movie.Director + `        </p>         
                                   <p> Director : `+ movie.Actors + `              </p>   
                                
                            </div>
                        </div>
                    </div>
                `);

            }
        }
    });

});