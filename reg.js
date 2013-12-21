window.onload = preload;

function preload()
{
        document.getElementById('cancel').onclick = messageboardredirect;
}

function messageboardredirect()
{
        location.replace('msg_box.php');
}
