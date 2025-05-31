const STORAGE_KEYS = {
    ACTIVE_MENU: 'active_menu',
    ACTIVE_SUB_MENU: 'active_sub_menu',
    JUST_LOGGED_IN: 'justLoggedIn'
}

// * ==== DESACTIVATE PREVIOUS MENU ====== *//
let desactivatePreviousMenu = () => {
    let previousActive = document.querySelector(".sub_menu.active");

    if (previousActive) {
        previousActive.classList.remove("active");

        let oldSvg = previousActive.querySelector(".show_drop svg path");
        if (oldSvg) {
            oldSvg.setAttribute("d", "M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"); // +
        }

        let oldNext = previousActive.nextElementSibling;
        if (oldNext?.classList.contains("sub_menu_wrapper")) {
            oldNext.style.display = "none";
        }
    }
}

// * ==== ACTIVATE MENU ====== *//
let activateMenu = (menuElement) => {
    if (!menuElement) return
    menuElement.classList.add("active");

    let newSvg = menuElement.querySelector(".show_drop svg path");
    if (newSvg) {
        newSvg.setAttribute("d", "M3 11h18v2H3z"); // -
    }

    let next = menuElement.nextElementSibling;
    if (next?.classList.contains("sub_menu_wrapper")) {
        next.style.display = "block";
    }
}

// * ======== RESTORE ACTIVATE MENU ======= * //
let restoreActiveMenu = () => {
    let activeMenu = localStorage.getItem(STORAGE_KEYS.ACTIVE_MENU)
    if (!activeMenu) return;
    const savedItem = document.querySelector(`.sub_menu[data-id="${activeMenu}"]`)
    activateMenu(savedItem)
}

// * ======== RESTORE ACTIVATE SUB MENU ======= * //
let restoreActiveSubMenu = () => {
    let dataId = localStorage.getItem(STORAGE_KEYS.ACTIVE_SUB_MENU)
    if (!dataId) return;

    const wrapper = document.querySelector(".sub_menu.active + .sub_menu_wrapper")
    const items = wrapper?.querySelectorAll(".sub_menu_items .link_to_page")
    const item = items?.[+dataId - 1]

    if (item) {
        item.classList.add("circle")
    }
}

// * ======== HANDLE JUST LOGGED IN ======= * //

let HandleJustLoggedIn = () => {
    let justLoggedIn = localStorage.getItem(STORAGE_KEYS.JUST_LOGGED_IN)
    if (justLoggedIn !== 'true') return false
    let dashboardMenu = document.querySelector("#dashboard .sub_menu")
    if (dashboardMenu) {
        dashboardMenu.classList.add("active")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'dashboard')
    }
    localStorage.removeItem(STORAGE_KEYS.JUST_LOGGED_IN)
    return true
}

// * ======== AUTO ACTIVATE MENU FROM PATH ======= * //

let autoActivateMenuFromPath = () => {
    const currentPage = window.location.pathname.split("/").pop()
    desactivatePreviousMenu()
    
    if (currentPage === 'dashboard.php') {
        const dashboardMenu = document.querySelector(".sub_menu[data-id='dashboard']");
        activateMenu(dashboardMenu);
        document.querySelector(".sub_menu_wrapper .link_to_page.circle")?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'dashboard');
        localStorage.removeItem(STORAGE_KEYS.ACTIVE_SUB_MENU);
    } else {
        const links = document.querySelectorAll(".sub_menu_wrapper .link_to_page");
        links.forEach(link => {
            const href = link.getAttribute("href")?.split("/").pop();
            if (href === currentPage) {
                const submenu = link.closest(".sub_menu_wrapper").previousElementSibling;
                activateMenu(submenu);
                document.querySelector(".link_to_page.circle")?.classList.remove("circle")
                link.classList.add("circle");
                localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, submenu.getAttribute("data-id"));
                localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, link.getAttribute("data-id"));
            }
        });
    }
}


// * ====== ADD ACTIVE CLASS TO CURRENT ELEMENT  ======

let sub_menu = document.querySelectorAll(".sub_menu");

sub_menu.forEach(item => {
    item.addEventListener("click", () => {

        desactivatePreviousMenu();
        activateMenu(item)

        const dataId = item.getAttribute("data-id")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, dataId)
        if (dataId === 'dashboard') {
            localStorage.removeItem(STORAGE_KEYS.ACTIVE_SUB_MENU)
        }
    });
});


// * ======= ADD circle class to active sublink ========= * //
let links = document.querySelectorAll(".sub_menu_wrapper .link_to_page")

links.forEach(elem => {
    elem.addEventListener("click", () => {

        document.querySelector(".link_to_page.circle")?.classList.remove("circle")
        elem.classList.add("circle")


        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, document.querySelector(".sub_menu.active").getAttribute("data-id"));


        localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, elem.getAttribute('data-id'))
    })

})


// * INITIALIZATION 

window.addEventListener("DOMContentLoaded", () => {
    // ? ======== AUTO ACTIVATE BASED ON URL PATH ========== //
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has("just_logged_in")) {
        localStorage.setItem(STORAGE_KEYS.JUST_LOGGED_IN, "true");
        const cleanUrl = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanUrl);
    }

    document.querySelector(".sub_menu.active")?.classList.remove("active")

    if (!HandleJustLoggedIn()) {
        restoreActiveMenu()
        restoreActiveSubMenu()
    }
    
    autoActivateMenuFromPath()

})