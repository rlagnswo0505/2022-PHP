(function () {
    const btnDel = document.querySelector('#btnDel');
    const btnMod = document.querySelector('#btnMod');

    btnDel.addEventListener('click', () => {
        if (confirm('삭제하시겠습니까?')) {
            location.href = `delete?i_board=${btnDel.dataset.i_board}`;
        }
    });

    btnMod.addEventListener('click', () => {
        location.href = `mod?i_board=${btnMod.dataset.i_board}`;
    });
})();
