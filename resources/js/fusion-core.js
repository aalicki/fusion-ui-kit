(function()
{
    // Enable removal of elements that can be dismissed
    document.querySelectorAll('.fcui-dismissible').forEach(item => {

        item.addEventListener('click', event => {
            event.currentTarget.parentNode.remove();
        })
    });
}());
