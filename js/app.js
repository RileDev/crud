function showModal(el){
    let id = el.getAttribute('data-id');
    document.querySelector('.modal-footer').innerHTML = 
    "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>I'm not sure... Close this bro!</button>" + 
    "<a href='delete.php?id="+ id + "'><button class='btn btn-danger'>I know what I'm doing! Delete him!</button></a>";
    //console.log(id);
}