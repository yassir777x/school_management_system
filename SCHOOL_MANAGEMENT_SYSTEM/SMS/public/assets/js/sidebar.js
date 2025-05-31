let STORAGE_KEYS = {
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
    desactivatePreviousMenu()
    const urlParams = new URLSearchParams(window.location.search);
    let currentPage = urlParams.get("action").trim()
    
    if(currentPage === 'dashboard') {
        let sub_menu = document.querySelector("#dashboard div[data-id='dashboard']")
        sub_menu.classList.add("active")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'dashboard')
    }
    if (currentPage === 'addstudent' || currentPage === 'allstudents') {
        let sub_menu = document.querySelector("#student div[data-id='student']")
        activateMenu(sub_menu)
        let next = sub_menu.nextElementSibling
        let sub_menu_item = next.querySelector(".link_to_page.circle")
        sub_menu_item?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'student')
        if (currentPage === 'addstudent') {
            next.querySelector(".link_to_page[data-id='1']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '1')
        }else if(currentPage === 'allstudents') {
            next.querySelector(".link_to_page[data-id='2']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '2')
        }
    }
    if (currentPage === 'addteacher' || currentPage === 'allteachers') {
        let sub_menu = document.querySelector("#teacher div[data-id='teacher']")
        activateMenu(sub_menu)
        let next = sub_menu.nextElementSibling
        let sub_menu_item = next.querySelector(".link_to_page.circle")
        sub_menu_item?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'teacher')
        if (currentPage === 'addteacher') {
            next.querySelector(".link_to_page[data-id='1']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '1')
        } else if (currentPage === 'allteachers') {
            next.querySelector(".link_to_page[data-id='2']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '2')

        }
    }
    if (currentPage === 'addclass' || currentPage === 'allclasses') {
        let sub_menu = document.querySelector("#class div[data-id='class']")
        activateMenu(sub_menu)
        let next = sub_menu.nextElementSibling
        let sub_menu_item = next.querySelector(".link_to_page.circle")
        sub_menu_item?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'class')
        if (currentPage === 'addclass') {
            next.querySelector(".link_to_page[data-id='1']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '1')
        } else if (currentPage === 'allclasses') {
            next.querySelector(".link_to_page[data-id='2']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '2')
            
        }
    }
    if (currentPage === 'addsubject' || currentPage === 'allsubjects') {
        let sub_menu = document.querySelector("#subjects div[data-id='subjects']")
        activateMenu(sub_menu)
        let next = sub_menu.nextElementSibling
        let sub_menu_item = next.querySelector(".link_to_page.circle")
        sub_menu_item?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'subject')
        if (currentPage === 'addsubject') {
            next.querySelector(".link_to_page[data-id='1']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '1')
        } else if (currentPage === 'allsubjects') {
            next.querySelector(".link_to_page[data-id='2']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '2')
            
        }
    }
    if (currentPage === 'schoolsettings' || currentPage === 'adminsettings') {
        let sub_menu = document.querySelector("#settings div[data-id='settings']")
        activateMenu(sub_menu)
        let next = sub_menu.nextElementSibling
        let sub_menu_item = next.querySelector(".link_to_page.circle")
        sub_menu_item?.classList.remove("circle")
        localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'settings')
        if (currentPage === 'schoolsettings') {
            next.querySelector(".link_to_page[data-id='1']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '1')
        } else if (currentPage === 'adminsettings') {
            next.querySelector(".link_to_page[data-id='2']").classList.add("circle")
            localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, '2')

        }
    }



    //  currentPage = window.location.pathname.split("/").pop()

    // if (currentPage === 'dashboard.php') {
    //     const dashboardMenu = document.querySelector(".sub_menu[data-id='dashboard']");
    //     activateMenu(dashboardMenu);
    //     document.querySelector(".sub_menu_wrapper .link_to_page.circle")?.classList.remove("circle")
    //     localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, 'dashboard');
    //     localStorage.removeItem(STORAGE_KEYS.ACTIVE_SUB_MENU);
    // } else {
    //     const links = document.querySelectorAll(".sub_menu_wrapper .link_to_page");
    //     links.forEach(link => {
    //         const href = link.getAttribute("href")?.split("/").pop();
    //         if (href === currentPage) {
    //             const submenu = link.closest(".sub_menu_wrapper").previousElementSibling;
    //             activateMenu(submenu);
    //             document.querySelector(".link_to_page.circle")?.classList.remove("circle")
    //             link.classList.add("circle");
    //             localStorage.setItem(STORAGE_KEYS.ACTIVE_MENU, submenu.getAttribute("data-id"));
    //             localStorage.setItem(STORAGE_KEYS.ACTIVE_SUB_MENU, link.getAttribute("data-id"));
    //         }
    //     });
    // }
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

    document.querySelector(".sub_menu.active")?.classList.remove("active")

    if (!HandleJustLoggedIn()) {
        restoreActiveMenu()
        restoreActiveSubMenu()
    }

    autoActivateMenuFromPath()

})

