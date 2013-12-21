window.onload = pageLoad;

function pageLoad()
{
        document.getElementById('cancel').onclick = messagebox;
}

function messagebox()
{
        location.replace('msg_box.php');
}
