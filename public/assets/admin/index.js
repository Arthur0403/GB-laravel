$(".delete-news").click(function(event){
    event.preventDefault();
    console.log(event.target.dataset.id);
    deleteNews(event.target.dataset.id, event.target.dataset.token);
});

function deleteNews(id, token){
    $.ajax({
        url: 'news/' + id,
        type: 'DELETE',
        dataType: "JSON",
        data: {
            "id": id,
            "_token": token
        },
        success: function(data){
            console.log('it works');
        }
    });
}

