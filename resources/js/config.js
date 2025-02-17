import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Sidebar toggle logic
document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.querySelector(".sidebar-toggle");
    const sidebarOverlay = document.querySelector(".sidebar-overlay");
    const sidebarMenu = document.querySelector(".sidebar-menu");

    // console.log("Sidebar Toggle:", sidebarToggle);
    // console.log("Sidebar Overlay:", sidebarOverlay);
    // console.log("Sidebar Menu:", sidebarMenu);

    if (sidebarToggle && sidebarOverlay && sidebarMenu) {
        function toggleSidebar() {
            const isOpen = sidebarMenu.classList.contains("open");

            if (isOpen) {
                sidebarMenu.classList.remove("open");
                sidebarOverlay.classList.remove("show");
            } else {
                sidebarMenu.classList.add("open");
                sidebarOverlay.classList.add("show");
            }
        }

        sidebarToggle.addEventListener("click", function (e) {
            e.preventDefault();
            toggleSidebar();
        });

        sidebarOverlay.addEventListener("click", function (e) {
            e.preventDefault();
            toggleSidebar();
        });
    } else {
        console.error("Sidebar elements not found! Check HTML structure.");
    }

    const dropdownToggle = document.querySelector("#kelola-user-dropdown .sidebar-dropdown-toggle");
    const dropdownMenu = document.getElementById("kelola-user-menu");
    const dropdownIcon = dropdownToggle.querySelector("i.ph-caret-right");

    dropdownToggle.addEventListener("click", function (e) {
        e.preventDefault();
        const isOpen = !dropdownMenu.classList.contains("hidden");
        // Toggle dropdown menu
        dropdownMenu.classList.toggle("hidden");
        // Toggle arrow icon rotation
        dropdownIcon.classList.toggle("rotate-90", !isOpen);
        // Simpan state di localStorage agar tetap terbuka saat refresh
        localStorage.setItem("kelolaUserDropdown", isOpen ? "closed" : "open");
    });

    // Pulihkan state dropdown saat halaman dimuat
    if (localStorage.getItem("kelolaUserDropdown") === "open") {
        dropdownMenu.classList.remove("hidden");
        dropdownIcon.classList.add("rotate-90");
    }
});


// start: Tab
document.querySelectorAll('[data-tab]').forEach(function (item) {
  item.addEventListener('click', function (e) {
      e.preventDefault()
      const tab = item.dataset.tab
      const page = item.dataset.tabPage
      const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
      document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function (i) {
          i.classList.remove('active')
      })
      document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function (i) {
          i.classList.add('hidden')
      })
      item.classList.add('active')
      target.classList.remove('hidden')
  })
})
// end: Tab


// // start: Popper
// const popperInstance = {};
// document.querySelectorAll(".dropdown").forEach(function (item, index) {
//   const popperId = "popper-" + index;
//   const toggle = item.querySelector(".dropdown-toggle");
//   const menu = item.querySelector(".dropdown-menu");
//   menu.dataset.popperId = popperId;
//   popperInstance[popperId] = Popper.createPopper(toggle, menu, {
//     modifiers: [
//       {
//         name: "offset",
//         options: {
//           offset: [0, 8],
//         },
//       },
//       {
//         name: "preventOverflow",
//         options: {
//           padding: 24,
//         },
//       },
//     ],
//     placement: "bottom-end",
//   });
// });
// document.addEventListener("click", function (e) {
//   const toggle = e.target.closest(".dropdown-toggle");
//   const menu = e.target.closest(".dropdown-menu");
//   if (toggle) {
//     const menuEl = toggle.closest(".dropdown").querySelector(".dropdown-menu");
//     const popperId = menuEl.dataset.popperId;
//     if (menuEl.classList.contains("hidden")) {
//       hideDropdown();
//       menuEl.classList.remove("hidden");
//       showPopper(popperId);
//     } else {
//       menuEl.classList.add("hidden");
//       hidePopper(popperId);
//     }
//   } else if (!menu) {
//     hideDropdown();
//   }
// });

// function hideDropdown() {
//   document.querySelectorAll(".dropdown-menu").forEach(function (item) {
//     item.classList.add("hidden");
//   });
// }
// function showPopper(popperId) {
//   popperInstance[popperId].setOptions(function (options) {
//     return {
//       ...options,
//       modifiers: [...options.modifiers, { name: "eventListeners", enabled: true }],
//     };
//   });
//   popperInstance[popperId].update();
// }
// function hidePopper(popperId) {
//   popperInstance[popperId].setOptions(function (options) {
//     return {
//       ...options,
//       modifiers: [...options.modifiers, { name: "eventListeners", enabled: false }],
//     };
//   });
// }
// // end: Popper