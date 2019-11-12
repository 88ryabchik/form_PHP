'use strict'
var userName = document.querySelector('#username');
var userEmail = document.querySelector('#useremail');
var userPass = document.querySelector('#userpass');
var usersubscribe = document.querySelector('#usersubscribe');
var sendBtn = document.querySelector('#sendbtn');

console.log(sendBtn);

sendBtn.onclick = send;

function send () {

var data = {
    name: userName.value,
    password: userPass.value,
    email: userEmail.value,
    subscribe: userSubscribe.value,
}

fetch('/login', {
    method:'POST',
    body:JSON.stringify(data)
});
}