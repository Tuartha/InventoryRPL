<div id="alertMessage" tabindex="-1" class="hidden z-50 fixed flex inset-0 items-center justify-center bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow-lg">
        <button type="button" class="absolute top-3 right-3 text-gray-400 hover:bg-gray-200 rounded-lg w-8 h-8" onclick="closeModal()">
            ✖
        </button>
        <div class="p-4 text-center">
            <svg id="modal-icon" class="mx-auto mb-4 w-12 h-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <h3 id="modal-message" class="mb-5 text-lg font-normal text-gray-500"></h3>
        </div>
    </div>
</div>

<script>
    function showModal(message, status) {
        let icon = document.getElementById('modal-icon');
        let modalMessage = document.getElementById('modal-message');
        let modal = document.getElementById('alertMessage');

        document.querySelectorAll("#crud-tambah, #crud-edit, #popup-modal").forEach(el => {
            el.classList.add("hidden");
        });


        modalMessage.textContent = message;
        icon.className = "mx-auto mb-4 w-12 h-12"; // Reset icon class

        if (status === 'success') {
            icon.classList.add('text-green-500');
            modalMessage.classList.add('text-green-500');
        } else if (status === 'fail') {
            icon.classList.add('text-red-500');
            modalMessage.classList.add('text-red-500');
        }

        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('alertMessage').classList.add('hidden');
        updateTable();
    }
</script>
