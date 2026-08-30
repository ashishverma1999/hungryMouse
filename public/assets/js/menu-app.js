/**
 * Hungry Mouse - Direct WhatsApp Ordering System & Menu Interactive App
 */

(function () {
  'use strict';

  const PRIMARY_PHONE = '919250515549';
  const SECONDARY_PHONE = '917652033520';

  window.HM_APP = {
    orderWhatsApp: function (name, price, portion, phoneChoice) {
      const phone = phoneChoice === '2' ? SECONDARY_PHONE : PRIMARY_PHONE;
      let text = `Hi Hungry Mouse, I would like to order:\n\n🍽️ *${name}*`;
      if (portion) {
        text += ` (${portion})`;
      }
      text += `\n💵 *Price:* ₹${price}`;
      text += `\n\n🚚 Delivery / 🛍️ Pickup (Please apply discount offer)`;
      text += `\nPlease confirm my order!`;

      const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
      window.open(url, '_blank');
    },

    selectPortion: function (btn, name, category, image) {
      const card = btn.closest('.menu-card');
      if (!card) return;

      const allPortionBtns = card.querySelectorAll('.portion-btn');
      allPortionBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const portion = btn.getAttribute('data-portion');
      const price = btn.getAttribute('data-price');

      const priceDisplay = card.querySelector('.menu-price');
      if (priceDisplay) priceDisplay.textContent = '₹' + price;

      const orderBtn = card.querySelector('.menu-order-btn');
      if (orderBtn) {
        orderBtn.setAttribute('data-portion', portion);
        orderBtn.setAttribute('data-price', price);
      }
    },

    filterMenu: function (query, category, dietary) {
      const q = (query || '').toLowerCase().trim();
      const cards = document.querySelectorAll('.menu-item-card-col');
      let visibleCount = 0;

      cards.forEach(col => {
        const itemCat = (col.getAttribute('data-category') || '').toLowerCase();
        const itemSub = (col.getAttribute('data-sub') || '').toLowerCase();
        const itemDiet = (col.getAttribute('data-diet') || '').toLowerCase();
        const itemName = (col.getAttribute('data-name') || '').toLowerCase();

        let matchQ = !q || itemName.includes(q) || itemSub.includes(q) || itemCat.includes(q);
        let matchCat = !category || category === 'all' || itemCat === category.toLowerCase() || itemSub === category.toLowerCase();
        let matchDiet = !dietary || dietary === 'all' || itemDiet === dietary.toLowerCase();

        if (matchQ && matchCat && matchDiet) {
          col.style.display = '';
          visibleCount++;
        } else {
          col.style.display = 'none';
        }
      });

      const noResults = document.getElementById('no-menu-results');
      if (noResults) {
        if (visibleCount === 0) noResults.classList.remove('d-none');
        else noResults.classList.add('d-none');
      }
    },

    openGalleryModal: function (src, title) {
      const modalImg = document.getElementById('gallery-modal-img');
      const modalTitle = document.getElementById('gallery-modal-title');
      if (modalImg) modalImg.src = src;
      if (modalTitle) modalTitle.textContent = title || 'Hungry Mouse Special';

      const modalEl = document.getElementById('galleryModal');
      if (modalEl && window.bootstrap) {
        const modal = new bootstrap.Modal(modalEl);
        modal.show();
      }
    }
  };

  document.addEventListener('DOMContentLoaded', function () {
    // Menu search input
    const searchInput = document.getElementById('menu-search-input');
    if (searchInput) {
      searchInput.addEventListener('input', function () {
        const activeCatBtn = document.querySelector('.menu-cat-btn.active');
        const cat = activeCatBtn ? activeCatBtn.getAttribute('data-target-cat') : 'all';
        const dietSelect = document.getElementById('diet-filter-select');
        const diet = dietSelect ? dietSelect.value : 'all';
        window.HM_APP.filterMenu(this.value, cat, diet);
      });
    }

    // Diet filter select
    const dietSelect = document.getElementById('diet-filter-select');
    if (dietSelect) {
      dietSelect.addEventListener('change', function () {
        const q = searchInput ? searchInput.value : '';
        const activeCatBtn = document.querySelector('.menu-cat-btn.active');
        const cat = activeCatBtn ? activeCatBtn.getAttribute('data-target-cat') : 'all';
        window.HM_APP.filterMenu(q, cat, this.value);
      });
    }

    // Category button filters
    const catButtons = document.querySelectorAll('.menu-cat-btn');
    catButtons.forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        catButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const cat = this.getAttribute('data-target-cat');
        const q = searchInput ? searchInput.value : '';
        const diet = dietSelect ? dietSelect.value : 'all';
        window.HM_APP.filterMenu(q, cat, diet);

        const targetSection = document.getElementById(cat);
        if (targetSection && cat !== 'all') {
          targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Subcategory pill filters
    const subPills = document.querySelectorAll('.sub-pill-btn');
    subPills.forEach(pill => {
      pill.addEventListener('click', function () {
        subPills.forEach(p => p.classList.remove('active'));
        this.classList.add('active');
        const sub = this.getAttribute('data-sub');
        const q = searchInput ? searchInput.value : '';
        const diet = dietSelect ? dietSelect.value : 'all';
        window.HM_APP.filterMenu(q, sub, diet);
      });
    });

    // Delegate "Order on WhatsApp" button click
    document.addEventListener('click', function (e) {
      const orderBtn = e.target.closest('.menu-order-btn');
      if (orderBtn) {
        const name = orderBtn.getAttribute('data-name');
        const price = orderBtn.getAttribute('data-price');
        const portion = orderBtn.getAttribute('data-portion') || '';
        window.HM_APP.orderWhatsApp(name, price, portion);
      }
    });
  });

})();
