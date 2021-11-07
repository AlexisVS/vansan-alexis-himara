let notifications = document.querySelectorAll('#flashMessageNotification');
notifications.map(e => {
    e.addEventListener('click', eventClick => {
        eventClick.target.style.display = 'none';
    })
});