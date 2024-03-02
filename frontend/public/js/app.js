require('./bootstrap');

const searchForm = document.querySelector('#search-form');
const searchButton = document.querySelector('#search-button');

searchForm.style.display = 'none';

searchButton.addEventListener('click', function() {
    if (searchForm.style.display === 'none') {
        searchForm.style.display = 'block';
    } else {
        searchForm.style.display = 'none';
    }
});
