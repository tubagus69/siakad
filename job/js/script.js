$.getJSON('https://calendarific.com/api/v2/holidays?api_key=b8150a8d65dc5b6bfd3a67273e4215c6cbe3d0f1b6a8fe0013ec8db9f0b0e59b&country=US&year=2019&content-type=application/json', function (data) {
    let response = data.response.holidays;
    console.log(data)
    $.each(response, function (index, data) {
        
        $('#daftar-pekerjaan').append('<div class="col-md-4"><div class="card mb-4 bg-light text-dark" style="width: 340px; height: 550px""><div class="card-body"><h5 class="card-title">' +  data.name  + '</h5><p class="card-text">' + data.description + '</p><h5 class="card-title">' + data.date.iso + '</h5><h5 class="card-title">' + data.type[0] + '</h5><h5 class="card-title">' +'</h5><a href="detail.php" class="btn btn-success">Detail</a></div></div></div>');
    });
});
 

