<script>
    function toggleLoginPopup()
    {
        body = document.body;
        modal = document.getElementById("auth-form-popup-modal");

        body.classList.toggle('overflow-hidden');
        modal.classList.toggle('invisible');
        modal.classList.toggle('opacity-100');

    }
</script>
