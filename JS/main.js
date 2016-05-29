function addUser(){ //  create a form for adding a new user
    var targetPlace = document.getElementById("myform");
    var children = targetPlace.childNodes; // get all child nodes
    for(var i=children.length-1; i>=0; i--){ // delete all child nodes
        targetPlace.removeChild(children[i]);
    }
    var lastNode = document.getElementById('lastNode'); // get last node
    targetPlace.setAttribute('action', 'addUserResult.php'); // set action of form
      
    var userID = document.createTextNode("\n\rUser ID:"); // create user id node
    var userIdInput = document.createElement('input');
    userIdInput.setAttribute('name', 'userID');
    userIdInput.setAttribute('type', 'text');
    userIdInput.setAttribute('required', 'required');
    targetPlace.insertBefore(userID, lastNode);
    targetPlace.insertBefore(userIdInput, lastNode);
    
    var userPassword = document.createTextNode("\n\rUser Password:"); // create user password node
    var userPasswordInput = document.createElement('input');
    userPasswordInput.setAttribute('name', 'userPassword');
    userPasswordInput.setAttribute('type', 'text');
    userPasswordInput.setAttribute('required', 'required');
    targetPlace.insertBefore(userPassword, lastNode);
    targetPlace.insertBefore(userPasswordInput, lastNode);
    
    var apartmentName = document.createTextNode("\n\rApartment Name:"); // create apartment name node
    var apartmentInput = document.createElement('input');
    apartmentInput.setAttribute('name', 'apartmentName');
    apartmentInput.setAttribute('type', 'text');
    apartmentInput.setAttribute('required', 'required');
    targetPlace.insertBefore(apartmentName, lastNode);
    targetPlace.insertBefore(apartmentInput, lastNode);
    
    var submit = document.createElement('input'); // create submit button
    submit.setAttribute('type', 'submit');
    submit.setAttribute('value', 'Submit');
    targetPlace.insertBefore(submit, lastNode);
}
function freezeUser(){ //  create a form for freezing a user
    var targetPlace = document.getElementById("myform");
    var children = targetPlace.childNodes; // get all child nodes
    for(var i=children.length-1; i>=0; i--){ // delete all child nodes
        targetPlace.removeChild(children[i]);
    }
    targetPlace.setAttribute('action', 'freezeUserResult.php'); // set action of form
    var lastNode = document.getElementById('lastNode'); // get last node
    
    var userID = document.createTextNode("\n\rUser ID:"); // create user id node
    var userIdInput = document.createElement('input');
    userIdInput.setAttribute('name', 'userID');
    userIdInput.setAttribute('type', 'text');
    userIdInput.setAttribute('required', 'required');
    targetPlace.insertBefore(userID, lastNode);
    targetPlace.insertBefore(userIdInput, lastNode);
    
    var submit = document.createElement('input'); // create submit button
    submit.setAttribute('type', 'submit');
    submit.setAttribute('value', 'Submit');
    targetPlace.insertBefore(submit, lastNode);
}
function deleteUser(){ //  create a form for deleting a user
    var targetPlace = document.getElementById("myform");
    var children = targetPlace.childNodes; // get all child nodes
    for(var i=children.length-1; i>=0; i--){ // delete all child nodes
        targetPlace.removeChild(children[i]);
    }
    targetPlace.setAttribute('action', 'deleteUserResult.php'); // set action of form
    var lastNode = document.getElementById('lastNode'); // get last node
    
    var userID = document.createTextNode("\n\rUser ID:"); // create user id node
    var userIdInput = document.createElement('input');
    userIdInput.setAttribute('name', 'userID');
    userIdInput.setAttribute('type', 'text');
    userIdInput.setAttribute('required', 'required');
    targetPlace.insertBefore(userID, lastNode);
    targetPlace.insertBefore(userIdInput, lastNode);
    
    var submit = document.createElement('input'); // create submit button
    submit.setAttribute('type', 'submit');
    submit.setAttribute('value', 'Submit');
    targetPlace.insertBefore(submit, lastNode);
}
function confirmLogOut(){
    if(confirm("Are you sure to log out?")){
        window.open("logOut.php", '_parent');
    }else{
        return false;
    }
}