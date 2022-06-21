(function () {
    const btnDel = document.querySelector('#btnDel');

    btnDel.addEventListener('click', () => {
        if (confirm('삭제하시겠습니까?')) {
            location.href = `delete?i_board=${btnDel.dataset.i_board}`;
        }
    });
})();
