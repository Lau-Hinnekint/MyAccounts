// const deleteBtn = document.querySelectorAll('.btnDelete');

// console.log(deleteBtn);


function confirmDelete(transactionId) {
    if (confirm ("Etes vous sûr de vouloir supprimer cette transaction ?")){
        window.location.href='trans/delete/' + transactionId;
    } else {    
    }
}