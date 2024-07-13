import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})

document.addEventListener("DOMContentLoaded", function() {
  const progressTracker = document.getElementById('progress-tracker');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const itemsPerPage = 4; // Jumlah item yang ingin ditampilkan per halaman
  let currentPage = 0;

  // Fungsi untuk menampilkan item sesuai halaman
  function showItems() {
      const items = progressTracker.querySelectorAll('.progress-step');
      items.forEach((item, index) => {
          if (index >= currentPage * itemsPerPage && index < (currentPage + 1) * itemsPerPage) {
              item.style.display = 'block';
          } else {
              item.style.display = 'none';
          }
      });
  }

  // Tampilkan item pertama kali
  showItems();

  // Tombol Previous
  prevButton.addEventListener('click', function() {
      if (currentPage > 0) {
          currentPage--;
          showItems();
      }
  });

  // Tombol Next
  nextButton.addEventListener('click', function() {
      const totalItems = progressTracker.querySelectorAll('.progress-step').length;
      if (currentPage < Math.ceil(totalItems / itemsPerPage) - 1) {
          currentPage++;
          showItems();
      }
  });
});

