function onSearch(value) {
    if (value == "tin the gioi" || value == "tin thế giới" || value == "thế giới" || value == "the gioi"|| value == "Thế giới" ) {
        window.location.href = './TheGioi.html'
    }
    if (value == "kinh doanh" || value == "tin kinh doanh" || value == "Kinh Doanh") {
        window.location.href = './tin2.html'
    }
    if (value == "can cuoc" || value == "tin căn cước" ) {
        window.location.href = './tin1.html'
    } 
}

const inputSearch = document.querySelector('#search__banbe')

inputSearch.addEventListener('keyup', (e) => {
    const value = e.target.value
    if (e.code == "Enter") {
        onSearch(value)
    }
})

const btnSearch = document.querySelector('#btn-search')
console.log(btnSearch);
btnSearch.addEventListener('click', () => {
    const value = inputSearch.value
    console.log(inputSearch.value);
    onSearch(value)
})
