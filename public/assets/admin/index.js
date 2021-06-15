$(".delete-news").click(function(event){
    event.preventDefault();
    console.log(event.target.dataset.id);
    deleteElement('news',event.target.dataset.id, event.target.dataset.token);
});

$(".delete-category").click(function(event){
    event.preventDefault();
    console.log(event.target.dataset.id);
    deleteElement('categories',event.target.dataset.id, event.target.dataset.token);
});

function deleteElement(elementName, id, token){
    $.ajax({
        url: elementName + '/' + id,
        type: 'DELETE',
        dataType: "JSON",
        data: {
            "id": id,
            "_token": token
        },
        success: function(data){
            console.log('it works');
            console.log(this.url);
        }
    });
}

