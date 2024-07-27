<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/f5fd16f46e.js" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('add');
        const editBtn = document.getElementById('edit');
        const editSection = document.getElementById('edit-section');
        const addForm = document.getElementById('add-form');

        const borderAround = ['border-bottom-0', 'text-muted'];
        const borderBottom = ['border-top-0', 'border-start-0', 'border-end-0', 'border-bottom', 'text-primary'];

        function toggleSections() {
            const hash = window.location.hash.slice(1);

            if (hash === 'add') {
                editSection.classList.add('d-none');
                addForm.classList.remove('d-none');
                addBtn.classList.add(...borderAround);
                addBtn.classList.remove(...borderBottom);
                editBtn.classList.remove(...borderAround);
                editBtn.classList.add(...borderBottom);
            } else {
                editSection.classList.remove('d-none');
                addForm.classList.add('d-none');
                addBtn.classList.remove(...borderAround);
                addBtn.classList.add(...borderBottom);
                editBtn.classList.add(...borderAround);
                editBtn.classList.remove(...borderBottom);
            }
        }

        window.addEventListener('hashchange', toggleSections);
        window.addEventListener('load', toggleSections);

        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            const cardId = card.dataset.id;
            const displayCard = document.querySelector(`[data-id='${cardId}-display']`);
            const editCard = document.querySelector(`[data-id='${cardId}-edit']`);
            const editBtn = displayCard.querySelector('.edit-btn');
            const cancelBtn = editCard.querySelector('.cancel-btn');

            editBtn.addEventListener('click', (e) => {
                e.preventDefault();
                displayCard.classList.add('d-none');
                editCard.classList.remove('d-none');
            });

            cancelBtn.addEventListener('click', (e) => {
                e.preventDefault();
                displayCard.classList.remove('d-none');
                editCard.classList.add('d-none');
            });
        });
    });
</script>